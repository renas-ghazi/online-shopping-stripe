<?php

namespace App\Http\Components\Users;

use Livewire\Component;
use App\Models\Product;

class Home extends Component{
    public function render(){
        return view('components.users.home' , [
            'products' => Product::all(),
        ]) -> extends('components.users.layouts.app');
    }
}
