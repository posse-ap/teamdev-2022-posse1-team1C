<html>

<head>
    <title>@yield('title')</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <header>
        @include('includes.header')
    </header>

    <main class="bg-gray-100">
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
                btnEye.classList.remove("fa-eye-slash");
                btnEye.classList.add("fa-eye");
            } else {
                txtPass.type = "text";
                btnEye.classList.add("fa-eye-slash");
                btnEye.classList.remove("fa-eye");
            }
        }, false);


        const txtPass2 = document.getElementById("password-confirm");
        const btnEye2 = document.getElementById("buttonEye2");

        btnEye2.addEventListener('click', function() {
            if (txtPass2.type === "text") {
                txtPass2.type = "password";
                btnEye2.classList.remove("fa-eye-slash");
                btnEye2.classList.add("fa-eye");
            } else {
                txtPass2.type = "text";
                btnEye2.classList.add("fa-eye-slash");
                btnEye2.classList.remove("fa-eye");
            }
        }, false);
    </script>
</body>

</html>
