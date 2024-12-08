<?php

namespace App\Livewire;

use App\Models\InformasiPembelajaran;
use Livewire\Component;

class HalamanKontenPembelajaran extends Component
{
    public InformasiPembelajaran $konten;

    public function mount($slug = null)
    {
        $this->konten = InformasiPembelajaran::where('slug', $slug)->first();
    }

    #[\Livewire\Attributes\Title('Halaman Konten Pembelajaran')]
    public function render()
    {
        return view('livewire.halaman-konten-pembelajaran');
    }
}
