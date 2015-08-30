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

Route::get('/', 'WelcomeController@index');


//个人访问主页面路由
Route::group(['middleware' => 'auth'] , function() {
    Route::get('index', 'IndexController@index');
    Route::group(['prefix' => 'admin', 'namespace' => 'Admin'] , function() {
        Route::get('/', 'AdminHomeController@index');
        Route::get('show/{id}' ,'ShowController@index') ;
    });
    Route::controllers([
        'auth' => 'Auth\AuthController',
        'password' => 'Auth\PasswordController',
    ]);
    Route::group(['prefix' => 'aboutme' , 'namespace' => 'AboutMe','permissions'=>['admin.validate', 'admin.index']] , function() {
        Route::get('/' , 'AboutMeController@index') ;
        Route::resource('abouthow', 'AboutHowController');

    });


});








//Route::get('') ;
