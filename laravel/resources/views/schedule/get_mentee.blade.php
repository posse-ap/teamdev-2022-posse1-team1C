@extends('layouts.after_login_base')

@section('title', '請負一覧')

@section('content')
    <div class="bg-[#F4F8FA]">
        <div class="justify-content-center ">
            <div>
                <div class="justify-center items-center py-20 px-20">
                    <div class="pb-5">
                        <p class="text-3xl font-bold flex pb-4">依頼一覧</p>
                    </div>
                    @foreach ($connect_users as $thread)
                    <div class="mx-52 bg-white inline-block px-6 py-3 mb-2">
                        <div class="flex">
                            <div class="flex justify-center items-center">
                                <img class="mr-6" src="{{ asset('img/icon.png') }}" alt="アイコン">
                                <p class="mr-6 text-lg">匿名さん</p>
                                <p class="mr-6 text-lg">請負中</p>
                                <p class="mr-6 text-lg">03/28（月）<br> 19:00~19:10</p>
                                <button class="bg-[#13B1C0] text-white w-24 rounded-md shadow-md p-2"><i class="fa-solid fa-comment-dots" onclick="location.href='{{ route('mentee.ticket') }}' ">チャット</i></button>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
