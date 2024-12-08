<?php

namespace App\Livewire;

use Livewire\Component;

class HomePage extends Component
{

    #[\Livewire\Attributes\Title('Halaman Utama')]
    public function render()
    {
        return view('livewire.home-page');
    }
}
