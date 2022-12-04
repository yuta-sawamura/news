<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Auth;
use App\Enums\User\Role;
use App\Enums\User\Status;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        if (Auth::user()->role === Role::System) {
            return $this->systemRules();
        } elseif (Auth::user()->role === Role::Organization_admin) {
            return $this->organizationAdminRules();
        }
    }

    /**
     * Get the validation rules that apply to the request.
     * システム管理者
     *
     * @return array
     */
    private function systemRules()
    {
        return [
            'sei' => 'required|string|max:50',
            'mei' => 'required|string|max:50',
            'sei_kana' => 'nullable|string|max:100',
            'mei_kana' => 'nullable|string|max:100',
            'gender' => 'required|integer',
            'email' => 'nullable|unique:users,email,' . $this->id . '|email|max:100|required_unless:role,' . Role::Normal,
            'birth' => 'required|date',
            'password' => 'nullable|string|min:8|required_unless:role,' . Role::Normal,
            'status' => 'required|in:' . Status::Continue . ',' . Status::Cancel,
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     * 組織管理者
     *
     * @return array
     */
    private function organizationAdminRules()
    {
        return [
            'sei' => 'required|string|max:50',
            'mei' => 'required|string|max:50',
            'sei_kana' => 'nullable|string|max:100',
            'mei_kana' => 'nullable|string|max:100',
            'gender' => 'required|integer',
            'email' => 'nullable|unique:users,email,' . $this->id . '|email|max:100',
            'birth' => 'required|date',
            'password' => 'nullable|string|min:8',
            'status' => 'required|in:' . Status::Continue . ',' . Status::Cancel,
        ];
    }

    /**
     * エラーメッセージのカスタマイズ
     * @return array
     */
    public function messages()
    {
        return [
            'email.email' => 'メールアドレスを正しく設定してください。',
            'email.required_unless' => 'メールアドレスは必須です。',
            'email.required_if' => 'メールアドレスは必須です。',
            'password.required_unless' => 'パスワードは必須です。',
            'password.required_if' => 'パスワードは必須です。',
        ];
    }
}
