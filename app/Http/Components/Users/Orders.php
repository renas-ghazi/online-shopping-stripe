<?php

namespace App\Http\Components\Users;

use Livewire\Component;
use App\Models\Invoice;
use Auth;
class Orders extends Component{
    public function render(){
        return view('components.users.orders' , [
            'getInvoices' => Invoice::where('user_id' , Auth::user()->id)->get(),

        ])-> extends('components.users.layouts.app');
    }
}
