@extends('layouts.after_login_base')
@section('title', 'メンタープロフィール編集')

@section('content')
    <h1 class="font-bold text-3xl pt-10 flex justify-center items-center">基本情報</h1>
    <div>
        <div>
            <div>
                <div class="flex justify-center items-center py-20">

                    <div class="bg-white inline-block px-20 py-20">

                        <div>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div>
                                    <div class="flex">
                                        <label for="email" class="font-bold">{{ __('メールアドレス') }}</label>
                                        <div class="border bg-red-500 text-white text-xs px-4 pt-1 rounded ml-2">必須</div>
                                    </div>

                                    <div>
                                        <input id="email" type="email"
                                            class="bg-gray-100 mb-6 mt-2 w-full h-10 p-2 rounded @error('email') is-invalid @enderror"
                                            name="email" value="{{ old('email') }}" required autocomplete="email"
                                            placeholder="info@menta.work">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div>
                                    <div class="flex">
                                        <label for="password" class="font-bold">{{ __('パスワード（英数字8文字以上）') }}</label>
                                        <div class="border bg-red-500 text-white text-xs px-4 pt-1 rounded ml-2">必須</div>
                                    </div>
                                    <div class="flex">
                                        <input id="password" type="password"
                                            class="bg-gray-100 mb-6 mt-2 w-full h-10 p-2  rounded @error('password') is-invalid @enderror"
                                            name="password" required autocomplete="new-password">
                                        <span id="buttonEye" class="fa fa-eye ml-2 mt-5 -mr-10"></span>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div>
                                    <div class="flex">
                                        <label for="password-confirm" class="font-bold">{{ __('確認用パスワード') }}</label>
                                        <div class="border bg-red-500 text-white text-xs px-4 pt-1 rounded ml-2">必須</div>
                                    </div>
                                    <div class="flex">
                                        <input id="password-confirm" type="password"
                                            class="bg-gray-100 mb-6 mt-2 w-full h-10 p-2 rounded"
                                            name="password_confirmation" required autocomplete="new-password"
                                            placeholder="上と同じパスワードを入力してください">
                                        <span id="buttonEye2" class="fa fa-eye ml-2 mt-5 -mr-10"></span>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex">
                                        <label for="password-confirm" class="font-bold">{{ __('会社名') }}</label>
                                        <div class="border bg-red-500 text-white text-xs px-4 pt-1 rounded ml-2">必須</div>
                                    </div>
                                    <div class="flex">
                                        <input id="company-name" type="text"
                                            class="bg-gray-100 mb-6 mt-2 w-full h-10 p-2 rounded" name="" placeholder="会社名">
                                    </div>
                                </div>
                                <div>
                                    <div class="flex">
                                        <label for="password-confirm" class="font-bold">{{ __('部署名') }}</label>
                                        <div class="border bg-red-500 text-white text-xs px-4 pt-1 rounded ml-2">必須</div>
                                    </div>
                                    <div class="flex">
                                        <input id="department-name" type="text"
                                            class="bg-gray-100 mb-6 mt-2 w-full h-10 p-2 rounded"
                                            name="password_confirmation" placeholder="部署名">
                                    </div>
                                </div>
                                <div>
                                    <div class="flex">
                                        <label for="password-confirm" class="font-bold">{{ __('電話番号') }}</label>
                                        <div class="border bg-red-500 text-white text-xs px-4 pt-1 rounded ml-2">必須</div>
                                    </div>
                                    <div class="flex">
                                        <input type="number" class="bg-gray-100 mb-6 mt-2 w-full h-10 p-2 rounded"
                                            name="password_confirmation">
                                    </div>
                                </div>
                                <div>
                                    <div class="flex">
                                        <label for="password-confirm"
                                            class="font-bold">{{ __('paypay送金リンク') }}</label>
                                        <div class="border bg-red-500 text-white text-xs px-4 pt-1 rounded ml-2">必須</div>
                                    </div>
                                    <div class="flex">
                                        <input type="url" class="bg-gray-100 mb-6 mt-2 w-full h-10 p-2 rounded" name=""
                                            placeholder="https://example.com">
                                    </div>
                                </div>
                                <div class="mb-0 flex justify-center items-center">
                                    <div>
                                        <button type="submit"
                                            class="bg-teal-400 text-white mb-10 ml-2 mt-10 px-40 py-2 flex justify-center items-center rounded shadow-lg">
                                            {{ __('保存する') }}</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
