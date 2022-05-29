@extends('layouts.app')

@section('content')
    <div>
        <div>
            <div>
                <div class="flex justify-center items-center py-20">
                    {{-- <div class="card-header">{{ __('Login') }}</div> --}}

                    <div class="bg-white inline-block px-20 py-20">

                        <div class="pb-5">
                            <p class="text-3xl font-bold flex justify-center items-center pb-4 text-teal-400">ログイン</p>
                            <div class="border-b-2 px-64"></div>
                        </div>

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="mb-2">
                                <label for="email"
                                    class="font-bold h-10 ml-3">{{ __('メールアドレス') }}</label>

                                <div class="flex justify-center items-center">
                                    <input id="email" type="email"
                                        class="bg-gray-100 mb-6 mt-2 w-full h-10 p-2 rounded @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                                        placeholder="info@menta.work">

                                    @error('email')
                                        <span role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-2">
                                <label for="password"
                                    class="font-bold h-10 ml-3">{{ __('パスワード（英数字8文字以上）') }}</label>

                                <div class="flex justify-center items-center relative">
                                    <input id="password" type="password"
                                        class="bg-gray-100 w-full h-10 p-2 rounded @error('password') is-invalid @enderror"
                                        name="password" required autocomplete="current-password" placeholder="Password">
                                    <span id="buttonEye" class="fa fa-eye absolute right-5 top-1/2 -translate-y-1/2"></span>
                                    @error('password')
                                        <span role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            {{-- <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check flex justify-center items-center">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div> --}}

                            <div class="mb-0 flex justify-center items-center">
                                <div>
                                    <button type="submit"
                                        class="bg-teal-400 w-full text-white mb-20 mt-10 py-2 rounded shadow-lg">
                                        {{ __('ログイン') }}
                                    </button>
                                    <div>
                                        <a
                                            class="text-teal-400 border border-teal-400 rounded px-5 py-1 mb-4 mx-5 flex justify-center items-center">
                                            {{ __('アカウントをお持ちでない方はこちら') }}
                                        </a>
                                    </div>
                                    @if (Route::has('password.request'))
                                        <a class="text-teal-400 flex justify-center items-center"
                                            href="{{ route('password.request') }}">
                                            {{ __('パスワードお忘れの方はこちら') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
