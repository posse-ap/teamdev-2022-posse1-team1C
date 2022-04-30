<div class="inline-flex background-color: rgb(248 250 252);">

<nav class="navbar navbar-expand-md navbar-light bg-white">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('a', 'あのゔぇい') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
            </ul>
            <!-- Right Side Of Navbar -->
           
        </div>
    </div>
</nav>


    <form class="rounded-lg shadow-md h-5 my-auto" action="" method="get">
        <input class="" type="text" name="name" value="" placeholder="社名で検索">
        <input type="submit" value="検索" class="">
    </form>
    {{-- <button class="bg-[#13B1C0] text-white p-2 rounded-md shadow-md ">ログイン</button>
    <button class="bg-[#13B1C0] text-white p-2 rounded-md shadow-md ">無料登録</button> --}}
    
    <ul class="navbar-nav ml-24 inline-flex ">
        <!-- Authentication Links -->
        @guest
            <li class="nav-item mr-2">
                <a class="nav-link border border-teal-400 rounded-md bg-teal-400 text-white px-4 py-2 shadow-lg" href="{{ route('login') }}">{{ __('ログイン') }}</a>
            </li>
            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link border border-teal-400 rounded-md bg-teal-400 text-white px-4 py-2 shadow-lg" href="{{ route('register') }}">{{ __('新規登録') }}</a>
                </li>
            @endif
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>
    
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
    
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
    </ul>
   
</div>
