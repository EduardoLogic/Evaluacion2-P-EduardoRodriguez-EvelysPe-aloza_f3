<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // <--- Importante añadir esta línea

class MenuSeeder extends Seeder
{
    public function run(): void
    {
        // Insertamos datos de ejemplo en la tabla 'menus'
        DB::table('menus')->insert([
            ['nombre' => 'Desayuno', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Almuerzo', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Cena', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
