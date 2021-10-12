<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subcategories = [

            //hombre
            [
                'category_id' => 1,
                'name' => 'Novedades',
                'slug' => Str::slug('El calzado más nuevo para hombres'),
                'color' => true
            ],

            [
                'category_id' => 1,
                'name' => 'Tenis',
                'slug' => Str::slug('Los mejores tenis para hombre'),
                'color' => true,
                'size' => true
            ],

            //mujer
            [
                'category_id' => 2,
                'name' => 'Novedades',
                'slug' => Str::slug('El calzado más nuevo para mujeres'),
                'color' => true,
                'size' => true
            ],

            [
                'category_id' => 2,
                'name' => 'Tenis',
                'slug' => Str::slug('Los mejores tenis para mujeres'),
                'color' => true,
                'size' => true
            ],
            
            [
                'category_id' => 2,
                'name' => 'Running',
                'slug' => Str::slug('Running para mujer'),
                'color' => true,
                'size' => true
            ],

            [
                'category_id' => 2,
                'name' => 'Tacones',
                'slug' => Str::slug('Los mejores tacones'),
                'color' => true,
                'size' => true
            ],

            //niña
            [
                'category_id' => 3,
                'name' => 'Novedades',
                'slug' => Str::slug('Lo mejor para niñas'),
                'color' => true,
                'size' => true
            ],

            [
                'category_id' => 3,
                'name' => 'Tenis',
                'slug' => Str::slug('Tenis para niña'),
                'color' => true,
                'size' => true
            ],

            //niño
            [
                'category_id' => 4,
                'name' => 'Novedades',
                'slug' => Str::slug('Lo mejor para niño'),
                'color' => true,
                'size' => true
            ],

            [
                'category_id' => 4,
                'name' => 'Tenis',
                'slug' => Str::slug('Tenis para niños'),
                'color' => true,
                'size' => true
            ],

        ];

        foreach ($subcategories as $subcategory) {
            Subcategory::factory(1)->create($subcategory);
               
        }

    }
}
