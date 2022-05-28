@extends('layouts.after_login_base')

@section('title', '依頼一覧')

@section('content')
    <div class="bg-[#F4F8FA]">
        <div class="justify-content-center ">
            <div>
                <div class="justify-center items-center py-20 px-20">
                    <div class="pb-5">
                        <p class="text-3xl font-bold flex pb-4">依頼一覧</p>
                    </div>
                    @foreach ($request_users as $user)
                    <div class="mx-52 bg-white inline-block px-10 py-3">
                        <div>
                            <div class="flex justify-center items-center">
                                <img class="mr-10" src="{{ asset('img/icon.png') }}" alt="アイコン">
                                <p class="mr-10 text-2xl">匿名くコ:彡</p>
                                <p class="mr-10 text-2xl">{{$user->company}} <br> {{$user->department}}</p>
                                {{-- <p class="mr-10 text-2xl">リクルート<br>営業部</p> --}}
                                <p class="mr-10 text-2xl">未依頼</p>
                                <p class="mr-10 text-xl">03/28（月）<br> 19:00~19:10</p>
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
