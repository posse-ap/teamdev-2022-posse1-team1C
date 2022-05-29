@extends('layouts.before_login_base')
@section('title', 'メンターの登録確認画面')

@section('content')
<div class="justify-content-center">
    <div>
        <div class="flex justify-center items-center py-20 ml-20">
            <div class="bg-white inline-block px-20 py-20">
                <div class="pb-5">
                    <p class="text-3xl font-bold flex justify-center items-center pb-4 text-teal-400">新規会員登録</p>
                    <div class="border-b-2 px-64"></div>
                </div>
                <div>
                    <form method="POST" action="{{ route('mentor.register_send') }}">
                        @csrf
                        <div class="mb-5">
                            <div class="flex">
                                <label for="email" class="text-md-right font-bold">{{ __('メールアドレス') }}</label>
                                <div class="border bg-red-500 text-white text-xs px-4 pt-1 rounded ml-2">必須</div>
                            </div>
                            <div class="mt-2">
                                {{ $inputs["email"] }}
                                <input  type="hidden" id="email" name="email" required value="{{ $inputs["email"] }}">
                            </div>
                        </div>

                        <div class="mb-5">
                            <div class="flex">
                                <label for="password"
                                    class="text-md-right font-bold">{{ __('パスワード（英数字8文字以上）') }}</label>
                                <div class="border bg-red-500 text-white text-xs px-4 pt-1 rounded ml-2">必須</div>
                            </div>
                            <div class="mt-2">
                                {{ $inputs["password"] }}
                                <input  type="hidden" id="password" name="password" required value="{{ $inputs["password"] }}">
                            </div>
                        </div>

                        <div class="mb-5">
                            <div class="flex">
                                <label for="company_name"
                                    class="col-md-4 text-md-right font-bold">{{ __('会社名') }}</label>
                                <div class="border bg-red-500 text-white text-xs px-4 pt-1 rounded ml-2">必須</div>
                            </div>
                            <div class="mt-2">
                                {{ $inputs["company_name"] }}
                                <input  type="hidden" id="company_name" name="company_name" required value="{{ $inputs["company_name"] }}">
                            </div>
                        </div>

                        <div class="mb-5">
                            <div class="flex">
                                <label for="department_name" class="text-md-right font-bold">{{ __('部署名') }}</label>
                                <div class="border bg-red-500 text-white text-xs px-4 pt-1 rounded ml-2">必須</div>
                            </div>
                            <div class="mt-2">
                                {{ $inputs["department_name"] }}
                                <input  type="hidden" id="department_name" name="department_name" required value="{{ $inputs["department_name"] }}">
                            </div>
                        </div>

                        <div class="mb-5">
                            <div class="flex">
                                <label for="paypay_link"
                                    class="text-md-right font-bold">{{ __('paypay送金リンク') }}</label>
                                <div class="border bg-red-500 text-white text-xs px-4 pt-1 rounded ml-2">必須</div>
                            </div>
                            <div class="mt-2">
                                {{ $inputs["paypay_link"] }}
                                <input  type="paypay_link" id="paypay_link" name="paypay_link" required value="{{ $inputs["paypay_link"] }}">
                            </div>
                        </div>

                        <div>
                            <div>
                                <div class="flex justify-center items-center">
                                    <label for="remember">
                                        <p><a href="" class="text-teal-400">利用規約</a>と<a href=""
                                                class="text-teal-400">プライバシーポリシー</a>に同意します。</p>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="mb-0 flex justify-center items-center">
                            <div class="offset-md-4">
                                <button type="submit" name="action" value="submit"
                                    class="bg-teal-400 text-white mb-10 ml-2 mt-10 px-40 py-2 flex justify-center items-center rounded shadow-lg">
                                    {{ __('無料で会員登録する') }}</button>
                                <a class="text-teal-400 flex justify-center items-center" 
                                    href="{{ route('login') }}">
                                    {{ __('アカウントのお持ちの方はこちら') }}
                                </a>
                            </div>
                        </div>
                    </form>
                    <a href="{{ route('mentee.register_show') }}" name="action" value="back"
                        class="text-xl font-bold flex justify-center items-center text-teal-400 mt-10 underline">戻る
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection