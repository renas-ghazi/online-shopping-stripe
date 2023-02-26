<?php

namespace App\Http\Components\Users;

use Livewire\Component;
use App\Models\Product as Pro;

class Product extends Component{
    public $product , $getProductSingle;
    public function mount(){
        $this->getProductSingle = Pro::find($this->product);
    }
    public function render(){
        return view('components.users.product')-> extends('components.users.layouts.app');
    }
}
