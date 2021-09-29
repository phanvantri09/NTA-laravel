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
//em hơi dở tiếng anh nên em comment bằng tiếng việt nha máy anh
Route::get('/login','UserController@login')->name('bookShop.login');
Route::get('/register','UserController@register')->name('bookShop.register');
Route::get('/logout','UserController@logout')->name('bookShop.logout');
Route::POST('/login','UserController@postLogin')->name('bookShop.postLogin');
Route::POST('/register','UserController@postRegister')->name('bookShop.postRegister');
Route::prefix('admin')->group(function () {
    // route User
    Route::get('/listuser','AdminController@listUser')->name('admin.listUser');
    Route::get('/edituser','AdminController@editUser')->name('admin.edituser');
    // route BOOK
    Route::get('/listbook','BookController@list')->name('admin.listbook');
    Route::get('/editbook/{id}','BookController@edit')->name('admin.editbook');
    Route::PUT('/updatebook/{id}','BookController@update')->name('admin.updatebook');
    Route::get('/addbook','BookController@add')->name('admin.addbook');
    Route::POST('/addbook','BookController@create')->name('admin.add');
    Route::DELETE('/deletebook/{id}','BookController@delete')->name('admin.deletebook');

});
//route trang chủ
Route::prefix('bookshop')->group(function () {
    Route::get('/home','HomeController@index')->name('bookShop.home');
    Route::get('/book/{id}','HomeController@book')->name('bookShop.book'); 
    Route::get('/addcard/{idUser}/{idBook}','CardController@addCard')->name('bookShop.addCard');
    Route::POST('/postComment/{idBook}','CommentController@create')->name('bookShop.postComment');
    Route::DELETE('/deletecard/{id}','CardController@delete')->name('bookShop.deleteCard');
});
