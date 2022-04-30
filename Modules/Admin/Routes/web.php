<?php
\

Route::group(['prefix'=>'admin','middleware'=>'auth'],function (){
    Route::group(['middleware'=>'CheckAdmin'],function (){
        Route::get('/', 'AdminController@index');

        Route::group(['prefix'=>'categories'],function (){
            Route::get('/','AdminCategoryController@index');
            Route::get('create','AdminCategoryController@create');
            Route::post('store','AdminCategoryController@store');
            Route::get('{category_id}/delete','AdminCategoryController@destroy');
            Route::get('{category_id}/edit','AdminCategoryController@edit');
            Route::put('{category_id}/update','AdminCategoryController@update');
            Route::get('{category_id}/subCategory','AdminCategoryController@subCategory');
        });

        Route::group(['prefix'=>'solution_provider'],function (){
            Route::get('/','AdminSolutionProviderController@index');
            Route::post('/store','AdminSolutionProviderController@store');
            Route::put('/{user_id}/update','AdminSolutionProviderController@update');
            Route::post('/{user_id}/delete','AdminSolutionProviderController@destroy');
            Route::post('/{user_id}/update_profile_picture','AdminSolutionProviderController@update_profile_picture');
        });

        Route::group(['prefix'=>'customers'],function (){
            Route::get('/','AdminCustomerController@index');
            Route::post('/store','AdminCustomerController@store');
            Route::put('/{user_id}/update','AdminCustomerController@update');
            Route::post('/{user_id}/delete','AdminCustomerController@destroy');
            Route::post('/{user_id}/update_profile_picture','AdminCustomerController@update_profile_picture');
        });

        Route::group(['prefix'=>'solutions'],function (){
            Route::get('/','AdminSolutionController@index');
        });

        Route::group(['prefix'=>'levels'],function (){
            Route::get('/','AdminLevelController@index');
        });

        Route::group(['prefix'=>'messages'],function (){
            Route::get('/','AdminMessageController@index');
        });

        Route::group(['prefix'=>'supports'],function (){
            Route::get('/','AdminSupportsController@index');
        });

        Route::group(['prefix'=>'financial'],function (){
            Route::get('/','AdminFinancialController@index');
        });
    });
});
