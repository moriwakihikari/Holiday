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


//一覧画面
Route::get('holiday/holiday_applications', 'HolidayAppController@index')->name('holiday_index');
//申請画面
Route::get('holiday/holiday_applications/new', 'HolidayAppController@create')->name('holiday_create');
//新規作成
Route::post('holiday/holiday_applications/new', 'HolidayAppController@store')->name('holiday_store');
//合計期間の算出を行うAjax通信
Route::get('holiday/get_holiday_duration', 'HolidayAppController@duration')->name('get_holiday_duration');
//詳細画面
Route::get('holiday/holiday_applications/{holidayApplication}/show', 'HolidayAppController@show')->name('holiday_show');
//修正画面
Route::get('holiday/holiday_applications/{holidayApplication}/edit', 'HolidayAppController@edit')->name('holiday_edit');
//更新
Route::post('holiday/holiday_applications/{holidayApplication}/edit', 'HolidayAppController@update')->name('holiday_update');



//管理者画面
//一覧画面
Route::get('holiday/admin/holidayapplications/index', 'HolidayAppController@index')->name('admin_holiday_index');
//詳細画面
Route::get('holiday/admin/holidayapplications/{holidayApplication}/show', 'HolidayAppController@store')->name('admin_holiday_store');
//確定
Route::put('holiday/admin/holidayapplications/{holidayApplication}/show', 'HolidayAppController@confirm')->name('admin_holiday_confirm');
//確定取消
Route::put('holiday/admin/holidayapplications/{holidayApplication}/show', 'HolidayAppController@reject')->name('admin_holiday_reject');






Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();
