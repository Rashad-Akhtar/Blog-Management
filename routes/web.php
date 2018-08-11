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


Route::get('/','FrontendController@index')->name('index');
Route::get('/post/{slug}','FrontendController@single')->name('single');
Route::get('/category/{id}','FrontendController@category')->name('category.single');
Route::get('/tag/{id}','FrontendController@tag')->name('tag.single');
Route::get('/search/results','FrontendController@search')->name('search.results');

Auth::routes();

// Route::get('/dashboard', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin','middleware'=>'auth'],function(){
    Route::get('/home', 'HomeController@index')->name('home');
    
    Route::get('/create/post','PostsController@create')->name('createpost');
    Route::post('/store/post','PostsController@store')->name('storepost');
    Route::get('/post/index','PostsController@index')->name('post.index');
    Route::get('/post/trash/{id}','PostsController@destroy')->name('post.trash');
    Route::get('/post/edit/{id}','PostsController@edit')->name('post.edit');
    Route::get('/post/show/trash','PostsController@trashed')->name('post.showtrash');
    Route::get('/post/restore/{id}','PostsController@restore')->name('post.restore');
    Route::get('/post/delete/{id}','PostsController@delete')->name('post.delete');
    Route::post('/post/update/{id}','PostsController@update')->name('post.update');


    Route::get('/create/category','CategoriesController@create')->name('category.create');
    Route::post('/store/category','CategoriesController@store')->name('category.store');
    Route::get('/index/category','CategoriesController@index')->name('category.index');
    Route::get('/delete/category/{id}','CategoriesController@destroy')->name('category.delete');
    Route::get('/edit/category/{id}','CategoriesController@edit')->name('category.edit');
    Route::post('/update/category/{id}','CategoriesController@update')->name('category.update');


    Route::get('/tags','TagsController@index')->name('tags');
    Route::get('/tags/create','TagsController@create')->name('tag.create');
    Route::post('/tags/store','TagsController@store')->name('tag.store');
    Route::get('/tags/edit/{id}','TagsController@edit')->name('tag.edit');
    Route::post('/tags/update/{id}','TagsController@update')->name('tag.update');
    Route::get('/tags/delete/{id}','TagsController@destroy')->name('tag.delete');


    Route::get('/users','UsersController@index')->name('users');
    Route::get('/users/create','UsersController@create')->name('users.create');
    Route::post('/users/create','UsersController@store')->name('user.store');
    Route::get('/users/admin/{id}','UsersController@admin')->name('user.admin');
    Route::get('/users/notadmin/{id}','UsersController@notadmin')->name('user.notadmin');
    Route::get('/users/delete/{id}','UsersController@destroy')->name('user.delete');

    Route::get('/users/profile','ProfileController@index')->name('user.profile');
    Route::post('/users/profile/update','ProfileController@update')->name('user.profile.update');

    Route::get('/settings','SettingsController@index')->name('settings');
    Route::post('/settings/update','SettingsController@update')->name('settings.update');
});


