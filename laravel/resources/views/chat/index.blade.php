<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>チャット</title>
</head>

<body>
    <header class="h-16 w-full fixed top-0 bg-white flex px-16">
        <button class="bg-[#13B1C0] text-white p-2 rounded-md shadow-md h-10 my-auto ml-auto">依頼一覧</button>
    </header>
    <div class="h-screen bg-[#F4F8FA] pt-16 pb-24">
        <div id="chat" class="h-full" data-user_id={{ Auth::user()->id }}></div>
    </div>
    <footer class="h-24 w-full fixed bottom-0 bg-white"></footer>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
