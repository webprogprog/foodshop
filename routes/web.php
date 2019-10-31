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

Route::get('/', 'UserController@index');
Route::get('/index', 'UserController@index');
Route::get('/edit/{id}', 'FoodController@edit');
Route::post('/update/{id}', 'FoodController@update');
Route::get('/add', 'UserController@add');
Route::post('/addPost', 'FoodController@insert');
Route::get('/delete/{id}', 'UserController@delete');
Route::get('/login', 'UserController@login');
Route::post('/loginPost', 'UserController@loginPost');
Route::get('/register', 'UserController@register');
Route::post('/registerPost', 'UserController@registerPost');
Route::get('/logout', 'UserController@logout');
Route::get('/view-users', 'UserController@viewUsers');
Route::get('/view-users/search', 'UserController@searchUser');
