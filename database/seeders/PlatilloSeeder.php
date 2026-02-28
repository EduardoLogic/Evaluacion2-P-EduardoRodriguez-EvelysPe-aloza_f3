<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // <--- Importante añadir esta línea
use App\Models\Menu; // <--- Para buscar los IDs de los menús

class PlatilloSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Buscamos los menús que creamos en el seeder anterior
        $desayuno = Menu::where('nombre', 'Desayuno')->first();
        $almuerzo = Menu::where('nombre', 'Almuerzo')->first();

        // 2. Insertamos datos de ejemplo en la tabla 'platillos'
        DB::table('platillos')->insert([
            [
                'nombre' => 'Arepa Reina Pepiada',
                'calorias' => 450,
                'disponible' => true,
                'menu_id' => $desayuno->id, // Asocia al ID de Desayuno
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Pabellón Criollo',
                'calorias' => 700,
                'disponible' => true,
                'menu_id' => $almuerzo->id, // Asocia al ID de Almuerzo
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Ensalada César',
                'calorias' => 300,
                'disponible' => false, // Este no está disponible
                'menu_id' => $almuerzo->id, // Asocia al ID de Almuerzo
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
