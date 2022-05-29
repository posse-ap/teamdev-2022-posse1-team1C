@extends('layouts.before_login_base')

@section('title', 'メンティーの登録画面')

@section('content')
    <div>
        <div>
            <div>
                <div class="flex justify-center items-center py-20">
                    {{-- <div class="card-header">{{ __('Login') }}</div> --}}

                    <div class="bg-white inline-block px-20 py-20">

                        <div class="pb-5">
                            <p class="text-3xl font-bold flex justify-center items-center pb-4 text-teal-400">新規会員登録</p>
                            <div class="border-b-2 px-64"></div>
                        </div>

                        <div>
                            <form method="POST" action="{{ route('mentee.register_send') }}">
                                @csrf
                                <div>
                                    <label for="email" class="font-bold">{{ __('メールアドレス') }}</label>
                                    <div class="mt-5">
                                        {{ $inputs["email"] }}
                                        <input  type="hidden" id="email" name="email" required value="{{ $inputs["email"] }}">
                                    </div>
                                </div>

                                <div class="mt-10">
                                    <label for="password" class="font-bold">{{ __('パスワード（英数字8文字以上）') }}</label>

                                    <div class="mt-5 mb-20">
                                        {{ $inputs["password"] }}
                                        <input type="hidden" id="password" name="password" required value="{{ $inputs["password"] }}">
                                    </div>
                                </div>

                                <div>
                                    <div>
                                        <div class="flex justify-center items-center">
                                                <p><a href="" class="text-teal-400">利用規約</a>と<a href=""
                                                        class="text-teal-400">プライバシーポリシー</a>に同意します。</p>
                                        </div>
                                    </div>
                                </div>


                                <div class="mb-0 flex justify-center items-center">
                                    <div>
                                        <button type="submit" name="action" value="submit"
                                            class="bg-teal-400 text-white mb-10 mt-10 px-40 py-2 flex justify-center items-center rounded shadow-lg">
                                            {{ __('無料で会員登録する') }}</button>
                                            <a class="text-teal-400 flex justify-center items-center"
                                                href="{{ route('login') }}">
                                                {{ __('アカウントのお持ちの方はこちら') }}
                                            </a>
                                    </div>
                                </div>
                            </form>
                            <a href="{{ route('mentee.register_show') }}" name="action" value="back"
                                class="text-xl font-bold flex justify-center items-center text-teal-400 mt-10 underline">戻る</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection