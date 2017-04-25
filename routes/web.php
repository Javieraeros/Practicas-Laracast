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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/holi', function () {
    return view('holi')->with("holi", "holiii mundiiii");
});

Route::get('/tareas', 'TareasController@index');


Route::get('/tareas/{tarea}', 'TareasController@show');
Route::get('album', function () {
    return view('tareas.index2');
});


//Important to put /posts/create    BEFORE /posts/id, so the router will pick up the first route
Route::get('/posts', 'PostController@index');
Route::get('/posts/create', 'PostController@create');


Route::get('/posts/{id}', 'PostController@show');

Route::post('posts', 'PostController@store');