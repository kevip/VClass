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

Route::get('/', function () {
    return view('welcome');
});



Route::group(['middleware' => ['cors']], function () {
    Route::post('auth_login', 'API\ApiAuthController@userAuth');
    Route::group(['prefix' => 'api'], function () {
        Route::resource('courses', 'API\CoursesController');
        Route::resource('lessons', 'API\LessonsController');
        Route::resource('students', 'API\StudentsController');
        Route::resource('teachers', 'API\TeachersController');
        Route::resource('tasks', 'API\TasksController');
        Route::resource('sendings', 'API\SendingController');
        Route::resource('users', 'API\UsersController');
        Route::resource('categories', 'API\CategoriesController');


        Route::group(['prefix'=> 'course'],function(){
            Route::post('update/{id}','API\CoursesController@update');
            Route::post('delete/{id}','API\CoursesController@delete');
        });
        Route::group(['prefix'=> 'lesson'],function(){
            Route::post('update/{id}', 'API\LessonsController@update');
            Route::post('delete/{id}', 'API\LessonsController@delete');
        });

        Route::group(['prefix'=> 'student'],function(){
            Route::post('update/{id}', 'API\StudentsController@update');
            Route::post('delete/{id}', 'API\StudentsController@delete');
        });

        Route::group(['prefix'=> 'task'],function(){
            Route::post('update/{id}', 'API\TasksController@update');
            Route::post('delete/{id}', 'API\TasksController@delete');
        });
        Route::group(['prefix'=> 'user'],function(){
            Route::post('update/{id}', 'API\UsersController@update');
            Route::post('delete/{id}', 'API\UsersController@delete');
        });

    });
});
