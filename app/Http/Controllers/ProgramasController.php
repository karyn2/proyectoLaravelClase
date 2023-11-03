<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProgramasController extends Controller
{
    public function index(){
        $programas = DB::table('programa')
        ->join ('facultad', 'facultad', '=','codfacultad')
        ->get(); // select * from programa join on facultad = codfacultad

        return view("programas.listado", ['program'=> $programas]);
    }
}
