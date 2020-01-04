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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/distance', function () {return view('distance');});
Route::get('/consumption', function () {return view('consumption');});
Route::get('/electrical', function () {return view('electrical');});
Route::get('/force', function () {return view('force');});
Route::get('/pressure', function () {return view('pressure');});
Route::get('/mass', function () {return view('mass');});
Route::get('/velocity', function () {return view('velocity');});
Route::get('/torque', function () {return view('torque');});
Route::get('/volume', function () {return view('volume');});
Route::get('/retrieve', function () {return view('retrieve');});
Route::get('/power', function () {return view('power');});
Route::get('/temperature', function () {return view('temperature');});