<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
         DB::table('producto')->insert([
            'nombre' => 'ZAPATILLA HOMBRE ADIDAS GALAXY',
            'precio' => 1149.00,
            'marca_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
         DB::table('producto')->insert([
            'nombre' => 'NIKE BLAZER MID "77',
            'precio' => 433.65,
            'marca_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
