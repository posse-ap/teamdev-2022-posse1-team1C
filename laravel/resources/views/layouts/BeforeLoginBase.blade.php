<html>

<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
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
</body>

</html>
