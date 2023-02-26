<?php

namespace App\Http\Components\Users;

use Livewire\Component;
use App\Models\User;
use Auth;
class Register extends Component{
    public
    $firstName,
    $lastName,
    $email,
    $password,
    $cPass,
    $register;
    public function register(){
        $this->validate([
        'firstName' => 'required',
        'lastName' => 'required',
        'email' => 'required',
        'password' => 'required',
        'cPass' => 'required',
        ]);
        if ( $this->password === $this->cPass ) {
            $createAcount = User::create([
                'name' => $this->firstName.$this->lastName,
                'email' => $this->email,
                'password' => \Hash::make($this->password)
            ]);
            $login = Auth::loginUsingId($createAcount->id);
            return  redirect('/');
        }
    }
    public function render(){
        return view('components.users.register') -> extends('components.users.layouts.app');
    }
}
