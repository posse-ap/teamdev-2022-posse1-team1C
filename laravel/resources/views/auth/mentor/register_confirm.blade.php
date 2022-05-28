@extends('layouts.before_login_base')
@section('title', 'メンターの登録確認画面')

 @section('content')
 <div class="container">
     <div class="row justify-content-center">
         <div class="col-md-8">
             <div class="flex justify-center items-center py-20 ml-20">
                 {{-- <div class="card-header">{{ __('Login') }}</div> --}}

                 <div class=" bg-white inline-block px-20 py-20">

                     <div class="pb-5">
                         <p class="text-3xl font-bold flex justify-center items-center pb-4 text-teal-400">新規会員登録</p>
                         <div class="border-b-2 px-64"></div>
                     </div>

                     <div>
                         <form method="POST" action="{{ route('register') }}">
                             @csrf
                             <div>
                                 <div class="flex">
                                    <label for="email" class="text-md-right font-bold">{{ __('メールアドレス') }}</label>
                                    <div class="border bg-red-500 text-white text-xs px-4 pt-1 rounded ml-2">必須</div>
                                </div>
                                <p class="mt-6 mb-4">ここにメールアドレスがはいります</p>
                             </div>

                             <div>
                                <div class="flex">
                                    <label for="password" class="text-md-right font-bold">{{ __('パスワード（英数字8文字以上）') }}</label>
                                    <div class="border bg-red-500 text-white text-xs px-4 pt-1 rounded ml-2">必須</div>
                                </div>
                                <p class="mt-6 mb-4">ここにパスワードが入ります</p>
                             </div>

                             <div>
                                <div class="flex">
                                    <label for="password-confirm" class="text-md-right font-bold">{{ __('確認用パスワード') }}</label>
                                    <div class="border bg-red-500 text-white text-xs px-4 pt-1 rounded ml-2">必須</div>
                                </div>
                                <p class="mt-6 mb-4">ここにパスワードが入ります</p>
                             </div>

                             <div class="form-group row">
                                <div class="flex">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right font-bold">{{ __('会社名') }}</label>
                                    <div class="border bg-red-500 text-white text-xs px-4 pt-1 rounded ml-2">必須</div>
                                </div>
                                <p class="mt-6 mb-4">ここに会社名が入ります</p>
                             </div>

                             <div>
                                <div class="flex">
                                    <label for="password-confirm" class="text-md-right font-bold">{{ __('部署名') }}</label>
                                    <div class="border bg-red-500 text-white text-xs px-4 pt-1 rounded ml-2">必須</div>
                                </div>
                                <p class="mt-6 mb-4">ここに部署名が入ります</p>
                             </div>

                             <div>
                                 <div class="flex">
                                    <label for="password-confirm" class="text-md-right font-bold">{{ __('電話番号') }}</label>
                                    <div class="border bg-red-500 text-white text-xs px-4 pt-1 rounded ml-2">必須</div>
                                </div>
                                <p class="mt-6 mb-4">ここに電話番号が入ります</p>
                             </div>

                             <div>
                                 <div class="flex">
                                    <label for="password-confirm" class="text-md-right font-bold">{{ __('paypay送金リンク') }}</label>
                                    <div class="border bg-red-500 text-white text-xs px-4 pt-1 rounded ml-2">必須</div>
                                </div>
                                <p class="mt-6 mb-4">ここにリンクが入ります</p>
                             </div>

                             <div>
                                 <div class="offset-md-4">
                                     <div class="flex justify-center items-center">
                                         <input type="checkbox" name="" id="">
                                             <label for="remember">
                                                <p><a href="" class="text-teal-400">利用規約</a>と<a href="" class="text-teal-400">プライバシーポリシー</a>に同意します。</p>
                                             </label>
                                     </div>
                                 </div>
                             </div>


                             <div class="row mb-0 flex justify-center items-center">
                                 <div class="offset-md-4">    
                                     <button type="submit" class="bg-teal-400 text-white mb-10 ml-2 mt-10 px-40 py-2 flex justify-center items-center rounded shadow-lg">
                                     {{ __('無料で会員登録する') }}</button>
                                         @if (Route::has('password.request'))
                                         <a class="text-teal-400 flex justify-center items-center" href="{{ route('login') }}">
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