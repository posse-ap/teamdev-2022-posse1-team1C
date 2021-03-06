@extends('layouts.before_login_base')

@section('title', 'メンター検索結果')

@section('content')
    {{-- <div class="w-8/12 h-2/4 flex justify-center items-center">
        <form action="" enctype="multipart/form-data" method="POST">
            @csrf
            <h2>メンターを探す</h2>
            <p>社名</p>
            <input type="text" name="name" placeholder="社名を入力してください" value="">
            <p>部署名</p>
            <input type="text" name="department" placeholder="部署名を入力してください" value="">
            <input type="submit" value="検索する">
        </form>
    </div> --}}
    <div class="bg-[#F4F8FA]">
        <div class="justify-content-center ">
            <p>{{$users_number}}人のメンターが見つかりました。<br></p>
            <div>
                <div class="flex justify-center items-center py-20 px-20">
                    {{-- <div class="card-header">{{ __('Login') }}</div> --}}
                    {{-- <div class="pb-5">
                        <p class="text-3xl font-bold flex pb-4">メンターを探す</p>
                        <div class="border-b-2 px-64"></div>
                    </div> --}}
                    @foreach ($users as $user)
                    <div class="bg-white inline-block px-10 py-3">
                        <div>
                            <div class="flex justify-center items-center">
                                <img class="mr-10" src="" alt="">
                                <p class="mr-10 text-2xl">匿名くコ:彡</p>
                                <p class="mr-10 text-2xl">{{$user->company}} <br> {{$user->department}}</p>
                                <p class="mr-10 text-2xl">未依頼</p>
                                <p class="mr-10 text-xl">03/28（月）<br> 19:00~19:10</p>
                                <button class="bg-[#13B1C0] text-white w-24 rounded-md shadow-md h-2/3"><i class="fa-solid fa-comment-dots" onclick="location.href='{{ route('mentee.ticket') }}' ">チャット</i></button>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
