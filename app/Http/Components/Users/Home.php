<?php

namespace App\Http\Components\Users;

use Livewire\Component;
use App\Models\Product;

class Home extends Component{
    public $search ;
    public function mount(){

    }
    public function render(){
        return view('components.users.home' , [
            'products' => Product::all(),
        'getData' => Product::where('name',$this->search)->get(),

        ]) -> extends('components.users.layouts.app');
    }
}
