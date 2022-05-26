<html>

<head>
    <title>@yield('title')</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <header>
        @include('includes.before_login_header')
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

        const form = document.getElementById("form");
        const button = document.getElementById("button");

        form.addEventListener("change", update);
        
        function update() {
            let isRequired = form.checkValidity();

            if (isRequired) {
                button.classList.remove("opacity-50");
                button.classList.add("opacity-100");
                button.classList.remove("pointer-events-none");
                button.classList.remove("cursor-not-allowed");
                button.classList.add("cursor-pointer");

                return
            } else {
                button.classList.remove("opacity-100");
                button.classList.add("opacity-50");
                button.classList.add("pointer-events-none");
                button.classList.remove("cursor-pointer");
                button.classList.add("cursor-not-allowed");
            }
        }
    </script>
</body>

</html>
