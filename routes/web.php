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

// Rotas de login / logout
Route::get('login', function(){
    return \Auth::check() ? redirect('/admin') : view('auth.login');
})->name('login');

Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

/*
 * Rotas Publicas
 */
Route::get('/', 'WelcomeController@index');
Route::get('perinatal', 'PerinatalController@index');
Route::get('blog', 'BlogController@index');
Route::get('blog/{slug}', 'BlogController@show');
Route::post('contato', 'ContatoController@postContato')->name('contato');

/* * Aplicando middlewares para as rotas do webadmin - Aqui entram as rotas que precisa estar logado */
Route::middleware(['auth'])->group(function () {
    Route::get('admin', function () {
        return view('home');
    });
    Route::resource('homepages', 'HomepageController');


    Route::post('/admin/trocaFotoFundo', 'HomepageController@postTrocaFotoFundo')->name('homepage.trocaFotoFundo');



});
