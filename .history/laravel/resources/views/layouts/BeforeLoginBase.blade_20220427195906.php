<html>

<head>
    <title>@yield('title')</title>
    
</head>

<body>
    <header class="h-16 w-full fixed top-0 bg-white flex px-16">
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
