<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Hash;
use App\User;
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
        // $this->user->fill($request->validated())->save();
        $this->user->fill(array_merge(
            $request->all(),
            ['password' => Hash::make($request->password)]
        ))->save();
        return redirect('/admin/user')->with('success_message', 'ユーザーを追加しました。');
    }

    public function show(User $user, Request $request)
    {
        $params = $request->query();

        return view('admin.user.show')->with([
            'user' => $user,
            'params' => $params,
        ]);
    }
}
