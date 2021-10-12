<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [

            [
                'name' => 'Hombres',
                'slug' => Str::slug('Calzado para hombres'),
                'icon' => '<i class="fas fa-male"></i>'
            ],

            [
                'name' => 'Mujeres',
                'slug' => Str::slug('Calzado para mujeres'),
                'icon' => '<i class="fas fa-female"></i>'
            ],

            [
                'name' => 'Niña',
                'slug' => Str::slug('Calzado para niñas'),
                'icon' => '<i class="fas fa-child"></i>'
            ],

            [
                'name' => 'Niño',
                'slug' => Str::slug('Calzado para niños'),
                'icon' => '<i class="fas fa-child"></i>'
            ],

        ];

        //add img
        foreach($categories as $category){
            $category = Category::factory(1)->create($category)->first();

            $brands = Brand::factory(4)->create();

            foreach ($brands as $brand) {
                $brand->categories()->attach($category->id);
            }

        }
    }
}
