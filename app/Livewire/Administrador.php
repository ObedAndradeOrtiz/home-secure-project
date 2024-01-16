<?php

namespace App\Livewire;

use Livewire\Component;

class Administrador extends Component
{
    public $presionado=1;
    public function render()
    {
        return view('livewire.administrador');
    }
}
