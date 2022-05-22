@extends('layouts.before_login_base')

@section('title', 'チケット消費')

@section('content')

    <div class="row justify-content-center bg-[#F4F8FA]">
        <div class="col-md-8">
            <div class="card flex justify-center items-center py-20 ml-20">

                <div class="card-body bg-white inline-block px-20 py-20">

                    <div class="pb-5">
                        <p class="text-3xl font-bold flex justify-center items-center pb-4 text-center">チケットを消費して <br> 相談依頼を送りましょう</p>
                        <div class="border-b-2 px-64"></div>
                    </div>

                    <div class="form-group row">
                        @if (1 == 1)

                        <p
                            class="text-2xl col-md-4  col-form-label text-md-right mb-3 font-bold flex justify-center items-center">
                            チケット残数</p>
                            
                        @else
                            <p
                            class="text-2xl col-md-4  col-form-label text-md-right mb-3 font-bold flex justify-center items-center">
                            チケット消費</p>
                        @endif
                        <div class="flex justify-center mb-6">
                            <p
                                class="text-8xl col-md-4 col-form-label text-md-right mb-3 font-bold">
                                0</p>
                            <p
                                class="text-2xl col-md-4 col-form-label text-md-right mt-10 font-bold">
                                枚</p>
                        </div>
                        @if (1 == 1)
                            
                        
                        <p
                        class=" text-red-600 text-2xl text-center col-md-4 col-form-label text-md-right font-bold mb-4">
                        チケットが不足しています<br>購入してください</p>
                        @else
                        <p
                        class=" text-red-600 text-2xl text-center col-md-4 col-form-label text-md-right font-bold mb-4">
                        チケットを１枚消費します<br>相談が行われなかった場合、チケットが戻ってきます</p>
                        @endif

                    </div>

                    <div class="form-group row">
                        <div class="col-md-6 flex justify-center items-center">
                            @if (1 == 1)

                            <button
                                class=" bg-[#13B1C0] text-white text-2xl font-bold w-9/12 h-10 mt-2  rounded form-control">
                                <i class=" text-white "></i> 購入する
                            </button>
                                
                            @else
                                <button
                                class=" bg-[#13B1C0] text-white text-2xl font-bold w-9/12 h-10 mt-2  rounded form-control">
                                <i class=" text-white "></i> 消費する
                            </button>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection