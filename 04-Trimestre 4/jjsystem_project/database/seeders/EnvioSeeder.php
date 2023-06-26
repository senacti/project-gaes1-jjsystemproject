<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EnvioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $direccion = "cll 430";
        $idtecnico = 3;

        DB::table('envios')->insert([
            'direccion' => $direccion,
            'idTecnico' => $idtecnico
        ]);
    }
}
