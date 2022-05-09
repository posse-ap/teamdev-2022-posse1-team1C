@extends('layouts.admin')
@section('title', '管理画面HOME')
@section('content')
    <div class="flex pr-40 h-[calc(100vh-5rem)] pb-10">
        <section class="w-2/3 h-full flex flex-col">
            <div class="flex text-center gap-5 mt-10">
                <div class="w-1/3 bg-white py-5 rounded-md shadow-lg font-bold text-[#13B1C0]">
                    <h2>今月の新規メンティー数</h2>
                    <p class="text-3xl my-1 text-black">54</p>
                    <p>人</p>
                </div>
                <div class="w-1/3 bg-white py-5 rounded-md shadow-lg font-bold text-[#13B1C0]">
                    <h2>累計メンティー数</h2>
                    <p class="text-3xl my-1 text-black">125</p>
                    <p>人</p>
                </div>
                <div class="w-1/3 bg-white py-5 rounded-md shadow-lg font-bold text-[#13B1C0]">
                    <h2>相談成立数</h2>
                    <p class="text-3xl my-1 text-black">36</p>
                    <p>人</p>
                </div>
            </div>
            <div class="w-full h-full mt-8 flex flex-col">
                <h2 class="font-bold text-xl ml-5 mb-2">チケット返却にあたり<br>事実確認が必要な相談一覧</h2>
                <div class="bg-white w-full h-full rounded-md shadow-lg">
                </div>
            </div>
        </section>
        <section class="w-1/3 bg-white rounded-md shadow-lg mx-10 mt-10">
            <h2 class="font-bold text-xl ml-5 mt-5">不成立理由</h2>
            <div id="doughnut_chart" class="mt-10"></div>
        </section>
    </div>
@endsection
