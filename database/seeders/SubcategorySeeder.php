<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        Subcategory::create([
            'category_id' => 1,
            'name' => 'Moviles y smartphones',
            'category_name' => "Moviles",
            'slug' => Str::slug('Moviles y smartphones')
        ]);

        Subcategory::create([
            'category_id' => 1,
            'name' => 'Accesorios para moviles',
            'category_name' => "Moviles",
            'slug' => Str::slug('Accesorios para moviles'),
        ]);

        Subcategory::create([
            'category_id' => 1,
            'name' => 'Smartwatches',
            'category_name' => "Moviles",
            'slug' => Str::slug('Smartwatches'),
        ]);

        //TV, audio y video
        Subcategory::create([
            'category_id' => 2,
            'name' => 'Tv y audio',
            'category_name' => "TV, audio y video",
            'slug' => Str::slug('Tv y audio'),
        ]);

        Subcategory::create([
            'category_id' => 2,
            'name' => 'Audio',
            'category_name' => "TV, audio y video",
            'slug' => Str::slug('Audio'),
        ]);

        Subcategory::create([
            'category_id' => 2,
            'name' => 'Audio para coches',
            'category_name' => "TV, audio y video",
            'slug' => Str::slug('Audio para coches'),
        ]);

        //Consola y videojuegos
        Subcategory::create([
            'category_id' => 3,
            'name' => 'Xbox',
            'category_name' => "Consolas y video juegos",
            'slug' => Str::slug('Xbox'),
        ]);

        Subcategory::create([
            'category_id' => 3,
            'name' => 'Play Station',
            'category_name' => "Consolas y video juegos",
            'slug' => Str::slug('Play Station'),
        ]);

        Subcategory::create([
            'category_id' => 3,
            'category_name' => "Consolas y video juegos",
            'name' => 'Videojuegos para pc',
            'slug' => Str::slug('Videojuegos para pc'),
        ]);

        Subcategory::create([
            'category_id' => 3,
            'category_name' => "Consolas y video juegos",
            'name' => 'Nintendo',
            'slug' => Str::slug('Nintendo'),
        ]);

        //Tecnologia
        Subcategory::create([
            'category_id' => 4,
            'name' => 'Cargadores',
            'category_name' => "Tecnología",
            'slug' => Str::slug('Cargadores'),
        ]);
        Subcategory::create([
            'category_id' => 4,
            'name' => 'Almacenamiento',
            'category_name' => "Tecnología",
            'slug' => Str::slug('Almacenamiento'),
        ]);
        Subcategory::create([
            'category_id' => 4,
            'name' => 'Teclados y ratones',
            'category_name' => "Tecnología",
            'slug' => Str::slug('Teclados y ratones'),
        ]);
        Subcategory::create([
            'category_id' => 4,
            'name' => 'Adaptadores',
            'category_name' => "Tecnología",
            'slug' => Str::slug('Adaptadores'),
        ]);
    }
}
