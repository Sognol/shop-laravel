<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;


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

            // Teclados mecanicos

            [
                'category_id' => 1,
                'name' => 'Cases',
                'slug' => Str::slug('Cases'),
                'color' => true
            ],

            [
                'category_id' => 1,
                'name' => 'Pcbs',
                'slug' => Str::slug('Pcbs'),
            ],

            [
                'category_id' => 1,
                'name' => 'Switches',
                'slug' => Str::slug('Switches'),
            ],

            // Ratones

            [
                'category_id' => 2,
                'name' => 'Ratones Logitech',
                'slug' => Str::slug('Ratones Logitech'),
            ],

            [
                'category_id' => 2,
                'name' => 'Ratones Razer',
                'slug' => Str::slug('Ratones Razer'),
            ],

            [
                'category_id' => 2,
                'name' => 'Ratones Corsair',
                'slug' => Str::slug('Ratones Corsair'),
            ],

            // Monitores

            [
                'category_id' => 3,
                'name' => 'Monitor LG',
                'slug' => Str::slug('Monitor LG'),
            ],

            [
                'category_id' => 3,
                'name' => 'Monitor Asus',
                'slug' => Str::slug('Monitor Asus'),
            ],

            [
                'category_id' => 3,
                'name' => 'Monitor Gigabyte',
                'slug' => Str::slug('Monitor Gigabyte'),
            ],

            [
                'category_id' => 3,
                'name' => 'Monitor MSI',
                'slug' => Str::slug('Monitor MSI'),
            ],

            // Microfonos

            [
                'category_id' => 4,
                'name' => 'Microfono El Gato',
                'slug' => Str::slug('Microfono El Gato'),
            ],

            [
                'category_id' => 4,
                'name' => 'Microfono Trust',
                'slug' => Str::slug('Microfono Trust'),
            ],

            [
                'category_id' => 4,
                'name' => 'Microfono Blue Mic',
                'slug' => Str::slug('Microfono Blue Mic'),
            ],

            [
                'category_id' => 4,
                'name' => 'Microfono Shure',
                'slug' => Str::slug('Microfono Shure'),
            ],

            // Auriculares

            [
                'category_id' => 5,
                'name' => 'Auriculares HyperX',
                'slug' => Str::slug('Auriculares HyperX'),
                'color' => true,
                'size' => true
            ],

            [
                'category_id' => 5,
                'name' => 'Auricurales Astro',
                'slug' => Str::slug('Auriculares Astro'),
                'color' => true,
                'size' => true
            ],

            [
                'category_id' => 5,
                'name' => 'Auriculares Sony',
                'slug' => Str::slug('Auriculares Sony'),
            ],

            [
                'category_id' => 5,
                'name' => 'Auriculares Stellseries',
                'slug' => Str::slug('Auriculares Stellseries'),
            ],
            
        ];

        foreach ($subcategories as $subcategory)
        {
            Subcategory::factory(1)->create($subcategory);
        }
    }
}
