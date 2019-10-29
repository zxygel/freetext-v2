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

Route::get('/', 'HomeController@welcome')->name('welcome');

Auth::routes();

Route::get('/profile', 'ProfileController@index')->name('profile');
Route::post('/profile/update', 'ProfileController@update')->name('update');
Route::get('/profile/{id}', 'ProfileController@form')->name('form');

Route::get('/lessons', 'LessonController@index')->name('lessons');
Route::get('/lessons/form', 'LessonController@form')->name('lessons-form');
Route::get('/lessons/view/{id}', 'LessonController@view');
Route::post('/lessons/add', 'LessonController@create')->name('lessons-add');
Route::post('/lessons/update', 'LessonController@update')->name('lessons-update');
Route::post('/lessons/delete', 'LessonController@delete')->name('lessons-delete');

Route::get('/assignments', 'AssignmentController@index')->name('assignments');
//route for verification
Route::get("/text", "MainController@receive")->middleware("verify");

//where Facebook sends messages to. No need to attach the middleware to this because the verification is via GET
Route::post("/text", "MainController@receive");