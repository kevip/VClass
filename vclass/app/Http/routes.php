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
    Route::group(['prefix' => 'api'], function () {
        Route::resource('courses', 'API\CoursesController');
        Route::post('course/update/{id}','API\CoursesController@update');
        Route::post('course/delete/{id}','API\CoursesController@delete');
        //Route::put('courses/{id}','API\CoursesController@update');
        Route::resource('lessons', 'API\LessonsController');
        Route::resource('students', 'API\StudentsController');
        Route::resource('teachers', 'API\TeachersController');
        Route::resource('tasks', 'API\TasksController');
        Route::resource('sendings', 'API\SendingController');
        Route::post('auth_login', 'API\ApiAuthController@userAuth');

        Route::group(['prefix'=> 'lesson'],function(){
            Route::post('edit/{id}', 'API\LessonsController@update');
            Route::post('delete/{id}', 'API\LessonsController@delete');
        });

        Route::group(['prefix'=> 'student'],function(){
            Route::post('edit/{id}', 'API\StudentsController@update');
            Route::post('delete/{id}', 'API\StundentsController@delete');
        });

        Route::group(['prefix'=> 'task'],function(){
            Route::post('edit/{id}', 'API\TasksController@update');
            Route::post('delete/{id}', 'API\TasksController@delete');
        });

    });
});
