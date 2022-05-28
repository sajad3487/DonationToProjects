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
    Route::group(['prefix'=>'customer','middleware'=>'CheckUser'],function (){

        Route::get('/', 'CustomerController@index');

        Route::group(['prefix'=>'solutions'],function (){
            Route::get('/','CustomerSolutionController@index');

            Route::get('/your_donations','CustomerSolutionController@customer_donated');

            Route::group(['prefix'=>'categories'],function (){
                Route::get('/{category_id}/index','CustomerSolutionController@category_solutions');
            });

            Route::get('sort_by/date','CustomerSolutionController@sort_by_date');
            Route::get('sort_by/support','CustomerSolutionController@sort_by_support');

            Route::group(['prefix'=>'comments'],function (){
                Route::post('/store','CustomerCommentController@store');
            });

            Route::group(['prefix'=>'donate'],function (){
                Route::post('/store','CustomerDonationController@store');
            });

            Route::get('/search','CustomerSolutionController@search_solution');

        });

        Route::group(['prefix'=>'financial'],function (){
            Route::get('/','CustomerFinancialController@index');
        });

        Route::group(['prefix'=>'messages'],function (){
            Route::get('/','CustomerMessageController@index');
            Route::post('/store','CustomerMessageController@store');
            Route::get('/{user_id}/create','CustomerMessageController@create');
        });

        Route::group(['prefix'=>'profile'],function (){
            Route::get('/','CustomerProfileController@index');
            Route::put('/{user_id}/update','CustomerProfileController@update');
        });

    });

});

Route::get('customer/solutions/{solution_id}/show','CustomerSolutionController@show');

