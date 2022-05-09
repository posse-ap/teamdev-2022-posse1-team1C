<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>@yield('title')</title>
</head>

<body>
    <header class="h-20"></header>

    <div class="h-[calc(100vh-80px)] bg-[#F4F8FA] flex">
        <ul class="w-60 pt-10 font-bold pl-3">
            <li class="pb-8 cursor-pointer">
                <span class="py-4 px-6"><i class="fa-solid fa-house-chimney pr-2"></i>ホーム</span>
            </li>
            <li class="group relative">
                <span class="hover:cursor-pointer admin_location py-4 px-6"><i class="fa-solid fa-coins pr-2"></i>お支払い管理<i
                        class="fa-solid fa-angle-right ml-3 transition-all group-hover:ml-4"></i></span>
                <div
                    class="absolute w-40 left-[calc(100%-2rem)] t-0 -mt-5 bg-white shadow-md opacity-0 group-hover:opacity-100 transition-all pointer-events-none group-hover:pointer-events-auto">
                    <div class="border-b-2">
                        <p class="ml-3 py-2">お支払い管理</p>
                    </div>
                    <div class="hover:bg-[#F4F8FA]">
                        <a class="font-normal group-hover:cursor-pointer block ml-3 py-2">申請</a>
                    </div>
                    <div class="hover:bg-[#F4F8FA]">
                        <a class="font-normal group-hover:cursor-pointer block ml-3 py-2">履歴</a>
                    </div>
                </div>
            </li>
        </ul>
        <div class="w-[calc(100%-15rem)]">
            @yield('content')
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
