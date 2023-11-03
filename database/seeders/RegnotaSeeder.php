<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RegnotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $registrosNotas = [
            [
                'estudiante' => 'E001',
                'materia' => 'M1',
                'profesor' => 'P1',
                'parcial1' => 8,  // Redondeado a dos decimales
                'parcial2' => 7,  // Redondeado a dos decimales
                'efinal' => 6,    // Redondeado a dos decimales
                'nfinal' => 7,    // Redondeado a dos decimales
                'estado' => 'A',
            ],
            [
                'estudiante' => 'E002',
                'materia' => 'M2',
                'profesor' => 'P2',
                'parcial1' => 7,  // Redondeado a dos decimales
                'parcial2' => 6,  // Redondeado a dos decimales
                'efinal' => 6,    // Redondeado a dos decimales
                'nfinal' => 6,    // Redondeado a dos decimales
                'estado' => 'A',
            ],
            [
                'estudiante' => 'E003',
                'materia' => 'M3',
                'profesor' => 'P3',
                'parcial1' => 9,  // Redondeado a dos decimales
                'parcial2' => 8,  // Redondeado a dos decimales
                'efinal' => 8,    // Redondeado a dos decimales
                'nfinal' => 8,    // Redondeado a dos decimales
                'estado' => 'A',
            ],
            [
                'estudiante' => 'E004',
                'materia' => 'M4',
                'profesor' => 'P4',
                'parcial1' => 6,  // Redondeado a dos decimales
                'parcial2' => 7,  // Redondeado a dos decimales
                'efinal' => 7,    // Redondeado a dos decimales
                'nfinal' => 7,    // Redondeado a dos decimales
                'estado' => 'A',
            ],
            [
                'estudiante' => 'E005',
                'materia' => 'M5',
                'profesor' => 'P5',
                'parcial1' => 8,  // Redondeado a dos decimales
                'parcial2' => 7,  // Redondeado a dos decimales
                'efinal' => 8,    // Redondeado a dos decimales
                'nfinal' => 8,    // Redondeado a dos decimales
                'estado' => 'A',
            ],
        ];
        
        DB::table('regnotas')->insert($registrosNotas);     
    }
}
