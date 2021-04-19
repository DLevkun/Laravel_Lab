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

Route::get('/', 'AccountController@showAllUsers')->name('main-page');

Route::get('/books', function () {
    return view('books');
})->name('books-page');

Route::get('/audio', function () {
    return view('audio');
})->name('audio-page');

Route::get('/booklist', "BooksController@getAllBooks")->name('list-page');

Route::get('/account', function () {
    return view('account');
})->name('account');

Route::post('/account/submit', "AccountController@submit")->name('account-submit');

Route::post('/booklist/add', "BooksController@save")->name('book-submit');

Route::get('/booklist/{id}/delete', "BooksController@deleteBook")->name('delete-book');

Route::get('/booklist/{id}/update', "BooksController@updateBook")->name('update-book');

Route::post('/booklist/{id}/update', "BooksController@updateBookSubmit")->name('update-submit');
