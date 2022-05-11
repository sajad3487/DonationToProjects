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
            Route::post('store','OwnerMessageController@store');
        });

        Route::group(['prefix'=>'solutions'],function (){
            Route::get('/','OwnerSolutionController@index');
            Route::get('/create','OwnerSolutionController@create');
            Route::post('/store','OwnerSolutionController@store');
            Route::get('/{solution_id}/edit','OwnerSolutionController@edit');
            Route::put('/{solution_id}/update','OwnerSolutionController@update');
            Route::post('/media/store','OwnerSolutionController@upload_media');
            Route::post('/media/{media_id}/delete','OwnerSolutionController@destroy_media');
            Route::put('/media/{media_id}/update','OwnerSolutionController@update_media');

            Route::get('/{solution_id}/publish','OwnerSolutionController@publish');

            Route::group(['prefix'=>'comments'],function (){
                Route::post('/store','OwnerCommentController@store');
            });

            Route::group(['prefix'=>'reports'],function (){
                Route::post('/store','OwnerReportController@store');
                Route::put('/{report_id}/update','OwnerReportController@update');
                Route::post('/{report_id}/delete','OwnerReportController@destroy');
            });
        });

        Route::group(['prefix'=>'profile'],function (){
            Route::get('/','OwnerProfileController@index');
            Route::put('/{user_id}/update','OwnerProfileController@update');
        });

    });
});
