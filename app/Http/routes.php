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

Route::group(['prefix' => 'clients'], function () {
    Route::model('client', 'App\Client');

    Route::get('/', 'ClientController@index');
    Route::get('/show/{client}', 'ClientController@find');
    Route::get('/projects/{client}', 'ClientController@projectsFrom');
    Route::post('/save', 'ClientController@save');
});

Route::group(['prefix' => 'projects'], function () {
    Route::model('project', 'App\Project');

    Route::get('/', 'ProjectController@index');
    Route::get('/show/{project}', 'ProjectController@find');
    Route::get('/client/{project}', 'ProjectController@clientFrom');
    Route::get('/tasks/{project}', 'ProjectController@tasksFrom');
    Route::post('/save', 'ProjectController@save');
});