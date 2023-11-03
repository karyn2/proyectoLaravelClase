<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class EstudianteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $estudiantes = [
            [
                'codestudiante' => 'E001',
                'nomestudiante' => 'Ana Pérez',
                'edaestudiante' => 20,
                'fechestudiante' => '2003-05-15',
                'sexestudiante' => 'F',
                'ciudad' => '05001',
                'barrio' => 'B1',
                'programa' => 'P1',
            ],
            [
                'codestudiante' => 'E002',
                'nomestudiante' => 'Juan Rodríguez',
                'edaestudiante' => 22,
                'fechestudiante' => '2001-08-20',
                'sexestudiante' => 'M',
                'ciudad' => '11001',
                'barrio' => 'B2',
                'programa' => 'P2',
            ],
            [
                'codestudiante' => 'E003',
                'nomestudiante' => 'María González',
                'edaestudiante' => 21,
                'fechestudiante' => '2002-03-10',
                'sexestudiante' => 'F',
                'ciudad' => '13001',
                'barrio' => 'B3',
                'programa' => 'P3',
            ],
            [
                'codestudiante' => 'E004',
                'nomestudiante' => 'Carlos Martínez',
                'edaestudiante' => 23,
                'fechestudiante' => '2000-11-05',
                'sexestudiante' => 'M',
                'ciudad' => '13001',
                'barrio' => 'B4',
                'programa' => 'P4',
            ],
            [
                'codestudiante' => 'E005',
                'nomestudiante' => 'Laura Sánchez',
                'edaestudiante' => 19,
                'fechestudiante' => '2004-02-25',
                'sexestudiante' => 'F',
                'ciudad' => '76001',
                'barrio' => 'B5',
                'programa' => 'P5',
            ],
        ];
        DB::table('estudiante')->insert($estudiantes);
    }
}
