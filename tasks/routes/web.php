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

Route::group(['middleware'=>['alerttasks']],function(){

  Route::get('/', function () {
      return view('helpers');
  });

  Route::resource('clients', 'ClientController');
  Route::get('tasks/add/{id}', 'ToDoTasksController@store');
  Route::get('tasks/delete/{id}', 'ToDoTasksController@destroy')->middleware('checktasks');


});




Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
