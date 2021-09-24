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

Route::prefix('admin')->group(function () {
    Route::get('/listuser','AdminController@listUser')->name('admin.listUser');
    Route::get('/edituser','AdminController@editUser')->name('admin.edituser');
    Route::get('/listbook','BookController@list')->name('admin.listbook');
    Route::get('/editbook/{id}','BookController@edit')->name('admin.editbook');
    Route::PUT('/updatebook/{id}','BookController@update')->name('admin.updatebook');
    Route::get('/addbook','BookController@add')->name('admin.addbook');
    Route::PUT('/addbook','BookController@create')->name('admin.add');
    Route::DELETE('/deletebook/{id}','BookController@delete')->name('admin.deletebook');
});