<?php

namespace App\Livewire;

use App\Models\MateriPembelajaran;
use Livewire\Component;

class HalamanMateriPembelajaran extends Component
{
    public MateriPembelajaran $materi;

    public function mount($slug = null)
    {
        $this->materi = MateriPembelajaran::where('slug', $slug)->first();
    }

    #[\Livewire\Attributes\Title('Halaman Materi Pembelajaran')]
    public function render()
    {
        $data['pelajaran'] = $this->materi->informasi_pembelajaran;

        return view('livewire.halaman-materi-pembelajaran', $data);
    }
}
