<?php

namespace App\Livewire;

use Livewire\Component;

class PanelInicial extends Component
{
    public $presionado=0;
    public function render()
    {
        return view('livewire.panel-inicial');
    }
    public function cambiarPresionado($numero){
        $this->presionado=$numero;
    }
}
