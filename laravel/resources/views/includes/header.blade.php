<div class="header h-20 fixed t-0 w-full flex px-10 bg-white">
    <div class="w-1/6 mt-3">
        <a href="{{ route('top') }}"><img class=" h-auto" src="{{ asset('img/anovey_logo.png') }}" alt=""></a>
    </div>
    <!-- <form class="block h-10 my-auto ml-auto relative" action="" method="">
        <input class="bg-[#F4F8FA] h-full outline-none rounded-lg pl-5" type="text" name="" value="" placeholder="社名で検索">
        <button type="submit" class="absolute right-5 top-1/2 -translate-y-1/2">
            <i class="fa-solid fa-magnifying-glass"></i>
        </button>
    </form> -->
    <div class="my-auto ml-auto">
        @if (Auth::check())
            @if (Auth::user()->is_mentor == 1)
                <ul class="menu ml-5 mr-5">
                    <li>
                        <a href="#"><img class="" src="{{ asset('img/icon.png') }}" alt="アイコン"></a>
                        <ul class="w-full">
                            <li><a href="{{ route('mentor.profile_edit') }}">プロフィール設定</a></li>
                            <li>
                                <form class="" action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button class="" type="submit">ログアウト</button>
                                </form>
                            </li>
                            <li><a href="{{ route('inquiry') }}">お問い合わせ</a></li>
                        </ul>
                    </li>
                </ul>
                <button class="bg-[#13B1C0] text-white w-24 rounded-md shadow-md h-10 my-auto"
                    onclick="location.href='{{ route('mentor.request_list') }}' ">依頼一覧</button>
            @else
                <ul class="menu ml-5 mr-5 mt-7">
                    <li>
                        <a href="#"><img class="" src="{{ asset('img/icon.png') }}" alt="アイコン"></a>
                        <ul class="w-full">
                            <li><a href="{{ route('mentee.profile_edit') }}">プロフィール設定</a></li>
                            <li>
                                <form class="" action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button class="" type="submit">ログアウト</button>
                                </form>
                            </li>
                            <li><a href="{{ route('inquiry') }}">お問い合わせ</a></li>
                        </ul>
                    </li>
                </ul>
                <button class="bg-[#13B1C0] text-white w-24 rounded-md shadow-md h-10 my-auto"
                    onclick="location.href='{{ route('mentee.request_list') }}' ">依頼一覧</button>
            @endif
        @else
            <button class="bg-[#13B1C0] text-white w-24 rounded-md shadow-md h-10 my-auto mx-5"
                onclick="location.href='{{ route('login') }}'">ログイン</button>
            <button class="bg-[#13B1C0] text-white w-24 rounded-md shadow-md h-10 my-auto" onclick="location.href='{{ route('mentee.register') }}'" >無料登録</button>
        @endif
    </div>
</div>
<div class="h-20"></div>

{{-- ホバーメニューのCSS --}}
<style>
    .menu {
        list-style-type: none;
    }

    .menu>li {
        display: inline-block;
        position: relative;
    }

    .menu>li>ul {
        display: none;
    }

    .menu>li:hover ul {
        display: block;
        position: absolute;
        padding: 0;
        margin: 0;
        top: 1.5em;
        left: 0;
        list-style-type: none;
        background-color: rgba(249, 250, 251, var(--tw-bg-opacity));
    }

</style>
