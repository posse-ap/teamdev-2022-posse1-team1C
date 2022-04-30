@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card flex justify-center items-center py-20 ml-20">
                {{-- <div class="card-header">{{ __('Login') }}</div> --}}
                
                <div class="card-body bg-white inline-block px-20 py-20">

                    <div class="pb-5">
                        <p class="text-3xl font-bold flex justify-center items-center pb-4 text-teal-400">ログイン</p>
                        <div class="border-b-2 px-64"></div>
                    </div>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right font-bold flex justify-center items-center -ml-64 mr-5">{{ __('メールアドレス') }}</label>

                            <div class="col-md-6 flex justify-center items-center">
                                <input id="email" type="email" class="bg-gray-100 mb-6 mt-2 w-9/12 h-10 p-2 rounded form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="info@menta.work">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="flex justify-center items-centercol-md-4 h-10 -ml-32 mr-4 p-2 col-form-label text-md-right font-semibold">{{ __('パスワード（英数字8文字以上）') }}</label>

                            <div class="col-md-6 flex justify-center items-center">
                                <input id="password" type="password" class="bg-gray-100 w-9/12 h-10 p-2 ml-7 rounded form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                                <span id="buttonEye" class="fa fa-eye ml-2"></span>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
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

                        <div class="form-group row mb-0 flex justify-center items-center">
                            <div class="col-md-8 offset-md-4 ">
                                <button type="submit" class="btn btn-primary bg-teal-400 text-white mb-20 ml-2 mt-10 px-40 py-2 flex justify-center items-center rounded shadow-lg">
                                    {{ __('ログイン') }}
                                </button>
                            <div class="inline-block">
                                <a class="btn text-teal-400 border-solid-1 border border-teal-400 rounded px-5 py-1 mb-4 ml-10 flex justify-center items-center">
                                    {{ __('アカウントをお持ちでない方はこちら') }}
                                </a>
                            </div>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link text-teal-400 flex justify-center items-center" href="{{ route('password.request') }}">
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
