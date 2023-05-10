<?php

namespace App\Http\Components\Users;

use Livewire\Component;
use App\Models\Order;
use Auth;
class Cart extends Component{
    public $sum = 0;
    protected $listeners = ['orderAdded' => '$refresh'];
    public function addFromCart( $id ){
        Order::findOrFail($id)->increment('quantity');

    }
    public function deLromCart( $id ){
        Order::findOrFail($id)->decrement('quantity');
    }
    public function render(){
        return view('components.users.cart' , [
            'counterOrder' => Order::where('status' , 0)->where('user_id' , Auth::user()->id)->get(),
            'getOrder' => Order::with(['product'])->where('status' , 0)->where('user_id' , Auth::user()->id)->get(),
        ]);
    }
}
