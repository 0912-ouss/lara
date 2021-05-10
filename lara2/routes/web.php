<?php

use App\Http\Controllers\coption;
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
Route::get('/ajoption', function () {return view('ajoption');});
Route::get("/mesoptions",[coption::class,'index']);
Route::get("/ajouteroption",[coption::class,'add']);
Route::get("/removeoption/{id}",[coption::class,'remove']);
//Route::get("/optionup/{id}",[coption::class,'show']);
Route::get("/editotion",[coption::class,'save']);
Route::get('/optionedit', function () {return view('optionedit');});
Route::get("/optionup/{id}",[coption::class,'show']);

