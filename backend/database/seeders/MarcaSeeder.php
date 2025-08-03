<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
         DB::table('marca')->insert([
            'nombre' => 'ADIDAS',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('marca')->insert([
            'nombre' => 'NIKE',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('marca')->insert([
            'nombre' => 'VANS',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('marca')->insert([
            'nombre' => 'PUMA',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
