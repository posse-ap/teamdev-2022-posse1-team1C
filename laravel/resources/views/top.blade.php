@extends('layouts.before_login_base')

@section('title', 'AnoveyTOP')

@section('content')
    <div class="relative">
        <img class="h-auto" src="{{ asset('img/top.png') }}" alt="Anovey TOP">
        <a href="{{ route('mentee.register') }}">
            <img src="{{ asset('img/top_to_mentee_register_button.png') }}" alt="Start Anovey"
                class="absolute w-1/3 top-1/2 left-1/2 -translate-x-1/2">
        </a>
    </div>


    <div class="bg-slate-100 flex justify-center">
        <div>
            <div class="flex justify-center">
                <div class="ml-8 mt-14">
                    <h2 class="text-teal-500 text-3xl font-bold mb-10">「他の会社の面接も始まっていないのに、あと<br>１週間で内定を承諾するか決めないといけない」</h2>
                    <ul class="text-lg text-gray-700">
                        <li class="text-2xl">・時間が無くて焦っている</li>
                        <li class="text-2xl">・ネットの情報だけでは不安</li>
                        <li class="text-2xl">・転職先の事情を生の声で聞きたい</li>
                        <li class="text-2xl">・とにかく自分だけでは判断できない</li>
                        <li class="text-2xl">・今後のキャリアについて相談したい</li>
                    </ul>
                </div>
                <img src="{{ asset('img/undraw_breaking_barriers_vnf3.png') }}" class="mt-14 ml-20 w-3/12" alt="">
            </div>

            <div class="flex justify-center">
                <img src="{{ asset('img/undraw_Time_management_re_tk5w.png') }}" class="mt-10 ml-10 mb-4 w-3/12" alt="">
                <div class="ml-14 mt-12">
                    <h2 class="text-teal-500 text-3xl font-bold mb-10">「行きたい会社に知り合いがいない。<br>人事を通すといいことしか言われないかも...」</h2>
                    <ul class="text-lg text-gray-700">
                        <li class="text-2xl">・転職で失敗したことがある</li>
                        <li class="text-2xl">・ポジティブな話しか聞かないため不安</li>
                        <li class="text-2xl">・転職した後に後悔したくない</li>
                        <li class="text-2xl">・転職する前に内部と繋がりたい</li>
                        <li class="text-2xl">・必ず転職を成功させたい</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white">
        <div class="flex justify-center">
            <h2 class="font-bold text-3xl mt-14">Anoveyでできること</h2>
        </div>

        {{-- <div class="border-solid border border-gray-100 mt-56 w-4/12 container mx-auto"></div> --}}

        <div class="flex justify-center">
            <div class="mr-10 text-gray-700">
                <h2 class="text-teal-500 text-3xl font-bold mb-6 mt-20">完全匿名性だから、安心</h2>
                <p class="text-2xl">Anoveyは完全匿名性。顔出し無しの音声通話を用いているため、<br>身元を特定されることなく転職相談が可能です。
                </p>
            </div>
            <img src="{{ asset('img/undraw_Security_on_re_e491.png') }}"
                class="mt-10 ml-10 w-4/12 overflow-x-auto space-x-2 whitespace-nowrap" alt="">
        </div>

        <div class="border-solid border mt-20 w-2/12 container mx-auto"></div>

        <div class="flex justify-center">
            <img src="{{ asset('img/undraw_Speed_test_re_pe1f.png') }}" class="mt-10 ml-10 w-4/12" alt="">
            <div class="ml-20 text-gray-700">
                <h2 class="text-teal-500 text-3xl font-bold mb-6 mt-12">10分の相談だから、スピーディー</h2>
                <p class="text-2xl">たったの10分間だから、面倒な日程調整も簡単。<br>
                    その後、内定先のメンターとチャットでやり取りも可能です。<br>転職先に少しでも不安がある方は是非ご利用ください。</p>
            </div>
        </div>
    </div>

    <div class="bg-slate-100 flex justify-center pb-32">
        <div>
            <div class="mb-16 border-solid border-2 border-white mt-20 w-full container mx-auto"></div>
            <h2 class="text-3xl font-bold ">まずは無料登録から始めよう</h2>
            <button class="ml-14 mt-10 px-16 py-4 bg-teal-400 text-2xl text-white font-semibold rounded hover:bg-blue-400"
                onclick="location.href='{{ route('mentee.register') }}' ">今すぐ始める</button>
            <div class="mt-7 ml-auto mr-auto ">
                <a href="{{ route('mentor.register') }}"
                    class="text-teal-400 ml-auto mr-auto flex justify-center">メンターとして登録したい方はこちら</a>
            </div>
        </div>
    </div>

@endsection
