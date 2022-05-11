<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>通話画面</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
</head>

<body>
    <div id="call" class=""></div>
    <audio id="my-audio" class="muted"></audio>
    <!-- 着信時に相手の音声情報を置く要素 -->
    <audio id="their-audio" autoplay></audio>
    <div class="h-screen">
        <div class="h-3/5 bg-[#F4F8FA]">
            <div class="w-screen pt-32 pb-20 px-20">
                <div class="flex justify-around">
                    <img src="{{asset('img/usericon/user1.png')}}" alt="自分のアイコン画像" class="rounded-[50%] w-64 h-64">
                    <img src="{{asset('img/usericon/user2.png')}}" alt="通話相手のアイコン画像" class="rounded-[50%] w-64 h-64">
                </div>
                <p class="text-center mx-auto py-4 text-xl text-[#3A3A3A]" id="my-id"></p>
                <div class="text-center">
                    <!-- 相手のPeerIDを記入するテキストエリア -->
                    <input id="their-id"></input>
                    <!-- 発信ボタン -->
                    <button id="make-call">発信</button>
                </div>
            </div>
        </div>
        <div class="h-2/5 bg-white">
                <div class="py-32 flex gap-x-11 justify-center">
                    <div>
                        <button class="w-32 h-32 bg-red-600 rounded-[50%] mx-auto" id="hangup-call"><i class="fa-solid fa-phone fa-4x text-white" style=" transform:rotate(135deg);"></i>
                    </div>
                    <div>
                        <button id="ismute" class=" w-32 h-32 bg-[#13B1C0] rounded-[50%] mx-auto" id="hangup-call">
                        <span id="mute">
                            <i  class="fa-solid fa-microphone-slash fa-4x text-white"></i>
                        </span>
                        <span id="unmute" class="hidden">
                            <i class="fa-solid fa-microphone fa-4x text-white"></i>
                        </span>
                    </div>
                </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
