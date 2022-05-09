@extends('layouts.BeforeLoginBase')

@section('title', 'メンティーの登録')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card flex justify-center items-center py-20 ml-20">
                {{-- <div class="card-header">{{ __('Login') }}</div> --}}
                
                <div class="card-body bg-white inline-block px-20 py-20">

                    <div class="pb-5">
                        <p class="text-3xl font-bold flex justify-center items-center pb-4 text-teal-400">新規会員登録</p>
                        <div class="border-b-2 px-64"></div>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right font-bold">{{ __('メールアドレス') }}</label>
    
                                <div class="col-md-6">
                                    <input id="email" type="email" class="bg-gray-100 mb-6 mt-2 w-full h-10 p-2 rounded form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="info@menta.work">
    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row ">
                                <label for="password" class="col-md-4 col-form-label text-md-right font-bold">{{ __('パスワード（英数字8文字以上）') }}</label>
        
                                <div class="col-md-6 flex">
                                    <input id="password" type="password" class="bg-gray-100 mb-6 mt-2 w-full h-10 p-2 rounded form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                    <span id="buttonEye" class="fa fa-eye ml-2 mt-5"></span>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right font-bold flex justify-center items-center -ml-48 mr-48">{{ __('確認用パスワード') }}</label>
                                <div class="col-md-6 flex">
                                    <input id="password-confirm" type="password" class="bg-gray-100 mb-6 mt-2 w-full h-10 p-2 rounded form-control" name="password_confirmation" required autocomplete="new-password" placeholder="上と同じパスワードを入力してください">
                                    <span id="buttonEye2" class="fa fa-eye ml-2 mt-5"></span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check flex justify-center items-center">
                                        <input class="form-check-input" type="checkbox" name="" id="">
                                            <label class="form-check-label" for="remember">
                                               <p><a href="" class="text-teal-400">利用規約</a>と<a href="" class="text-teal-400">プライバシーポリシー</a>に同意します。</p>
                                            </label>
                                    </div>
                                </div>
                            </div>
                   
                            
                            <div class="form-group row mb-0 flex justify-center items-center">
                                <div class="col-md-8 offset-md-4">    
                                    <button type="submit" class="btn btn-primary bg-teal-400 text-white mb-10 ml-2 mt-10 px-40 py-2 flex justify-center items-center rounded shadow-lg">
                                    {{ __('無料で会員登録する') }}</button>
                                        @if (Route::has('password.request'))
                                        <a class="btn btn-link text-teal-400 flex justify-center items-center" href="{{ route('login') }}">
                                            {{ __('アカウントのお持ちの方はこちら') }}
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