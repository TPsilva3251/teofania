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
    return view('index');
});
Route::get('/biblias', function () {
    return view('biblias');
});
Route::get('/livros', function () {
    return view('livros');
});
Route::get('/midias', function () {
    return view('midias');
});
Route::get('/faleconosco', function () {
    return view('faleconosco');
});
Route::get('/admin', function () {
    return view('admin');
});
/////////////////////////////////////////////////////////////////
Route::resource('category', 'categoryController');
Route::get('/category', 'categoryController@index')->name('categoria.index');
Route::get('/category-del{id}', 'categoryController@destroy')->name('categoria.delete');
/////////////////////////////////////////////////////////////////
// Route::get('/biblia', 'bibliesController@index');
Route::resource('biblia', 'bibliesController');
Route::get('/biblia', 'bibliesController@index')->name('biblia.index');
Route::get('biblia/create', 'bibliesController@create');
Route::post('biblia/store', 'bibliesController@store');
/////////////////////////////////////////////////////////////////
Route::get('/mail', 'mailController@SendMail');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
