<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

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
        return [
            'sei' => 'required|string|max:50',
            'mei' => 'required|string|max:50',
            'sei_kana' => 'nullable|string|max:100',
            'mei_kana' => 'nullable|string|max:100',
            'gender' => 'required|integer',
            'email' => ['required', 'string', 'email:strict,dns', 'max:255', 'unique:users,email,' . $this->email . ',email'],
            'birth' => 'required|date',
            'password' => 'nullable|string|min:8',
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
