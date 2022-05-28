@extends('layouts.after_login_base')

 @section('title', 'アンケート')

 @section('content') 
 <div>
    <div class="justify-content-center">
        <div>
            <div class="flex justify-center items-center py-20 ml-20">
                    <div class="bg-white inline-block px-20 py-20 ml-20">
                        <i class="flex justify-center items-center fa-solid fa-calendar-check fa-3x mb-6"></i>
                        <p class="flex justify-center items-center font-bold mb-10">ご利用ありがとうございました</p>
                        <form action="{{route('mentee.survey.reason')}}" method="POST">
                            @csrf
                            <input type="hidden" name="is_mentor" value="">
                            <div>
                                <textarea type="text" class="border rounded" cols="40" rows="4" placeholder="ご意見などご自由に入力ください。" name="opinion"></textarea>
                            </div>
                            <div>
                                <button type="submit" class="bg-teal-400 text-white rounded shadow-lg px-20 mt-5 ml-20">送信</button>
                            </div>
                        </form>
                    </div> 
               </div>
           </div>
       </div>
   </div>
     @endsection