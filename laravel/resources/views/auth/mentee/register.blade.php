@extends('layouts.before_login_base')

@section('title', 'メンティーの登録')
@section('content')
        <div class="justify-content-center">
            <div>
                <div class="flex justify-center items-center py-20">
                    {{-- <div class="card-header">{{ __('Login') }}</div> --}}

                    <div class="bg-white inline-block px-20 py-20">

                        <div class="pb-5">
                            <p class="text-3xl font-bold flex justify-center items-center pb-4 text-teal-400">新規会員登録</p>
                            <div class="border-b-2 px-64"></div>
                        </div>

                        <div>

                            <form method="POST" action="{{ route('mentee.register_confirm') }}" id="form">
                                @csrf
                                <div>
                                    <label for="email" class="font-bold">{{ __('メールアドレス') }}</label>
                                    <div class="mb-6 mt-2">
                                        <div>
                                            <input id="email" type="email"
                                                class="bg-gray-100 w-full h-10 p-2 rounded outline-none" @error('email') is-invalid @enderror
                                                name="email" value="{{ old('email') }}" required autocomplete="email"
                                                placeholder="Anovey@com">
                                        </div>
                                        @error('email')
                                            <span class="text-red-500" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div>
                                    <label for="password" class="font-bold">{{ __('パスワード（英数字8文字以上）') }}</label>
                                    <div class="mb-6 mt-2 relative">
                                        <div class="flex bg-gray-100 rounded">
                                            <input id="password" type="password"
                                                class="bg-gray-100 w-full h-10 p-2 rounded outline-none" @error('password') is-invalid @enderror
                                                name="password" required autocomplete="new-password" placeholder="Password">
                                            <span id="buttonEye"
                                                class="fa fa-eye my-auto mr-3 cursor-pointer"></span>
                                        </div>
                                        @error('password')
                                            <span class="text-red-500" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div>
                                    <label for="password-confirm" class="font-bold flex justify-center items-center -ml-48 mr-48">{{ __('確認用パスワード') }}</label>
                                    <div class="mb-6 mt-2 relative">
                                        <div class="flex bg-gray-100 rounded">
                                            <input id="password-confirm" type="password"
                                                class="bg-gray-100 w-full h-10 p-2 rounded outline-none" name="password_confirmation"  @error('password_confirmation') is-invalid @enderror
                                            required autocomplete="new-password" placeholder="上と同じパスワードを入力してください">
                                            <span id="buttonEye2"
                                            class="fa fa-eye my-auto mr-3 cursor-pointer"></span>
                                        </div>
                                        @error('password_confirmation')
                                            <span class="text-red-500" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div>
                                    <div>
                                        <div class="flex justify-center items-center">
                                            <input type="checkbox" name="" id="" class="mr-3 h-25 w-25" required>
                                            <label for="remember">
                                                <p><a href="" class="text-teal-400">利用規約</a>と<a href=""
                                                        class="text-teal-400">プライバシーポリシー</a>に同意します。</p>
                                            </label>
                                        </div>
                                    </div>
                                </div>


                                <div class="mb-0 flex justify-center items-center">
                                    <div>
                                        <button type="submit" id="button"
                                            class="bg-teal-400 text-white mb-10 ml-2 mt-10 px-40 py-2 flex justify-center items-center rounded shadow-lg opacity-50 pointer-events-none">
                                            {{ __('無料で会員登録する') }}</button>
                                            <a class="text-teal-400 flex justify-center items-center"
                                                href="{{ route('login') }}">
                                                {{ __('アカウントのお持ちの方はこちら') }}
                                            </a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    @endsection
