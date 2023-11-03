<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DecanoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $decanos = [
            ['coddecano' => 'D1', 'nomdecano' => 'Juan Pérez', 'facultad' => 'F1'],
            ['coddecano' => 'D2', 'nomdecano' => 'María Rodríguez', 'facultad' => 'F2'],
            ['coddecano' => 'D3', 'nomdecano' => 'Carlos González', 'facultad' => 'F3'],
            ['coddecano' => 'D4', 'nomdecano' => 'Laura Martínez', 'facultad' => 'F4'],
            ['coddecano' => 'D5', 'nomdecano' => 'Pedro Sánchez', 'facultad' => 'F5'],
        ];
        DB::table('decano')->insert($decanos);
    }
}
