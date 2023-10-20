<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FacultadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datos = [
            [
                'codfacultad' => '10',
                'nomfacultad' =>'Artes'
            ],
            [
                'codfacultad' => '20',
                'nomfacultad' =>'Ciencias económicas'
            ],
            [
                'codfacultad' => '30',
                'nomfacultad' =>'Ingenieria'
            ],
            [
                'codfacultad' => '40',
                'nomfacultad' =>'Derecho'
            ],
            [
                'codfacultad' => '50',
                'nomfacultad' =>'Ciencias Humanas'
            ],
           
        ];
        DB::table('facultad')->insert($datos);
    }
}
