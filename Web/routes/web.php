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
Route::get('/test','TestControler@index');
Route::get('/test/{id}','TestControler@show');

Route::get('/theme', function () {
    return view('template/dashboard');
});
Route::get('/quiz', function () {
    return view('template/map');
});