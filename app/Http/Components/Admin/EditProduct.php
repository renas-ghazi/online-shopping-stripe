<?php

namespace App\Http\Components\Admin;

use Livewire\Component;
use App\Models\Product;
use Livewire\WithFileUploads;


class EditProduct extends Component{
    use WithFileUploads;

    public $product , $getProduct , $price , $image , $name , $file , $category,
    $edit_name,
    $edit_image,
    $edit_price,
    $edit_category
    ;
    public function mount(){
        if ( $this->product ) {
            $this->getProduct = Product::find($this->product);
            $this->edit_name = $this->getProduct->name;
            $this->edit_image = $this->getProduct->image;
            $this->edit_price = $this->getProduct->price;
            $this->edit_category = $this->getProduct->category;
        }
    }
    public function update(){
        $this->validate([
            'edit_name' => 'required',
            'edit_price' => 'required',
            'edit_category' => 'required',
        ]);
        if ( $this->file ) {
            $newFilename = time().'.'.$this->file->extension();
            $this->file->storeAs('product' , $newFilename , 'custom');
        }
        else{
            $newFilename = $this->edit_image;
        }
       $this->getProduct->update([
            'name' => $this->edit_name,
            'price' => $this->edit_price,
            'category' => $this->edit_category,
            'image' => $newFilename
        ]);
        session()->flash('update', 'Updated  Successfully');
        return redirect('admin/addproduct');
    }
    public function render(){
        return view('components.admin.edit-product')-> extends('components.admin.layouts.app');
    }
}
