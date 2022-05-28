@extends('layouts.after_login_base')

 @section('title', 'アンケート')

 @section('content') 
 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="flex justify-center items-center py-20 ml-20">
                    <div class="bg-white inline-block px-20 py-20 ml-20">
                        <i class="flex justify-center items-center fa-solid fa-calendar-check fa-3x mb-6"></i>
                        <p class="flex justify-center items-center font-bold mb-7">できなかった理由をお聞かせください</p>
                        <fieldset>
                            <input type="radio" name="choice" value="1" checked>システムエラー
                            <input type="radio" class="ml-3" value="2" name="choice">相手のネットワーク環境が悪かった
                            <input type="radio" class="ml-3" value="2" name="choice">その他
                        </fieldset>
                        <div>
                            <textarea type="text" class="border rounded ml-14 mt-6" cols="40" rows="4" placeholder="ご意見などご自由に入力ください。"></textarea>
                        </div>
                            
                        <div>
                            <button type="submit" class="bg-teal-400 text-white rounded shadow-lg px-20 mt-10 ml-36">送信</button>
                        </div>
                    </div> 
               </div>
           </div>
       </div>
   </div>
     @endsection