<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class HalamanLogin extends Component
{
    public $username, $password, $remember = false;

    #[\Livewire\Attributes\Layout('components.layouts.auth')]
    public function render()
    {
        return view('livewire.halaman-login');
    }

    public function login()
    {
        $result = Auth::attempt([
            'username' => $this->username,
            'password' => $this->password
        ], $this->remember);

        if (!$result) {
            // Logika penyimpanan data
            $this->dispatch('toast', 'Harap periksa kembali username dan password anda', 'error');

            return;
        }

        $user = Auth::user();

        if ($user->role == 'ADMIN') {
            return redirect()->route('filament.admin.pages.dashboard');
        } elseif ($user->role == 'USER') {
            return redirect()->route('home');
        }
    }
}
