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

Auth::routes();

Route::get('/', function () {
    return view('pages.homepage');
});

Route::get('/perinatal', function () {
    return view('pages.perinatal');
});

Route::get('/blog', function () {
    return view('pages.blog');
});

Route::get('/blog/{slug}', function () {
    return view('pages.blog-interna');
});

Route::post('contato', 'ContatoController@postContato')->name('contato');
