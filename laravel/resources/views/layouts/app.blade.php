<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        #textPassword {
            border: none;
            /* デフォルトの枠線を消す */
        }

        #fieldPassword {
            border-width: thin;
            border-style: solid;
            width: 200px;
        }

    </style>
</head>

<body>

    <header>
        @include('includes.header')
    </header>

    <div id="app">
        <main class="py-2 bg-gray-100">
            @yield('content')
        </main>
    </div>

    <div class=".bg-white">
        @include('includes.footer')
    </div>

    <script>
        var txtPass = document.getElementById("password");
        var btnEye = document.getElementById("buttonEye");
        btnEye.addEventListener('click', function() {
            if (txtPass.type === "text") {
                txtPass.type = "password";
                btnEye.classList.add("fa-eye");
                btnEye.classList.remove("fa-eye-slash");
            } else {
                txtPass.type = "text";
                btnEye.classList.remove("fa-eye");
                btnEye.classList.add("fa-eye-slash");
            }
        }, false);
    </script>
</body>

</html>
