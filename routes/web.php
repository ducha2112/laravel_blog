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

Route::get('/','StaticController@index');
Route::get('/about','StaticController@about');
Route::get('/contacty','StaticController@contacty');
Route::post('/contacty','PHPMailerController@composeEmail');
Route::get('/blog','BlogController@blog');

Route::get('/article/add','ArticlesController@create');
Route::post('/article/add/post','ArticlesController@store');
Route::get('/article/{id}','ArticlesController@show');
Route::post('/article/{id}','CommentsController@store');

Route::get('/article/{id}/edit','ArticlesController@edit');
Route::put('/article/{id}/edit','ArticlesController@update');
Route::delete('/article/{id}','ArticlesController@destroy');
Route::get('/article/delcomment/{id}','CommentsController@destroy');


Route::get('/public/shop','ProductsController@index');
Route::get('/public/shop/{id}','ProductsController@show');




// Route::resource('/articles','ArticlesController@'); // одна эта запись позволяет обрабатывать все url-адреса и методы контроллера


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/hello', function () {
//     return 'Привет, Мир!';
// });
// Route::post('/hello', function () {
//     return 'Привет, Мир!';
// });
// Route::get('/about-us', function () {
//     return view('static/about'); # можно static.about
// });

// Route::get('/post/{id}/{second}', function ($id,$second) {
//     return "ID post: $id.$second";
// });
Auth::routes();

Route::get('/user', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
