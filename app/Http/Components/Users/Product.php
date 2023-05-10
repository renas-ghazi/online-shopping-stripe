<?php

namespace App\Http\Components\Users;

use Livewire\Component;
use App\Models\Product as Pro;
use App\Models\Order;
use Auth;
class Product extends Component{
    public $product , $getProductSingle;
    public function mount(){
        $this->getProductSingle = Pro::find($this->product);
    }
    public function addToCart($proID , $quan){
        $checklOrder  = Order::where('user_id' , Auth::user()->id)->where('status' , 0)->first();
        if ( $checklOrder ) {
            $orderID = $checklOrder->order_id;
        }
        else{
            $orderID = mt_rand(11111,99999);
        }
        Order::create([
            'user_id' => Auth::user()->id,
            'product_id' => $proID,
            'order_id' => $orderID,
            'quantity' => $quan,
            'status' => 0,
        ]);
        $this->emit('orderAdded');
    }
    public function render(){
        return view('components.users.product')-> extends('components.users.layouts.app');
    }
}
