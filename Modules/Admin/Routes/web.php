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
            Route::post('/store','AdminSolutionController@store');
            Route::put('/{solution_id}/update','AdminSolutionController@update');
            Route::post('/{solution_id}/delete','AdminSolutionController@destroy');
            Route::get('/{solution_id}/edit','AdminSolutionController@edit');

            Route::get('/{solution_id}/publish','AdminSolutionController@publish_solution');
            Route::get('/{solution_id}/confirm','AdminSolutionController@confirm_solution');

            Route::post('/media/store','AdminSolutionController@upload_media');
            Route::post('/media/{media_id}/delete','AdminSolutionController@destroy_media');
            Route::put('/media/{media_id}/update','AdminSolutionController@update_media');

            Route::group(['prefix'=>'comments'],function (){
                Route::post('/store','AdminCommentController@store');
                Route::post('/{user_id}/delete','AdminCommentController@destroy');
            });

            Route::group(['prefix'=>'reports'],function (){
                Route::post('/store','AdminReportController@store');
                Route::put('/{report_id}/update','AdminReportController@update');
                Route::post('/{report_id}/delete','AdminReportController@destroy');
            });

        });

        Route::group(['prefix'=>'levels'],function (){
            Route::get('/','AdminLevelController@index');
            Route::post('/owner_store','AdminLevelController@store_owner_level');
            Route::post('/customer_store','AdminLevelController@store_customer_level');
            Route::post('/{level_id}/delete','AdminLevelController@destroy');
        });

        Route::group(['prefix'=>'messages'],function (){
            Route::get('/','AdminMessageController@index');
            Route::post('/store','AdminMessageController@store');

        });

        Route::group(['prefix'=>'supports'],function (){
            Route::get('/','AdminDonationController@index');
        });

        Route::group(['prefix'=>'financial'],function (){
            Route::get('/','AdminFinancialController@index');
        });

        Route::group(['prefix'=>'profile'],function (){
            Route::get('/','AdminController@profile');
            Route::put('/{user_id}/update','AdminController@update_profile');
        });

    });

    Route::get("solutions/{solutions_id}/view","AdminSolutionController@view");
});
