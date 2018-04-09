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
// Acceuil et le fomulaire de creation categories
Route::get('/','AccueilController@index')->name('home');
Route::get('/Prix','AccueilController@prix')->name('price');
// Authentification
Auth::routes();
route::get('/connexion','Auth\AuthController@getLogin')->name('connexion');
route::post('/connexion','Auth\AuthController@postLogin')->name('connexion');
route::get('/inscription','Auth\AuthController@getRegister')->name('inscription');
route::post('/inscription','Auth\AuthController@postRegister')->name('inscription');
route::resource('User','UserController');

Route::get('/logout', 'Auth\AuthController@getLogout')->name('logout');
Auth::routes();
// Image par categories
Route::name('riz')->get('/Riz', 'ProduitController@riz');
Route::name('sucre')->get('/Sucre', 'ProduitController@sucre');
Route::name('ciment')->get('/Ciment', 'ProduitController@ciment');
Route::name('tomate')->get('/Tomate', 'ProduitController@tomate');
Route::name('huile')->get('/Huile', 'ProduitController@huile');
Route::name('gaz')->get('/Gaz', 'ProduitController@gaz');
Route::name('loyers')->get('/Loyers', 'ProduitController@loyers');

Route::Post('/contact','ContactController@store')->name('contact');

// Blog

Route::get('/blog','BlogController@index')->name('blog');
Route::get('/post/{id}/{slug} ','BlogController@show')->name('slug');
Route::Post('/addComment ','CommentsController@store')->name('comment');
Route::name('maintenance.index')->get('maintenance', 'AdminController@index');
Route::name('maintenance.destroy')->delete('maintenance', 'AdminController@destroy');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();

});
