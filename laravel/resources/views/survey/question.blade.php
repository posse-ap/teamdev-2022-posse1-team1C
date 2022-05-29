@extends('layouts.after_login_base')

 @section('title', 'アンケート')

 @section('content') 
 <div>
    <div class="justify-content-center">
        <div>
            <div class="flex justify-center items-center py-20 ml-20">
                    <div class="bg-white inline-block px-20 py-20 ml-20">
                        <i class="flex justify-center items-center fa-solid fa-calendar-check fa-3x mb-6"></i>
                        <p class="flex justify-center items-center font-bold mb-16">相談はできましたか？</p>
                            <input type="button" value="できた" class="bg-teal-400 text-white rounded px-12 py-10">
                            <input type="button" value="できなかった" class="bg-red-400 text-white rounded px-7 py-10 ml-10">
                    </div> 
               </div>
           </div>
       </div>
   </div>
     @endsection