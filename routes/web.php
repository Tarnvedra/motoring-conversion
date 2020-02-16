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
Route::get('/distance', 'DistanceController@display');
Route::post('/distance', 'DistanceController@calculate');
Route::get('/consumption', 'ConsumptionController@display');
Route::get('/electrical', 'ElectricalController@display');
Route::get('/force', 'ForceController@display');
Route::get('/pressure', 'PressureController@display');
Route::get('/mass', 'MassController@display');
Route::get('/velocity', 'VelocityController@display');
Route::get('/torque', 'TorqueController@display');
Route::get('/volume', 'VolumeController@display');
Route::get('/retrieve', 'RetrieveController@display');
Route::get('/power', 'PowerController@display');
Route::get('/temperature', 'TemperatureController@display');
