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
    Route::get('/listbook','AdminController@listBook')->name('admin.listbook');
    Route::get('/editbook/{id}','AdminController@editBook')->name('admin.editbook');
    Route::get('/addbook','AdminController@addBook')->name('admin.addbook');
});