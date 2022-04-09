<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        Category::create([
            'name' => 'Moviles',
            'slug' => Str::slug('Moviles'),
            'image' => "https://newstextarea.com/wp-content/uploads/2022/02/Technology-will-strengthen-Turkeys-socio-economic-growth.jpg"
        ]);

        Category::create([
            'name' => 'TV, audio y video',
            'slug' => Str::slug('TV, audio y video'),
            'image' => "https://newstextarea.com/wp-content/uploads/2022/02/Technology-will-strengthen-Turkeys-socio-economic-growth.jpg"
        ]);

        Category::create([
            'name' => 'Consolas y videojuegos',
            'slug' => Str::slug('Consolas y videojuegos'),
            'image' => "https://newstextarea.com/wp-content/uploads/2022/02/Technology-will-strengthen-Turkeys-socio-economic-growth.jpg"
        ]);

        Category::create([
            'name' => 'Tecnología',
            'slug' => Str::slug('Tecnología'),
            'image' => "https://newstextarea.com/wp-content/uploads/2022/02/Technology-will-strengthen-Turkeys-socio-economic-growth.jpg"
        ]);
    }
}
