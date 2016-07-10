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
        Route::resource('lessons', 'API\LessonsController');
        Route::resource('students', 'API\StudentsController');
        Route::resource('teachers', 'API\TeachersController');
        Route::resource('tasks', 'API\TasksController');
        Route::resource('tasks', 'API\TasksController');

    });
});
