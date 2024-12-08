<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

class HalamanPembelajaran extends Component
{

    #[Title('Halaman Pembelajaran')]
    public function render()
    {
        $data['materi'] = \App\Models\MateriPembelajaran::orderBy('created_at', 'desc')->get();

        return view('livewire.halaman-pembelajaran', $data);
    }
}
