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

/**
 * Homepage Route
 */
Route::get('/', [
  'uses' =>  'HomeController@home',
  'as'   => 'home'
]);

/**
* Authentication routes
*/
Route::get('/auth/login', [
   'uses' => 'AuthController@getLogin',
   'as'   => 'login'
]);

Route::post('/auth/login', [
   'uses' => 'AuthController@postLogin'
]);

Route::get('/auth/register', [
    'uses' => 'AuthController@getRegister',
    'as'   => 'register'
]);

Route::post('/auth/register', [
    'uses' => 'AuthController@postRegister'
]);

Route::get('/logout', [
    'uses' => 'AuthController@getLogout',
    'as'   => 'logout'
]);
