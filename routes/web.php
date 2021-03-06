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


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;

Route::get('/', 'WelcomeController@index')->name('welcome');

Route::get('/about', 'AboutController@index')->name('about');

Route::get('/contact', 'ContactController@index')->name('contact');

Route::post('/post/id={id}', 'CommentController@addComment')->name('addComment');

Route::get('/blog', 'BlogController@index')->name('blog');
Route::get('/post/id={id}', 'BlogController@post')->name('post');
Route::get('/blog/category/{id}', 'BlogController@getCategoryPosts')->name('getCategoryPosts');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
