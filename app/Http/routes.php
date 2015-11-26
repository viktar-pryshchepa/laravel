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
use App\Task;
use Illuminate\Http\Request;

// Authentication Routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration Routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Tasks...
Route::get('/', 'TaskController@index');
Route::post('task', 'TaskController@store');
Route::delete('task/{task}', 'TaskController@destroy');

Route::get('sandbox/{name?}', function($name = null) {
  $data = [
    'kuba',
    url('sandbox', ['name' => 'kuba']),
  ];
  return view('sandbox.sandbox', compact('data'));
});

// Press releases
Route::get('news', 'PressReleasesController@index');
Route::get('news/{id}', 'PressReleasesController@show');
Route::get('news/create', 'PressReleasesController@create');