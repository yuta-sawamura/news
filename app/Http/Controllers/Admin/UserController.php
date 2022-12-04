<?php

namespace App\Http\Controllers\Admin;

use App\User;;

use App\Models\Attendance;

use Auth;
use App\Enums\User\Role;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\UserRequest;
use Carbon\Carbon;

class UserController extends Controller
{
    public function __construct(User $user)
    {
        $this->user = $user;
        $this->dt = Carbon::now();
    }

    public function index(Request $request)
    {
        $params = $request->query();

        $users = User::search($params)
            ->orderBy('id', 'desc')
            ->paginate(config('const.PAGINATION_PER_PAGE'));

        return view('admin.user.index')->with([
            'users' => $users,
            'params' => $params,
        ]);
    }

    public function create()
    {
        return view('admin.user.create');
    }

    public function store(UserRequest $request)
    {
        $this->user->fill($request->validated())->save();
        return redirect('/admin/user')->with('success_message', 'ユーザーを追加しました。');
    }

    public function show(User $user, Request $request)
    {
        $params = $request->query();
        if (!isset($params['year'])) $params['year'] = $this->dt->year;

        return view('admin.user.show')->with([
            'user' => $user,
            'params' => $params,
        ]);
    }

    public function edit(User $user)
    {
        return view('admin.user.edit')->with([
            'user' => $user
        ]);
    }

    public function update(User $user, UserRequest $request)
    {
        $user->fill($request->validated())->save();

        return redirect('/admin/user/show/' . $user->id)->with('success_message', 'ユーザー情報を編集しました。');
    }

    public function delete(User $user)
    {
        $user->delete();

        return redirect('/admin/user')->with('success_message', 'ユーザーを削除しました。');
    }
}
