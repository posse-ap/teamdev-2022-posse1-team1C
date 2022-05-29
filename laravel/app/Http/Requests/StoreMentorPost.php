<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMentorPost extends FormRequest
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
            "email" => "required|email:strict,dns,spoof|max:255|unique:users,email",
            "password" => "required|string|regex:/\A([a-zA-Z0-9]{8,})+\z/u",
            "password_confirmation" => "required|same:password",
            "company_name" => "required",
            "department_name" => "required",
            "paypay_link" => "required|url",
        ];
    }

    /**
     * 定義済みバリデーションルールのエラーメッセージ取得
     *
     * @return array
     */
    public function messages()
    {
        return [
            'required'              => ':attribute は入力必須です。',
            'password.regex'        => 'パスワードは英数字8文字以上です。',
            'password_confirmation.same' => 'パスワードと確認用パスワードが一致しません。',
            'email.unique' => 'このメールアドレスはすでに登録されています。',
            'paypay_link.url' => 'URLの形式で入力してください。',
        ];
    }
}
