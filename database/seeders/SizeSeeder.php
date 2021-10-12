<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Product;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = Product::whereHas('subcategory', function(Builder $query){
            $query->where('color', true) //consultamos si color es true
                ->where('size', true); // y si size es false
        })->get();

       /*  $sizes = ['11','12','13','14', '15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31']; */
        $sizes = ['20','21','22','23','24','25','26'];

        foreach ($products as $product) {
            foreach ($sizes as $size) {
                $product->sizes()->create([
                    'name' => $size
                ]);
            }
        }
    }
}
