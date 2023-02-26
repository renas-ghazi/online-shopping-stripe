<?php

namespace App\Http\Components\Admin;

use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        return view('components.admin.dashboard') -> extends('components.admin.layouts.app');
    }
}
