<?php

namespace App\Http\Controllers;

use App\Tareas;

class TareasController extends Controller
{
    public function index(){
        //$tareas=DB::table('tareas')->get();
        $tareas=Tareas::all();
        return view('tareas.index',compact("tareas"));
    }

    public function show($id){
    //$tarea=DB::table('tareas')->find($id);
    $tarea=Tareas::find($id);
    return view('tareas.tarea',compact("tarea"));
    }
}
