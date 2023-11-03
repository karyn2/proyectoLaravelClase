<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EstudiantesController extends Controller
{
    public function index(){
        $estudiantes = DB::table('estudiante')
        -> join('programa', 'programa','=','codprograma') 
        ->get(); 
        return view("estudiantes.listado", ['student'=> $estudiantes]);
    }
}
