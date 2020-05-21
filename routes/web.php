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

//student management page
Route::resource('management', 'ManagementsController');

//subject page
Route::resource('subject', 'SubjectsController');

//enrollment page
Route::resource('enrollment', 'EnrollmentsController');

Auth::routes();

Route::get('/home', 'HomeController@index');
