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
Route::get('/obavestenja', 'PostController@index2');

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/warrants-all', 'WarrantController@warrants');
Route::get('/notices-all', 'NoticeController@notices');

Auth::routes();

Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('admin');
Route::get('admin/dashboard', 'HomeController@adminDashboard')->name('admin.dashboard')->middleware('admin');


Route::resource('posts','PostController');
Route::resource('warrants','WarrantController');
Route::resource('notices','NoticeController');


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/files/downloadN/{id}' , 'NoticeController@downloadN');
Route::get('/files/downloadW/{id}' , 'WarrantController@downloadW');
