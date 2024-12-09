<?php

namespace App\Livewire;

use App\Models\VideoPembelajaran;
use Livewire\Component;

class HalamanVideoPembelajaran extends Component
{
    public VideoPembelajaran $video;

    public function mount($slug)
    {
        $this->video = VideoPembelajaran::where('slug', $slug)->first();
    }

    #[\Livewire\Attributes\Title('Halaman Video Pembelajaran')]
    public function render()
    {
        return view('livewire.halaman-video-pembelajaran');
    }
}
