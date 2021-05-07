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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/configprof', function () {return view('configprof');});
Route::get('/configsalle', function () {return view('configsalle');});
Route::get('/ajprof', function () {return view('ajprof');});
Route::get('/configgroup', function () {return view('configgroup');});
Route::get('/ajprof', function () {return view('ajprof');});
Route::get('/mail', function () {return view('mail');});
    

