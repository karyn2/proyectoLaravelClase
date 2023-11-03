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
            ['codfacultad' => 'F1',
            'nomfacultad' => 'Ingeniería'
            ],
            ['codfacultad' => 'F2',
            'nomfacultad' => 'Derecho'
            ],
            ['codfacultad' => 'F3',
            'nomfacultad' => 'Ciencias Humanas'
            ],
            ['codfacultad' => 'F4',
            'nomfacultad' => 'Ciencias Puras'
            ],
            ['codfacultad' => 'F5',
            'nomfacultad' => 'Ciencias Puras'
            ]
        ];
        DB::table('facultad')->insert($datos);
    }
}
