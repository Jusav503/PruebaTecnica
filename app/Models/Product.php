<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'update_at'];

    //Relación una a muchos inversa
    public function subcategory(){
        return $this->belongsTo(Subcategory::class);
    }

    //Relación uno a muchos polimorfica
    public function images(){
        return $this->morphMany(Image::class, "imageable"); //Primer parametro establezco donde quiero que suceda y el segundo es la funcion  
    }
    public function getRouteKeyName(){
        return 'slug';
    }
}
