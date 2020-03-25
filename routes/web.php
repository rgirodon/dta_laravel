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

    return view('welcome');
});

Route::get('/vue', function () {

    return view('welcomeVue');
});

Route::get('/hello', function() {

    return view('hello', ['name' => 'DTA', 'msg' => 'Hello']);
});

Route::get('/hello/{name}', function($name) {

    return view('hello', ['name' => $name, 'msg' => 'Hello']);
});

Route::get('/hello_array', function() {

    return view('hello_array', ['names' => ['John', 'Sam', 'Jane']]);
});

Route::get('/student/{firstname}/{lastname}', 'StudentController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
