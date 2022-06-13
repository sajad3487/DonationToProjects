<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();
//Route::post('login',function (Request $request){
//        dd($request->all());
//});
Route::get('/run-migrations', function () {
    return Artisan::call('migrate', ["--force" => true ]);
});



Route::get('/provider_register', function (){
    return view('auth.designer_register');
});

Route::get('home',function (){
    return redirect('customer');
});

Route::get('/',function (){
    return redirect('customer');
});

Route::get('choose_register',function (){
    return view('choose_register');
});

Route::get('solution/{solution_id}/view','SolutionController@view');
