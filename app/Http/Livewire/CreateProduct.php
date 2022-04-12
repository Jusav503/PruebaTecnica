<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use App\Models\Subcategory;
use Livewire\Component;
use Illuminate\Support\Str;

class CreateProduct extends Component
{
    public $categories, $subcategories = [];
    public $category_id = "", $subcategory_id = "";
    public $name, $slug, $description, $price;

    protected $rules = [
        'category_id' => 'required',
        'subcategory_id' => 'required',
        'name' => 'required',
        'price' => 'required',
        'description' => 'required',
        'slug' => 'required|unique:products',
    ];

    public function updatedCategoryId($value){
        $this->subcategories = Subcategory::where('category_id', $value)->get(); 
        $this->reset(['subcategory_id']);
    }

    public function updatedName($value){
        $this->slug = Str::slug($value);
    }

    // Propiedad computada
    public function getSubcategoryProperty(){
        return Subcategory::find($this->subcategory_id);
    }

    public function mount(){
        $this->categories = Category::all();
    }

    public function save(){
        $rules = $this->rules;
        $this->validate($rules);

        $product = new Product();

        $product->name = $this->name;
        $product->slug = $this->slug;
        $product->price = $this->price;
        $product->description = $this->description;
        $product->subcategory_id = $this->subcategory_id;
        $product->save();
        return redirect()->route('products.edit', $product);
    }

    public function render(){
        return view('livewire.create-product')->layout('layouts.app');
    }
}
