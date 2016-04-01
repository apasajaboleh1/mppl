<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => ['web']], function () {

    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('login', function () {
    	$message='';
        return view('login',compact('message'));
    });
    Route::post('login','member1@login');
    Route::get('admin','member1@admin');
    Route::get('mahasiswa','member1@mahasiswa');
    Route::get('mahasiswa/daftar','member1@daftar_asdos');
    Route::post('mahasiswa','member1@liat_history');
    Route::get('mahasiswa/logout','member1@logout');
    Route::get('admin/logout','member1@logout');
    Route::get('logout','member1@logout');
    Route::post('admin','member1@liat_history');
    Route::post('mahasiswa/daftar','member1@input_daftar_asdos');
    Route::get('admin/get_asdos','member1@get_all_calon_asdos');
    Route::any('admin/set_asdos/{id}','member1@set_asdos');
});
