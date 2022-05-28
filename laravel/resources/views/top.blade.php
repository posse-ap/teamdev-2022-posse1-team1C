@extends('layouts.before_login_base')

@section('title', 'AnoveyTOP')

@section('content')

    <img src="{{ asset('img/top-main-image.png') }}" alt="">

    <div class="bg-slate-100 flex justify-center">
        <div>
            <div class="flex">
                <div class="ml-8 mt-14">
                    <h2 class="text-teal-500 text-2xl font-bold mb-10">「他の会社の面接も始まっていないのに、あと<br>１週間で内定を承諾するか決めないといけない」</h2>
                    <ul class="text-lg text-gray-700">
                        <li>・何から学べばいいかわからない</li>
                        <li>・ロードマップを作成してほしい</li>
                        <li>・案件を獲得したい</li>
                        <li>・ポートフォリオを添削してほしい</li>
                        <li>・今後のキャリアについて相談したい</li>
                    </ul>
                </div>
                <img src="{{ asset('img/img1.png') }}" class="mt-14 ml-20 w-5/12" alt="">
            </div>

            <div class="flex">
                <img src="{{ asset('img/img1.png') }}" class="mt-10 ml-10 mb-4 w-5/12" alt="">
                <div class="ml-14 mt-12">
                    <h2 class="text-teal-500 text-2xl font-bold mb-10">「行きたい会社に知り合いがいない。人事を通<br>すといいことしか言わないし、、、</h2>
                    <ul class="text-lg text-gray-700">
                        <li>・何から学べばいいかわからない</li>
                        <li>・ロードマップを作成してほしい</li>
                        <li>・案件を獲得したい</li>
                        <li>・ポートフォリオを添削してほしい</li>
                        <li>・今後のキャリアについて相談したい</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white">
        <div class="flex justify-center">
            <h2 class="font-bold text-xl mt-14">Anoveyでできること</h2>
        </div>

        <div class="border-solid border border-gray-100 mt-56 w-4/12 container mx-auto"></div>

        <div class="flex justify-center">
            <div class="mr-10 text-gray-700">
                <h2 class="text-teal-500 text-xl font-bold mb-6 mt-20">完全匿名性だから、安心</h2>
                <p>「月契約で、困った時に質問できるようにする」「エラーを解決するために単発で相<br>談する」など、あなたの悩みにあわせた契約形態を選ぶことができます。単発契約は<br>1,000円〜、月額契約は3,000円〜と学習を継続しやすい価格になっています。
                </p>
            </div>
            <img src="{{ asset('img/pig-image.png') }}"
                class="mt-10 ml-10 w-4/12 overflow-x-auto space-x-2 whitespace-nowrap" alt="">
        </div>

        <div class="border-solid border border-gray-100 mt-20 w-4/12 container mx-auto"></div>

        <div class="flex justify-center">
            <img src="{{ asset('img/consult.png') }}" class="mt-10 ml-10 w-4/12" alt="">
            <div class="ml-20 text-gray-700">
                <h2 class="text-teal-500 text-xl font-bold mb-6 mt-12">10分の相談だから、スピーディー</h2>
                <p>現時点での理解度や学習可能時間、目標に合わせてマンツーマンであなただけの特<br>別プランを作成することができます。</p>
            </div>
        </div>
    </div>

    <div class="bg-slate-100 flex justify-center pb-32">
        <div>
            <div class="mb-16 border-solid border-2 border-white mt-20 w-full container mx-auto"></div>
            <h2 class="text-3xl font-bold ">まずは無料登録から始めよう</h2>
            <button
                class="ml-14 mt-10 px-16 py-4 bg-teal-400 text-xl text-white font-semibold rounded hover:bg-blue-400">今すぐ始める</button>
            <div class="mt-10 ml-12">
                <a href="" class="text-teal-400">メンターとして登録したい方はこちら</a>
            </div>
        </div>
    </div>

@endsection
