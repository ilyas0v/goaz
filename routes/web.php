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
Route::group(["middleware"=>["web"]], function(){

    Route::get('/', 'SehifeController@index');
    Route::get('haqqimizda',function(){ return view('pages.about'); });
    Route::get('elaqe',function(){ return view('pages.contact');});
    Route::get('giris','Auth\LoginController@showLoginForm');
    Route::get('qeydiyyat',function(){return view('auth.qeydiyyat');});
    Route::get('masinlar' ,['uses'=>'MasinController@index' , 'as'=>'masinlar']);
    Route::get('masinlar/{slug}', ['uses'=>"MasinController@show"])->where('slug','[\w\d\-\_]+');
    Route::get('masinlar/elave_et' , 'MasinController@create');
    Route::post('masinlar/elave_et' ,['uses' => 'MasinController@store' , 'as'=> 'masinlar.store']);
    // Login ,Logout ve Qeydiyyat
    Route::post('giris','Auth\LoginController@login');
    Route::get('cixis',['as'=>'logout' , 'uses' => 'Auth\LoginController@logout']);
    Route::post('qeydiyyat','Auth\RegisterController@register');

});
