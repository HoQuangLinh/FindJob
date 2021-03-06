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
    return view('/');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/test', 'TestController@index');
Route::get('/users', 'UserController@index');
Route::get('/editUser/{id}', 'UserController@showFormEditUser');
Route::post('editUser/{id}', 'UserController@editUser');
Route::get('deleteUser/{id}', 'UserController@showFormDelete');
Route::post('deleteUser/{id}', 'UserController@deleteUser');
Route::get('/', 'JobController@index');