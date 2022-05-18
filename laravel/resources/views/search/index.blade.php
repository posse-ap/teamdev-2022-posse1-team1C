@extends('layouts.before_login_base')

@section('title', 'メンター検索画面')

@section('content')
    {{-- <div class="w-8/12 h-2/4 flex justify-center items-center">
        <form action="" enctype="multipart/form-data" method="POST">
            @csrf
            <h2>メンターを探す</h2>
            <p>社名</p>
            <input type="text" name="name" placeholder="社名を入力してください" value="">
            <p>部署名</p>
            <input type="text" name="department" placeholder="部署名を入力してください" value="">
            <input type="submit" value="検索する">
        </form>
    </div> --}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card flex justify-center items-center py-20 ml-20">
                    {{-- <div class="card-header">{{ __('Login') }}</div> --}}

                    <div class="card-body bg-white inline-block px-20 py-20">

                        <div class="pb-5">
                            <p class="text-3xl font-bold flex pb-4">メンターを探す</p>
                            <div class="border-b-2 px-64"></div>
                        </div>

                        <form method="GET" action="{{ route('search_result') }}">
                            @csrf
                            <div class="form-group row">
                                <label for="email"
                                    class="col-md-4 col-form-label text-gray-300 text-md-right font-bold flex items-center mr-5">{{ __('社名') }}</label>

                                <div class="col-md-6 flex justify-center items-center">
                                    <input id="" type="text"
                                        class="bg-white outline outline-gray-400 mb-6 mt-2 w-full h-10 p-2 form-control" name="company"
                                        value="" placeholder="社名を入力してください">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email"
                                    class="col-md-4 col-form-label text-gray-300 text-md-right font-bold flex items-center mr-5">{{ __('部署名') }}</label>

                                <div class="col-md-6 flex justify-center items-center">
                                    <input id="" type="text"
                                        class="bg-white outline outline-gray-400 mb-6 mt-2 w-full h-10 p-2 form-control" name="depertment"
                                        value="" placeholder="部署名を入力してください">
                                </div>
                            </div>

                            {{-- <div class="form-group row">
                                <label for="password"
                                    class="flex items-centercol-md-4 h-10 text-gray-300 mr-4 col-form-label text-md-right font-semibold">{{ __('部署名') }}</label>

                                <div class="col-md-6 flex justify-center items-center">
                                    <input id="" type="text"
                                        class="bg-white mb-6 mt-2 outline-gray-400 w-full h-10 p-2 form-control" name="password"
                                        required autocomplete="current-password" placeholder="部署名を入力してください">
                                </div>
                            </div> --}}
                            <div class="form-group row">
                                <div class="col-md-6 flex justify-center items-center">
                                    <button class=" bg-gradient-to-r from-sky-500 to-indigo-500 outline-gray-500 text-white text-2xl font-bold w-full h-10 mt-2  rounded form-control">
                                        <i class="fas fa-search text-white "></i> 検索する
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
