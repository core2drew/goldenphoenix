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
    return view('onepage.index',$params);
});

Route::get('/mail/inquires',function(){
	return "Working!";
});


Route::get('/test', function () {
   return "Test";
});