<?php

use Illuminate\Support\Facades\Route;

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



Route::get('/holiday','App\Http\Controllers\CalendarController@getHoliday');
Route::post('/holiday','App\Http\Controllers\CalendarController@postHoliday');

Route::get('/','App\Http\Controllers\CalendarController@index');

Route::get('/holiday/{id}','App\Http\Controllers\CalendarController@getHolidayId');

Route::delete('/holiday','App\Http\Controllers\CalendarController@deleteHoliday');

// Route::post("/behavior/{id}", "BehaviorsController@create")->where('id','[0-9]+');
Route::get("/reservation", "App\Http\Controllers\ReservationsController@create")->where('id','[0-9]+');

Route::post("/confirm/2", "App\Http\Controllers\ReservationsController@send")->name('send');

Route::get("/confirm", "App\Http\Controllers\ReservationsController@confirm")->where('id','[0-9]+');





Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

