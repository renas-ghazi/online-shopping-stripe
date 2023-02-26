<?php

namespace App\Http\Components\Admin;

use Livewire\Component;
use Auth;
class Login extends Component{
    public $email , $password;
    public function login(){
        $this->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        if ( Auth::guard('admin')->attempt(['email' => $this->email , 'password' => $this->password]) ) {
            return redirect()->route('admin.dashboard');
        }
        else {
            session()->flash('error' , 'Email or Password is incorrect');
        }
    }
    public function render(){
        return view('components.admin.login')-> extends('components.admin.layouts.app');
    }
}
