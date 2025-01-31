<?php

namespace App\Livewire;

use Livewire\Component;

class HalamanTabelAksara extends Component
{

    #[\Livewire\Attributes\Title('Halaman Tabel Aksara')]
    public function render()
    {
        $aksara_data = \App\Models\AksaraLontara::where('jenis', 'huruf')->orderBy('urutan', 'asc')->get();

        return view('livewire.halaman-tabel-aksara', compact('aksara_data'));
    }
}
