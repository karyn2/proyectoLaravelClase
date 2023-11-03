<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProgramaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $programas = [
            [
                'codprograma' => 'P1',
                'nomprograma' => 'Ingeniería de Sistemas',
                'facultad' => 'F1',
            ],
            [
                'codprograma' => 'P2',
                'nomprograma' => 'Derecho Civil',
                'facultad' => 'F2',
            ],
            [
                'codprograma' => 'P3',
                'nomprograma' => 'Ciencias Sociales',
                'facultad' => 'F3',
            ],
            [
                'codprograma' => 'P4',
                'nomprograma' => 'Matemáticas Avanzadas',
                'facultad' => 'F4',
            ],
            [
                'codprograma' => 'P5',
                'nomprograma' => 'Medicina General',
                'facultad' => 'F5',
            ],
        ];
        DB::table('programa')->insert($programas);
    }
}
