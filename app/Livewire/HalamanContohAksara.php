<?php

namespace App\Livewire;

use Livewire\Component;

class HalamanContohAksara extends Component
{


    #[\Livewire\Attributes\Title('Halaman Contoh Aksara Lontara')]
    public function render()
    {
        $tanda_baca = \App\Models\AksaraLontara::where('jenis',  'tanda_baca')->orderBy('urutan', 'asc')->get();
        $contoh_tanda_baca = \App\Models\AksaraLontara::where('jenis',  'contoh_tanda_baca')->orderBy('urutan', 'asc')->get();

        return view('livewire.halaman-contoh-aksara', [
            'tanda_baca' => $tanda_baca,
            'contoh_tanda_baca' => $contoh_tanda_baca
        ]);
    }
}
