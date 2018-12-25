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



// Route::get('/', function () {
//     return view('index');
// });
//Route::get('/', 'CategoriesController@index');
Route::get('/', 'AccountController@index');
Route::resource('queries', 'SearchController');
Route::post('/account/art', 'SearchController@search');
//blog
Route::get('/article/{id}/{slug}.html','CategoriesController@showCategory')->name('blog.show');

Route::group(['middleware'=>'guest'], function(){
	//Regisret
	Route::get('/register','Auth\RegisterController@showRegistrationForm')->name('register');
	Route::post('/register','Auth\RegisterController@register');
	//Login
	Route::get('/login','Auth\LoginController@showLoginForm')->name('login');
	Route::post('/login','Auth\LoginController@login');
});
//account
Route::group(['middleware'=>'auth'], function(){
	Route::get('/logout', function(){
		\Auth::logout();
		return redirect(route('login'));
	})->name('logout');
	Route::get('/account','AccountController@indexCAT')->name('account');
	Route::get('/account/art','AccountController@indexART')->name('art');
	//Route::get('/account','AccountController@index')->name('account');
	//Route::get('/account/art','AccountController@indexART')->name('art');
		Route::get('/', function(){
		return redirect(route('account'));
	});

//Admin
	Route::group(['middleware'=>'admin', 'prefix'=>'admin'], function(){
		Route::get('/','Admin\AccountController@index')->name('admin');
//Categories
		Route::get('/categories','Admin\CategoriesController@index')->name('categories');
		Route::get('/categories/add','Admin\CategoriesController@addCategories')->name('categories.add');
		Route::post('/categories/add','Admin\CategoriesController@addRequestCategory');
		Route::get('/categories/edit/{id}','Admin\CategoriesController@editCategory')
		    ->where('id', '\d+')
		    ->name('categories.edit');
		Route::post('/categories/edit/{id}','Admin\CategoriesController@editRequestCategory')
		    ->where('id', '\d+');
		Route::delete('/categories/delete','Admin\CategoriesController@deleteCategories')->name('categories.delete');
//Articles
		Route::get('/articles','Admin\ArticlesController@index')->name('articles');
		Route::get('/articles/add','Admin\ArticlesController@addArticle')->name('articles.add');
		Route::post('/articles/add','Admin\ArticlesController@addRequestArticle');
		Route::get('/articles/edit/{id}','Admin\ArticlesController@editArticle')->where('id', '\d+')->name('articles.edit');
		Route::post('/articles/edit/{id}','Admin\ArticlesController@editRequestArticles')
		    ->where('id', '\d+');
		Route::delete('/articles/delete','Admin\ArticlesController@deleteArticle')->name('articles.delete');
//Users
		Route::get('/users','Admin\UsersController@index')->name('users');

	});

});

//___
Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Route::get('sendm', 'mailController@send');

// Route::post('send', 'mailController@send_form');

//Обратная связь
Route::get('/send', function () {
    return view('home');
    });
Route::post('/account', 'mailController@send_form');