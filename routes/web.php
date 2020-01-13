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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::post('/student','MasterStudentsController@store');
Route::get('/student/create','MasterStudentsController@create')->name('student.create');
Route::get('/student/{stud}/edit','MasterStudentsController@edit')->name('student.edit');
Route::get('/student/create','MasterStudentsController@create')->name('student.create');
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::resource('students','MasterStudentsController');