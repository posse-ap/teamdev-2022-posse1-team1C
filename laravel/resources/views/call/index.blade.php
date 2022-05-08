<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>通話画面</title>
    
</head>


<body>
    <div id="call" class="h-full"></div>
    <video id="my-video" width="400px" autoplay muted playsinline></video>
    <p id="my-id"></p>
    <!-- 相手のPeerIDを記入するテキストエリア -->
    <input id="their-id"></input>
    <!-- 発信ボタン -->
    <button id="make-call">発信</button>
    <!-- 着信時に相手の映像を表示するvideo要素 -->
    <video id="their-video" width="400px" autoplay muted playsinline></video>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

