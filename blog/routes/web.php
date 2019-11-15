<?php

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

Route::get('/', function () {
    return view('login');
});

Route::resource('tasks', 'TaskController');

Route::post('/login', 'RedirectUserController@validateRequest');
Route::get('/login', 'UserController@index');
Route::get('/error', 'ErrorController@index');
Route::get('/tasks', 'TaskController@index')->name('todo.show');
Route::get('/task/specific/{id2}','TaskController@destroy')->name('todo.destroy');
Route::get('/create','CreateTaskController@index')->name('todo.insert');
Route::post('/tasks', 'TaskController@addTask')->name('todo.create');
Route::get('/tasks', 'TaskController@index')->name('todo.create');
Route::get('/task/{id}','TaskController@update')->name('todo.update');
