<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DocentesController extends Controller
{
    public function index(){
        $docentes = DB::table('profesor')->get(); // select * from facultad
        return view("docentes.listado", ['docente'=> $docentes]);
    }
}
