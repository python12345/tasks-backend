<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//List tasks
Route::get('tasks', 'TaskController@index');

//Create new task
Route::post('tasks', 'TaskController@store');

//Update task
Route::put('task/{id}', 'TaskController@update');

//Delete task
Route::delete('task/{id}', 'TaskController@destroy');
