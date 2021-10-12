<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Color;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $colors = ['blanco', 'negro', 'azul', 'rojo', 'amarillo'];

        foreach ($colors as $color) {
            Color::create([
                'name' => $color
            ]);
        }

    }
}