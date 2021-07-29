<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowProductos extends Component
{
    public $nombre;
    public function render()
    {
        return view('livewire.show-productos');
    }
}
