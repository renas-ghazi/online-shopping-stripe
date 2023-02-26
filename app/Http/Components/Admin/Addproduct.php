<?php

namespace App\Http\Components\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Product;
class Addproduct extends Component{
    use WithFileUploads;
    public $name , $price , $category, $imageFile;
    public function addProduct(){
        $this->validate([
            'name' => 'required',
            'price' => 'required',
            'category' => 'required',
            'imageFile' => 'required'
        ]);
        $newFilename = time().'.'.$this->imageFile->extension();
        $this->imageFile->storeAs('product' , $newFilename , 'custom');
        $create = Product::create([
            'name' => $this->name,
            'price' => $this->price,
            'category' => $this->category,
            'image' => $newFilename
        ]);
        $this->reset();
        session()->flash('success', 'Product Addes Successfully');
    }
    public function delete( Product $deleteID ){
        $deleteID->delete();
    }
    public function render(){
        return view('components.admin.addproduct' , [
            'allProduct' => Product::all(),
        ])-> extends('components.admin.layouts.app');
    }
}
