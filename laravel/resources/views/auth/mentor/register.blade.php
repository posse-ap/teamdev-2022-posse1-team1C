@extends('layouts.before_login_base')
@section('title', 'メンターの登録')
@section('content')

<div class="justify-content-center">
    <div class="flex justify-center items-center py-20 ml-20">
        <div class="bg-white inline-block px-20 py-20">
            <div class="pb-5">
                <p class="text-3xl font-bold flex justify-center items-center pb-4 text-teal-400">新規会員登録</p>
                <div class="border-b-2 px-64"></div>
            </div>
            <form method="POST" id="form" name="mentor_form">
                @csrf
                <div>
                    <div class="flex">
                        <label for="email" class="font-bold">{{ __('メールアドレス') }}</label>
                        <div class="border bg-red-500 text-white text-xs px-4 pt-1 rounded ml-2">必須</div>
                    </div>
                    <div class="mb-6 mt-2">
                        <div>
                        <input id="email"
                                type="email"
                                class="bg-gray-100 w-full h-10 p-2 rounded outline-none"
                                name="email"
                                value="{{ $request->email ?? old('email')}}"
                                autocomplete="email"
                                placeholder="Anovey@com"
                                >
                        </div>
                        @error('email')
                        <span class="text-red-500" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="">
                    <div class="flex">
                        <label for="password" class="text-md-right font-bold">{{ __('パスワード（英数字8文字以上）') }}</label>
                        <div class="border bg-red-500 text-white text-xs px-4 pt-1 rounded ml-2">必須</div>
                    </div>
                    <div class="mb-6 mt-2">
                        <div class="flex bg-gray-100 rounded">
                        <input
                                id="password"
                                type="password"
                                class="bg-gray-100 w-full h-10 p-2 rounded outline-none"
                                name="password"
                                value="{{ $request->password ?? old('password')}}"
                                autocomplete="new-password"
                                placeholder="Password"
                                >
                            <span id="buttonEye" class="fa fa-eye my-auto mr-3 cursor-pointer"></span>
                        </div>
                        @error('password')
                        <span class="text-red-500" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div>
                    <div class="flex">
                        <label for="password-confirm" class="text-md-right font-bold">{{ __('確認用パスワード') }}</label>
                        <div class="border bg-red-500 text-white text-xs px-4 pt-1 rounded ml-2">必須</div>
                    </div>
                    <div class="mb-6 mt-2">
                        <div class="flex bg-gray-100 rounded">
                        <input
                                id="password-confirm"
                                type="password"
                                class="bg-gray-100 w-full h-10 p-2 rounded outline-none" 
                                name="password_confirmation"
                                value="{{ $request->password_confirmation ?? old('password_confirmation')}}"
                                autocomplete="new-password"
                                placeholder="上と同じパスワードを入力してください"
                                >
                            <span id="buttonEye2" class="fa fa-eye my-auto mr-3 cursor-pointer"></span>
                        </div>
                        @error('password_confirmation')
                        <span class="text-red-500" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div>
                    <div class="flex">
                        <label for="company-name" class="text-md-right font-bold">{{ __('会社名') }}</label>
                        <div class="border bg-red-500 text-white text-xs px-4 pt-1 rounded ml-2">必須</div>
                    </div>
                    <div class="mb-6 mt-2">
                        <div class="flex gap-x-2 w-full">
                                <input
                                        id="company-name"
                                        type="text"
                                        class="bg-gray-100  w-5/6 h-10 p-2 rounded outline-none" 
                                        name="search_company_name"
                                        value="{{ $request->search_company_name ?? old('search_company_name')}}"
                                        autocomplete=""
                                        placeholder="株式会社如何"
                                        >
                                <button type="submit"
                                        class="bg-teal-400 w-1/6 text-white justify-center items-center rounded shadow-lg px-6"
                                        formaction="{{ route('mentor.register_company_search') }}">
                                    {{ __('検索') }}</button>
                        </div>
                        @error('company_name')
                        <span class="text-red-500" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="mb-6">
                @if(isset($api_data))
                            <label for="result" class="text-md-right font-bold">{{ __('検索結果') }}</label>
                            @if($api_data->count > 0)
                                <p class="mt-2">  {{ $api_data->count }} 件見つかりました。以下から該当する会社を選択してください</p>
                                <ul>
                                    @foreach($api_data->corporation as $corporation)
                                        <li class="mt-1"><input type="radio" name="company_name"
                                        value="{{ $corporation->name }}"
                                        class="mr-1">{{ $corporation->name }}</li>
                                    @endforeach
                                </ul>
                            @else
                                <p> お探しの会社は見つかりませんでした。もう一度検索してください。</p>
                            @endif
                        @endif
                </div>

                <div>
                    <div class="flex">
                        <label for="department-name" class="text-md-right font-bold">{{ __('部署名') }}</label>
                        <div class="border bg-red-500 text-white text-xs px-4 pt-1 rounded ml-2">必須</div>
                    </div>
                    <div class="mb-6 mt-2 relative">
                        <div class="flex bg-gray-100 rounded">
                        <input
                                id="department-name"
                                type="text"
                                class="bg-gray-100 w-full h-10 p-2 rounded outline-none" 
                                name="department_name"
                                value="{{ $request->department_name ?? old('department_name')}}"
                                autocomplete=""
                                placeholder="営業部"
                                >
                        </div>
                        @error('department_name')
                        <span class="text-red-500" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div>
                    <div class="flex">
                        <label for="paypay-link" class="text-md-right font-bold">{{ __('paypay送金リンク') }}</label>
                        <div class="border bg-red-500 text-white text-xs px-4 pt-1 rounded ml-2">必須</div>
                    </div>
                    <div class="mb-6 mt-2 relative">
                        <div class="flex bg-gray-100 rounded">
                        <input
                                id="paypay-link"
                                type="text"
                                class="bg-gray-100 w-full h-10 p-2 rounded outline-none" 
                                name="paypay_link"
                                value="{{ $request->paypay_link ?? old('paypay_link')}}"
                                autocomplete=""
                                placeholder="https://qr.paypay.ne.jp/"
                                >
                        </div>
                        @error('paypay_link')
                        <span class="text-red-500" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div>
                    <div>
                        <div class="flex justify-center items-center">
                        <input
                                type="checkbox"
                                class="mr-3 h-25 w-25"
                                name="agree"
                                id="agree"
                                >
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
                            class="bg-teal-400 text-white mb-10 ml-2 mt-10 px-40 py-2 flex justify-center items-center rounded shadow-lg opacity-50 pointer-events-none"
                            formaction="{{ route('mentor.register_confirm') }}">
                            {{ __('無料で会員登録する') }}</button>
                        <a class="text-teal-400 flex justify-center items-center" href="{{ route('login') }}">
                            {{ __('アカウントのお持ちの方はこちら') }}
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection