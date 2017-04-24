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

Route::get('/', function () { return view('pages.index'); });
Route::get('haqqimizda',function(){ return view('pages.about'); });
Route::get('elaqe',function(){ return view('pages.contact');});
Route::get('giris',function(){return view('auth.giris');});
Route::get('qeydiyyat',function(){return view('auth.qeydiyyat');});
