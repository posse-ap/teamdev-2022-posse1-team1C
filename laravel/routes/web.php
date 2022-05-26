<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/top', 'TopController@top')->name('top');


Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

//メンティー
  //入力
  Route::get('/mentee/register', 'MenteeController@register_show')->name('mentee.register_show');
  //確認
  Route::post('/mentee/register-confirm', 'MenteeController@register_confirm')->name('mentee.register_confirm');
  
  //送信完了
  Route::post('/mentee/register-send', 'MenteeController@register_send')->name('mentee.register_send');
  //編集
  Route::get('/mentee/profile/edit', 'MenteeController@edit_profile')->name('mentee.profile_edit');

//メンター
  //入力
  Route::get('/mentor/register', 'MentorController@register_show')->name('mentor.register_show');
  //確認
  Route::post('/mentor/register-confirm', 'MentorController@register_confirm')->name('mentor.register_confirm');
  //送信完了
  Route::post('/mentor/register-send', 'Mentor@Controller@register_send')->name('mentor.register_send');
  //編集
  Route::get('/mentor/profile/edit', 'MentorController@edit_profile')->name('mentor.profile_edit');


//chat
Route::get('/chat', 'ChatController@index')->name('chat')->middleware('auth');

//Call
Route::get('/call', 'CallController@index')->name('call');

Route::get('/search', 'SearchController@index')->name('search');
Route::post('/search', 'SearchController@result')->name('search_result');
Route::get('/ticket', 'TicketController@index')->name('mentee.ticket');
Route::post('/ticket/purchase', 'TicketController@purchase')->name('ticket.purchase');
Route::post('/ticket/consume', 'TicketController@consume')->name('ticket.consume');

Route::get('/schedule', function () {
    return view('schedule.index');
});

//mail
Route::get('/mail/mentor-schedule-adjustment-remind-mail', 'Api\MailController@sendToMentorScheduleAdjustmentRemindMail');
Route::post('mail/mentor-schedule-adjustment-remind-mail', 'Api\MailController@sendToMentorScheduleAdjustmentRemindMail');
Route::get('mail/both-request-cancel', 'Api\MailController@sendToBothRequestCancelMail');
Route::post('mail/both-request-cancel', 'Api\MailController@sendToBothRequestCancelMail');
Route::get('mail/mentee-request-confirm', 'Api\MailController@sendToMenteeRequestConfirmMail');
Route::post('mail/mentee-request-confirm', 'Api\MailController@sendToMenteeRequestConfirmMail');
Route::get('mail/both-the-day-before-remind', 'Api\MailController@sendToBothTheDayBeforeRemindMail');
Route::post('mail/both-the-day-before-remind', 'Api\MailController@sendToBothTheDayBeforeRemindMail');
