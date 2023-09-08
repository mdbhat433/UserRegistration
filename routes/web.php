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

Route::group(['middleware'=>['web']], function(){

    Route::get('/','userCOntroller@Index');
    
    Route::resource('users','userCOntroller');
    //Route::post('update/{id}','userCOntroller@update')->name('user.update');
   // Route::get('delete/{id}','userCOntroller@destroy')->name('user.destroy');
    //Route::get('users/delete-user/{id}','userCOntroller@destroy')->name('user_current.destroy');
});