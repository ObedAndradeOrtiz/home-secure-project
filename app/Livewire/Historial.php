<?php

namespace App\Livewire;

use Livewire\Component;

class Historial extends Component
{
    public $presionado=2;
    public function render()
    {
        return view('livewire.historial');
    }
}
