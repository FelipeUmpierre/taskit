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
    Route::get('/', 'ClientController@index');
    Route::get('/show/{id}', 'ClientController@find');
    Route::get('/{id}/projects', 'ClientController@projectsFrom');
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

Route::group(['prefix' => 'tasks'], function () {
    Route::model('task', 'App\Task');
    Route::model('project', 'App\Project');

    Route::get('/project/{project}', 'TaskController@list');
    Route::get('/project/{project}/checklist/{task}', 'TaskController@checklist');
});