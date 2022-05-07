<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
    <title>呼び出し中</title>
</head>

<body>
    <div class="h-screen">
        <div class="h-3/5 bg-[#F4F8FA]">
            <div class="w-screen pt-32 pb-20 px-20">
                <div class="flex justify-around">
                    <img src="{{asset('img/usericon/user1.png')}}" alt="自分のアイコン画像" class="rounded-[50%] w-64 h-64">
                    <img src="{{asset('img/usericon/user2.png')}}" alt="通話相手のアイコン画像" class="rounded-[50%] w-64 h-64">
                </div>
                <p class="text-center mx-auto py-4 text-xl text-[#3A3A3A]">呼び出しています...</p>
            </div>
        </div>
        <div class="h-2/5 bg-white">
                <div class="w-64 text-center mx-auto py-32">
                    <div class="w-32 h-32 bg-red-600 rounded-[50%] mx-auto">
                        <input type="button" value="" class=""><div class='flex items-center justify-center'><i class="fa-solid fa-phone fa-4x text-white" style=" transform:rotate(135deg);"></i></div>
                    </div>
                </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
