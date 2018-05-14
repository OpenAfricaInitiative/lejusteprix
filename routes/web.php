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
Route::get('/home','AccueilController@index');
Route::get('/Prix','AccueilController@prix')->name('price');
Route::get('/Statistique','AccueilController@stat')->name('stat');
// Authentification
Auth::routes();

route::resource('User','UserController');

Route::get('/logout', 'Auth\AuthController@getLogout')->name('logout');
Auth::routes();
// Prix officiles des produits par categories
Route::name('riz')->get('/Riz', 'ProduitController@riz');
Route::name('sucre')->get('/Sucre', 'ProduitController@sucre');
Route::name('ciment')->get('/Ciment', 'ProduitController@ciment');
Route::name('tomate')->get('/Tomate', 'ProduitController@tomate');
Route::name('huile')->get('/Huile', 'ProduitController@huile');
Route::name('gaz')->get('/Gaz', 'ProduitController@gaz');
Route::name('loyers')->get('/Loyers', 'ProduitController@loyers');

Route::name('sanction')->get('/Sanction', 'ProduitController@sanction');
Route::name('administratif')->get('/Administratif', 'ProduitController@administratif');

Route::Post('/contact','ContactController@store')->name('contact');

// Blog
Route::group(['prefix'=>'blog'],function(){
	Route::get('/','BlogController@index')->name('blog');
	Route::get('/post/{id}/{slug} ','BlogController@show')->name('slug');
	Route::get('/category/{id}/{slug} ','BlogController@category')->name('category');
	Route::get('/All','BlogController@all')->name('all');
// Article des utilisateurs
	Route::get('/Article','BlogController@AddArticle')->name('article');
	Route::post('/Article','BlogController@create')->name('article');
	Route::get('/Update/{id}/Article','BlogController@edit')->name('edit');
	Route::put('/Update/Article/{id}','BlogController@update')->name('update');
	Route::delete('/Delete/Article/{id}','BlogController@destroy')->name('destroy');

});
Route::post('/addComment ','CommentsController@store')->name('comment');
Route::name('maintenance.index')->get('maintenance', 'AdminController@index');
Route::name('maintenance.destroy')->delete('maintenance', 'AdminController@destroy');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();

});
