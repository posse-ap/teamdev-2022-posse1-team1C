@extends('layouts.before_login_base')

@section('title', 'メンター検索画面')

@section('content')
    <div>
        <div>
            <div>
                <div class="flex justify-center items-center py-20 mx-auto w-1/2">
                    <div class="inline-block w-full">
                        <section class="bg-white mb-10 p-5 w-full">
                            <div class="pb-5 bg-white">
                                <p class="text-3xl font-bold flex pb-4">メンターを探す</p>
                            </div>
                            <form method="POST" action="{{ route('search_result') }}">
                                @csrf
                                <div class="bg-white">
                                    <label for="email"
                                        class="text-gray-300 text-md-right font-bold flex items-center mr-5">{{ __('社名') }}</label>
                                    <div class="flex justify-center items-center">
                                        <input id="" type="text"
                                            class="bg-white outline outline-gray-400 mb-6 mt-2 w-full h-10 p-2"
                                            name="company" value="" placeholder="社名を入力してください">
                                    </div>
                                </div>
                                <div class="bg-white">
                                    <label for="email"
                                        class="text-gray-300 text-md-right font-bold flex items-center mr-5">{{ __('部署名') }}</label>
                                    <div class="flex justify-center items-center">
                                        <input id="" type="text"
                                            class="bg-white outline outline-gray-400 mb-6 mt-2 w-full h-10 p-2"
                                            name="depertment" value="" placeholder="部署名を入力してください">
                                    </div>
                                </div>
                                <div class="bg-white">
                                    <div class="flex justify-center items-center">
                                        <button
                                            class=" bg-gradient-to-r from-sky-500 to-indigo-500 outline-gray-500 text-white text-2xl font-bold w-full h-10 mt-2  rounded">
                                            <i class="fas fa-search text-white "></i> 検索する
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </section>
                        @if (isset($users))
                            <section class="px-5 w-full">
                                @foreach ($users as $user)
                                    {{-- <div class="bg-white inline-block px-10 py-3"> --}}
                                    <div class="bg-white inline-block p-3 w-full">
                                        <div>
                                            <div class="flex justify-center items-center">
                                                <img class="mr-10" src="{{ asset('img/icon.png') }}" alt="">
                                                <p class="mr-10 text-2xl">匿名くコ:彡</p>
                                                <p class="mr-10 text-2xl">{{ $user->company }} <br>
                                                    {{ $user->department }}</p>
                                                <p class="mr-10 text-2xl">未依頼</p>
                                                <p class="mr-10 text-xl">03/28（月）<br> 19:00~19:10</p>
                                                <button class="bg-[#13B1C0] text-white w-24 rounded-md shadow-md h-2/3"><i
                                                        class="fa-solid fa-comment-dots"
                                                        onclick="location.href='{{ route('mentee.ticket') }}' ">チャット</i></button>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </section>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
