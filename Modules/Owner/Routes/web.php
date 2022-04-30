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
Route::group(['middleware'=>'auth'],function (){
    Route::group(['prefix'=>'owner','middleware'=>'CheckOwner'],function (){

        Route::get('/','OwnerController@index');

        Route::group(['prefix'=>'messages'],function (){
            Route::get('/','OwnerMessageController@index');
        });

        Route::group(['prefix'=>'solutions'],function (){
            Route::get('/','OwnerSolutionController@index');
        });

        Route::group(['prefix'=>'profile'],function (){
            Route::get('/','OwnerProfileController@index');
        });

    });
});
