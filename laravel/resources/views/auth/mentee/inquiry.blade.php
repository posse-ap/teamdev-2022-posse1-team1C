@extends('layouts.after_login_base')

@section('title', 'アンケート')
 
 
@section('content') 
    <div>
        <div class="justify-content-center">
            <div>
                <div class="flex justify-center items-center py-20 ml-20">
                    <div class="bg-white inline-block px-20 py-20 ml-20">
                        <i class="flex justify-center items-center fa-3x mb-6 fa-solid fa-circle-question"></i>
                        <p class="flex justify-center items-center font-bold mb-10">お問い合せフォーム</p> 
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div>
                                <div class="flex">
                                   <label for="name" class="text-md-right font-bold">{{ __('お名前') }}</label>
                                   <div class="border bg-red-500 text-white text-xs px-4 pt-1 rounded ml-2">必須</div>
                               </div>         
                                <div>
                                    <input id="name" type="text" class="bg-gray-100 mb-6 mt-2 w-full h-10 p-2 rounded @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name">
                       
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div>
                                <div class="flex">
                                   <label for="email" class="text-md-right font-bold">{{ __('メールアドレス') }}</label>
                                   <div class="border bg-red-500 text-white text-xs px-4 pt-1 rounded ml-2">必須</div>
                               </div>
                                <div>
                                    <input id="email" type="email" class="bg-gray-100 mb-6 mt-2 w-full h-10 p-2 rounded @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="info@menta.work">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                       </form>
                        <div>
                            <div class="flex mb-3">
                                <p class="font-bold">お問い合せ内容</p>
                                <div class="border bg-red-500 text-white text-xs px-4 pt-1 rounded ml-2">必須</div>
                            </div>
                            <textarea type="text" class="border rounded" cols="40" rows="4" placeholder="ご意見などご自由に入力ください。"></textarea>
                        </div>
                        <div>
                            <button type="submit" class="bg-teal-400 text-white rounded shadow-lg px-20 mt-5 ml-20">送信</button>
                        </div>
                    </div> 
                </div>
           </div>
       </div>
    </div>
@endsection