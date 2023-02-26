<?php

namespace App\Http\Components\Users;

use Livewire\Component;
use Auth;
class Login extends Component{
    public $email , $password;
    public function login(){
        if ( Auth::attempt(['email' => $this->email , 'password' => $this->password]) ) {
            return redirect()->route('home');
        }
        else {
            session()->flash('error' , 'Email or Password is incorrect');

        }
    }
    public function render(){
        return view('components.users.login') -> extends('components.users.layouts.app');
    }
}
