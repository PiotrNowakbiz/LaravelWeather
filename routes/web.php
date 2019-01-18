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

Route::get('/weather', function () {
    return view('index');
});

Route::get('/weather/show', function () {

    $content = file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=warszawa&appid=aff2f2a6fdef8a7fde9934647363f982");

    return view('weather/index', [$content => 'l']);


});