<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>チャット</title>
</head>

<body>
    <header class="h-16 w-full fixed top-0 bg-white flex px-16">
        <button
            class="bg-[#13B1C0] text-white font-bold text-lg px-5 py-1 rounded-md shadow-md h-10 my-auto ml-auto hover:opacity-80">依頼一覧</button>
    </header>
    <div class="h-screen bg-[#F4F8FA] pt-16 pb-24">
        <div id="chat" class="h-full" data-thread_id={{ $thread_id }} data-is_mentor={{ $is_mentor }}>
        </div>
    </div>
    <div class="h-24 bg-white fixed bottom-0 w-full">
        <a
            class="bg-[#13B1C0] py-3 px-16 rounded-md shadow-md hover:opacity-80 text-white font-bold text-3xl mx-auto table relative top-1/2 -translate-y-1/2 cursor-pointer">
            通話を開始する
        </a>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
