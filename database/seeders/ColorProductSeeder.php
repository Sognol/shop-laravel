<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Seeder;

class ColorProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = Product::whereHas('subcategory', function(Builder $query){
            $query->where('color', true)
                  ->where('size', false);
        })->get();

        foreach($products as $product)
        {
            $product->colors()->attach([
                1 => [
                    'quantity' => 15
                ],
                2 => [
                    'quantity' => 15
                ],
                3 => [
                    'quantity' => 15
                ],
                4 => [
                    'quantity' => 15
                ]
            ]);
        }
    }
}
