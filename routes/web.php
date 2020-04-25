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

Route::post("/admin", "MessageController@addMessage");

Route::get("/messages", "MessageController@get");

Route::post("/messages/{message}", "MessageController@addComment");

Route::get("/messages/{message}", "MessageController@show");

Route::delete("/messages/{id}/delete", "MessageController@delete");

Auth::routes();

Route::get('/admin', 'HomeController@index')->name('home');
