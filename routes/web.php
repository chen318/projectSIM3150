<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
use App\Task;
use Illuminate\Http\Request;
Route::get('/', function () {
    return view('welcome');
})->middleware('guest');


Route::get('/logout', function(){
    Auth::logout(); // logout user
    return Redirect::to('/login');
});


Route::get('/tasks', 'TaskController@index');
Route::post('/tasks', 'TaskController@store');
Route::delete('/tasks/{task}', 'TaskController@destroy');
Route::auth();

