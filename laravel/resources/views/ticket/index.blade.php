@extends('layouts.before_login_base')

@section('title', 'チケット消費')

@section('content')

    <div class="justify-content-center bg-[#F4F8FA]">
        <div>
            <div class="flex justify-center items-center py-20">

                <div class="bg-white inline-block px-20 py-20">

                    <div class="pb-5">
                        <p class="text-3xl font-bold flex justify-center items-center pb-4 text-center">チケットを消費して <br>
                            相談依頼を送りましょう</p>
                        <div class="border-b-2 px-64"></div>
                    </div>

                    <div>
                        @if (1 == 1)
                            <p class="text-2xl mb-3 font-bold flex justify-center items-center">
                                チケット残数</p>
                        @else
                            <p class="text-2xl mb-3 font-bold flex justify-center items-center">
                                チケット消費</p>
                        @endif
                        <div class="flex justify-center mb-6">
                            <p class="text-8xl mb-3 font-bold">
                                0</p>
                            <p class="text-2xl mt-10 font-bold">
                                枚</p>
                        </div>
                        @if (1 == 1)
                            <p class="text-red-600 text-2xl text-center font-bold mb-4">
                                チケットが不足しています<br>購入してください</p>
                        @else
                            <p class="text-red-600 text-2xl text-center font-bold mb-4">
                                チケットを１枚消費します<br>相談が行われなかった場合、チケットが戻ってきます</p>
                        @endif

                    </div>

                    <div>
                        <div class="flex justify-center items-center">
                            @if (1 == 1)
                                <button class="bg-[#13B1C0] text-white text-2xl font-bold w-9/12 h-10 mt-2 rounded">
                                    <i class="text-white"></i> 購入する
                                </button>
                            @else
                                <button class="bg-[#13B1C0] text-white text-2xl font-bold w-9/12 h-10 mt-2 rounded">
                                    <i class="text-white"></i> 消費する
                                </button>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
