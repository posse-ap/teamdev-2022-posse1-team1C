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
        const txtPass = document.getElementById("password");
        const btnEye = document.getElementById("buttonEye");
        btnEye.addEventListener('click', function() {
            if (txtPass.type === "text") {
              txtPass.type = "password";
              btnEye.className = "fa fa-eye  ml-2 mt-5";
            } else {
              txtPass.type = "text";
              btnEye.className = "fa fa-eye-slash  ml-2 mt-5";
            }
        }, false);

        const txtPass2 = document.getElementById("password-confirm");
        const btnEye2 = document.getElementById("buttonEye2");
        btnEye2.addEventListener('click', function() {
          if (txtPass2.type === "text") {
            txtPass2.type = "password";
            btnEye2.className = "fa fa-eye  ml-2 mt-5";
          } else {
            txtPass2.type = "text";
            btnEye2.className = "fa fa-eye-slash  ml-2 mt-5";
          }
      }, false);
      
    </script>
</body>

</html>
