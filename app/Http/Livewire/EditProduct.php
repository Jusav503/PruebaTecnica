<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Image;
use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Illuminate\Support\Str;

class EditProduct extends Component
{
    public $product, $categories, $subcategories, $slug;
    public $category_id;

    protected $rules = [ 
        'category_id' => 'required',
        'product.subcategory_id' => 'required',
        'product.name' => 'required',
        'slug' => 'required|unique:products,slug',
        'product.description' => 'required',
        'product.price' => 'required',
    ];

    protected $listeners = ['refreshProduct', 'deleteProduct'];

    public function mount(Product $product){
        $this->product = $product;
        $this->categories = Category::all();
        $this->category_id = $product->subcategory->category->id;
        $this->subcategories = Subcategory::where('category_id', $this->category_id)->get();
        $this->slug = $this->product->slug;
    }

    public function refreshProduct(){
        $this->product = $this->product->fresh();
    }

    public function updatedProductName($value){
        $this->slug = Str::slug($value);
    }

    public function updatedCategoryId($value){
        $this->subcategories = Subcategory::where('category_id', $value)->get(); 
        $this->product->subcategory_id = "";
    }

    // Propiedad computada
    public function getSubcategoryProperty(){
        return Subcategory::find($this->product->subcategory_id);
    }

    public function save(){
        $rules = $this->rules;
        $rules['slug'] = 'required|unique:products,slug,' . $this->product->id;

        $this->validate($rules);
        $this->product->slug = $this->slug;
        $this->product->save();

        $this->emit('saved');
    }

    // Eliminar imagenes en la vista editar
    public function deleteImage(Image $image){
        Storage::delete([$image->url]);

        $image->delete();
        $this->product = $this->product->fresh();
    }

    //Eliminar imagenes de la base de datos 
    public function deleteProduct(){
        $images = $this->product->images;

        foreach ($images as $image){
            Storage::delete($image->url);
            $image->delete();
        }
        $this->product->delete();
        return redirect()->route('admin.index');
    }

    public function render(){
        return view('livewire.edit-product')->layout('layouts.app');
    }
}
