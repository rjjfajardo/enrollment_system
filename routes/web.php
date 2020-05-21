<?php

use Illuminate\Support\Facades\Route;

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

Route::resource('management', 'ManagementsController');
Route::patch('/management', 'ManagementsController@update')->name('management.update');

Route::resource('subject', 'SubjectsController');
Route::resource('enrollment', 'EnrollmentsController');

Auth::routes();

Route::get('/dashboard', 'HomeController@index');
