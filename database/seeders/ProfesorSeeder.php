<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProfesorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $profesores = [
            ['codprofesor' => 'P1', 'nomprofesor' => 'Juan Pérez', 'catprofesor' => 'Titular'],
            ['codprofesor' => 'P2', 'nomprofesor' => 'María Rodríguez', 'catprofesor' => 'Asociado'],
            ['codprofesor' => 'P3', 'nomprofesor' => 'Carlos González', 'catprofesor' => 'Adjunto'],
            ['codprofesor' => 'P4', 'nomprofesor' => 'Laura Martínez', 'catprofesor' => 'Titular'],
            ['codprofesor' => 'P5', 'nomprofesor' => 'Pedro Sánchez', 'catprofesor' => 'Adjunto'],
        ];
        DB::table('profesor')->insert($profesores); 
    }
}
