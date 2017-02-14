<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


/* User Page */

Route::get('/', 'HomeController@showWelcome');
Route::get('/news/{id}', 'HomeController@News');
Route::get('/history', 'HomeController@History');
Route::get('/guestbook', 'HomeController@Book');
Route::post('/guestbook', 'SaveController@Savebook');
Route::get('/calendar', 'HomeController@Calendar');
Route::get('/even-view/{id}', 'HomeController@Even');
Route::get('/download', 'HomeController@download');
Route::get('/complain', 'HomeController@complain');
Route::post('/complain', 'SaveController@Savecomplain');




/* AdminSys Page */

Route::get('/adminsys', 'AdminController@Adminwelcome');
Route::get('/adminsys/setting', 'AdminController@Settingpage');
Route::post('/adminsys/setting', 'UpdateController@Updateinfo');
Route::get('/adminsys/news', 'AdminController@Newspage');
Route::post('/adminsys/news', 'SaveController@Savenews');
Route::get('/adminsys/addnews', 'AdminController@Newsaddpage');
Route::get('/adminsys/history', 'AdminController@Historypage');
Route::post('/adminsys/history', 'UpdateController@Updatehistory');
Route::get('/adminsys/webinfo', 'AdminController@Webinfo');
Route::post('/adminsys/webinfo', 'UpdateController@Updatewebinfo');
Route::post('/adminsys/webinfo1', 'UpdateController@Updatewebinfo1');
Route::get('/adminsys/calendar', 'AdminController@Calendar');
Route::post('/adminsys/calendar', 'SaveController@Savecalendar');
Route::get('/adminsys/guestbook', 'AdminController@Guestbook');
Route::post('/adminsys/guestbook', 'UpdateController@Approve');
Route::get('/adminsys/del/{id}', 'UpdateController@Delguestbook');
Route::get('/adminsys/book/{id}', 'AdminController@Editbook');
Route::get('/adminsys/update_calendar/{id}', 'AdminController@Editcalendar');
Route::post('/adminsys/update_calendar', 'UpdateController@Updatecalendar');
Route::get('/adminsys/download', 'DownloadController@index');
Route::post('/adminsys/download', 'DownloadController@store');
Route::get('/adminsys/complain', 'ComplainController@index');
