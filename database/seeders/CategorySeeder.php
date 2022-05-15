<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

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
                'name' => 'Teclados mecanicos',
                'slug' => Str::slug('Teclados mecanicos'),
                'icon' => '<i class="fa-solid fa-keyboard"></i>'
            ],
            
            [
                'name' => 'Ratones',
                'slug' => Str::slug('Ratones'),
                'icon' => '<i class="fa-solid fa-computer-mouse-scrollwheel"></i>'
            ],

            [
                'name' => 'Monitores',
                'slug' => Str::slug('Monitores'),
                'icon' => '<i class="fa-solid fa-desktop"></i>'
            ],

            [
                'name' => 'Microfonos',
                'slug' => Str::slug('Microfono'),
                'icon' => '<i class="fa-solid fa-microphone"></i>'
            ],

            [
                'name' => 'Auriculares',
                'slug' => Str::slug('Auriculares'),
                'icon' => '<i class="fa-solid fa-headphones"></i>'
            ]
        ];

        foreach ($categories as $category)
        {
            $category = Category::factory(1)->create($category)->first();
            $brands = Brand::factory(4)->create();

            foreach ($brands as $brand)
            {
                $brand->categories()->attach($category->id); //añadimos registros en una tabla intermedia (brand_category)
            }
        }
    }
}
