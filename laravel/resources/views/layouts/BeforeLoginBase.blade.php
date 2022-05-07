<html>

<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
</head>

<body>
    <header class="h-16 w-full fixed top-0 bg-white flex px-16">
        @include('includes.BeforeLoginHeader')
    </header>

    <main class="py-2 bg-gray-100">
        @yield('content')
    </main>

    <footer>
        @include('includes.footer')
    </footer>
    <script>
        var txtPass = document.getElementById("password");
        var btnEye = document.getElementById("buttonEye");
        btnEye.addEventListener('click', function() {
            if (txtPass.type === "text") {
              txtPass.type = "password";
              btnEye.className = "fa fa-eye";
            } else {
              txtPass.type = "text";
              btnEye.className = "fa fa-eye-slash";
            }
        }, false);
      
    </script>
</body>

</html>
