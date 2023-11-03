<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CiudadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ciudades = [
            ['codciudad' => '11001', 'nomciudad' => 'Bogotá', 'departamento' => '11'],
            ['codciudad' => '13001', 'nomciudad' => 'Cartagena', 'departamento' => '13'],
            ['codciudad' => '05001', 'nomciudad' => 'Medellín', 'departamento' => '05'],
            ['codciudad' => '76001', 'nomciudad' => 'Cali', 'departamento' => '76'],
            ['codciudad' => '68001', 'nomciudad' => 'Bucaramanga', 'departamento' => '68'],
        ];
        DB::table('ciudad')->insert($ciudades);
    }
}
