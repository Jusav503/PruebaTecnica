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
            'slug' => Str::slug('Moviles y smartphones')
        ]);
        
        Subcategory::create([
            'category_id' => 1,
            'name' => 'Accesorios para moviles',
            'slug' => Str::slug('Accesorios para moviles'),
        ]);

        Subcategory::create([
            'category_id' => 1,
            'name' => 'Smartwatches',
            'slug' => Str::slug('Smartwatches'),
        ]);

        //TV, audio y video
        Subcategory::create([
            'category_id' => 2,
            'name' => 'Tv y audio',
            'slug' => Str::slug('Tv y audio'),
        ]);

        Subcategory::create([
            'category_id' => 2,
            'name' => 'Audio',
            'slug' => Str::slug('Audio'),
        ]);

        Subcategory::create([
            'category_id' => 2,
            'name' => 'Audio para coches',
            'slug' => Str::slug('Audio para coches'),
        ]);

        //Consola y videojuegos
        Subcategory::create([
            'category_id' => 3,
            'name' => 'Xbox',
            'slug' => Str::slug('Xbox'),
        ]);

        Subcategory::create([
            'category_id' => 3,
            'name' => 'Play Station',
            'slug' => Str::slug('Play Station'),
        ]);

        Subcategory::create([
            'category_id' => 3,
            'name' => 'Videojuegos para pc',
            'slug' => Str::slug('Videojuegos para pc'),
        ]);

        Subcategory::create([
            'category_id' => 3,
            'name' => 'Nintendo',
            'slug' => Str::slug('Nintendo'),
        ]);

        //Tecnologia
        Subcategory::create([
            'category_id' => 4,
            'name' => 'Cargadores',
            'slug' => Str::slug('Cargadores'),
        ]);
        Subcategory::create([
            'category_id' => 4,
            'name' => 'Almacenamiento',
            'slug' => Str::slug('Almacenamiento'),
        ]);
        Subcategory::create([
            'category_id' => 4,
            'name' => 'Teclados y ratones',
            'slug' => Str::slug('Teclados y ratones'),
        ]);
        Subcategory::create([
            'category_id' => 4,
            'name' => 'Adaptadores',
            'slug' => Str::slug('Adaptadores'),
        ]);

    }
}
