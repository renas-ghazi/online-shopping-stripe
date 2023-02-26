<?php

namespace App\Http\Components\Users;

use Livewire\Component;
use Auth;
class Navbar extends Component{
    public function logout(){
        Auth::logout();
    }
    public function render(){
        return view('components.users.navbar');
    }
}
