<?php
use App\Tareas;
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

Route::get('/tareas', function () {
    //$tareas=DB::table('tareas')->get();
    $tareas=Tareas::all();
    return view('tareas.index',compact("tareas"));
});


Route::get('/tareas/{tarea}', function ($id) {
    //$tarea=DB::table('tareas')->find($id);
    $tarea=Tareas::find($id);
    return view('tareas.tarea',compact("tarea"));
});