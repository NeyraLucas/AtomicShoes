<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Storage::deleteDirectory('/public/categories');
        Storage::deleteDirectory('/public/subcategories');
        Storage::deleteDirectory('/public/products');
        //crear carpeta products
        Storage::makeDirectory('/public/categories');
        Storage::makeDirectory('/public/subcategories');
        Storage::makeDirectory('/public/products');
        // importar seeders
        $this->call(UserSeeder::class);
        //seeder category
        $this->call(CategorySeeder::class);

        $this->call(SubcategorySeeder::class);

        //seedear de productos
        $this->call(ProductSeeder::class); 

        //llamar a color
        $this->call(ColorSeeder::class); 

        //lamar a color product seeder
        $this->call(ColorProductSeeder::class); 

        //llama al seeder de size
        $this->call(SizeSeeder::class);

    }
}
