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
    Route::get('profil',function(){return view('users.profile');});

    //MASHIN EMELIYATLARI
    Route::get('masinlar' ,['uses'=>'MasinController@index' , 'as'=>'masinlar']);
    Route::get('masinlar/{slug}', ['uses'=>"MasinController@show"])->where('slug','[\w\d\-\_]+');
    Route::get('masinlar/elave_et' , 'MasinController@create');
    Route::post('masinlar/elave_et' ,['uses' => 'MasinController@store' , 'as'=> 'masinlar.store']);
    Route::get('masinlar/{slug}/duzelish_et',['uses'=>'MasinController@edit'])->where('slug','[\w\d\-\_]+');
    Route::get('masinlar/{slug}/sil',['uses'=>'MasinController@destroy'])->where('slug','[\w\d\-\_]+');
    Route::put('masinlar/{slug}/duzelish_et',['uses'=>'MasinController@update','as'=>'masinlar.update'])->where('slug','[\w\d\-\_]+');
    // Login ,Logout ve Qeydiyyat
    Route::post('giris','Auth\LoginController@login');
    Route::get('cixis',['as'=>'logout' , 'uses' => 'Auth\LoginController@logout']);
    Route::post('qeydiyyat','Auth\RegisterController@register');
    //SURUCU EMELIYATLARI
    Route::get('suruculer',['uses'=>'SurucuController@index','as'=>'suruculer']);
    Route::get('suruculer/elave_et','SurucuController@create');
    Route::post('suruculer/elave_et',['uses'=>'SurucuController@store','as'=>'suruculer.store']);
    Route::get('suruculer/{id}',['uses'=>'SurucuController@show'])->where('id','\d+');

    //ISTIFADECILER
    Route::get('istifadeciler', 'SehifeController@istifadeciler');

});
