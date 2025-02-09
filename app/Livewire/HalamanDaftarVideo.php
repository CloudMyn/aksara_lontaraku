<?php

namespace App\Livewire;

use Livewire\Component;

class HalamanDaftarVideo extends Component
{
    #[\Livewire\Attributes\Title('Video Pembelajaran')]
    public function render()
    {
        $videos = \App\Models\VideoPembelajaran::orderBy('created_at', 'desc')->get();

        return view('livewire.halaman-daftar-video', compact('videos'));
    }
}
