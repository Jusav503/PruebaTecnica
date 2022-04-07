<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'image'];

    //Una categoria puede tener muchas subcategories
    public function subcategories(){
        return $this->hasMany(Subcategory::class); //Relación uno a muchos
    }

    //Relacion entre categories y products atravez de otra relación en este caso Subcategory
    public function products(){
        return $this->hasManyThrough(Product::class, Subcategory::class); //Relación muchos a muchos
    }

    // Url friendly
    public function getRouteKeyName(){
        return 'slug';
    }
}
