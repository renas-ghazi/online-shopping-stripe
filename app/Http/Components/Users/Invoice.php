<?php

namespace App\Http\Components\Users;

use Livewire\Component;
use App\Models\Order;
use Auth;
class Invoice extends Component{
    public $order_id , $getInv,$sum = 0;
    public function mount(){
        $this->getInv = Order::with(['product'])->where('order_id' , $this->order_id)
        -> where('user_id' , Auth::user()->id)
        -> get();
    }
    public function render(){
        return view('components.users.invoice')-> extends('components.users.layouts.app');
    }
}
