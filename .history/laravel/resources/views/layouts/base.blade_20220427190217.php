<html>

<head>
    <title>@yield('title')</title>
</head>

<body>
    <header>
        @include('includes.BeforeLoginHeader')
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        @include('includes.footer')
    </footer>
</body>

</html>
