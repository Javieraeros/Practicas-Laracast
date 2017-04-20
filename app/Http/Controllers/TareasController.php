<?php

namespace App\Http\Controllers;

use App\Tarea;

class TareasController extends Controller
{
    public function index()
    {
        //$tareas=DB::table('tareas')->get();
        $tareas = Tarea::all();
        return view('tareas.index', compact("tareas"));
    }

    /*public function show($id){
    //$tarea=DB::table('tareas')->find($id);
    $tarea=Tarea::find($id);
    return view('tareas.tarea',compact("tarea"));
    }*/

    public function show(Tarea $tarea){
        return view('tareas.tarea',compact('tarea'));
    }
}
