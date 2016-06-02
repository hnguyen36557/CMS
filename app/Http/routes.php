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
Route::controller('auth/password', 'Auth\PasswordController', [
   'getEmail' => 'auth.password.email',
    'getReset' => 'auth.password.reset'
]);

Route::controller('auth', 'Auth\AuthController', [
    'getLogin' => 'auth.login',
    'getLogout' => 'auth.logout'
]);

Route::resource('backend/users', 'Backend\UsersController', ['except' => ['show']]);
Route::get('backend/users/{users}/confirm', ['as' => 'backend.users.confirm', 'uses' => 'Backend\UsersController@confirm']);

Route::resource('backend/pages', 'Backend\PagesController', ['except' => ['show']]);
Route::get('backend/pages/{pages}/confirm', ['as' => 'backend.pages.confirm', 'uses' => 'Backend\PagesController@confirm']);

Route::resource('backend/blog','Backend\BlogController');
Route::get('backend/blog/{blog}/confirm', ['as' => 'backend.blog.confirm', 'uses' => 'Backend\BlogController@confirm']);

Route::get('backend/dashboard', ['as' => 'backend.dashboard', 'uses' => 'Backend\DashboardController@index']);

Route::get('/', function () {
    return view('welcome');
});
