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

Route::get('/mentee/register', 'MenteeController@register')->name('mentee.register');
Route::get('/mentee/register-confirm', 'MenteeController@register_confirm')->name('mentee.register_confirm');
Route::get('/mentor/register-confirm', 'MentorController@register_confirm')->name('mentor.register');

Route::get('/chat', 'ChatController@index')->name('chat')->middleware('auth');

Route::get('/schedule-test', function () {
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
