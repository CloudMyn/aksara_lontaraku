<?php

namespace Tests\Feature;

use App\Livewire\HalamanLogin;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;

class AuthLoginTest extends TestCase
{
    use RefreshDatabase; // Untuk mereset database setelah setiap test

    /**
     * Test bahwa halaman login dapat diakses.
     *
     * @return void
     */
    public function test_login_page_is_accessible()
    {
        $response = $this->get('/login');

        $response->assertStatus(200); // Pastikan halaman login mengembalikan status 200
        $response->assertSeeHtml('Halaman Login'); // cek jika ada nama halaman
    }

    /**
     * Test bahwa user dapat login dengan credentials yang valid.
     *
     * @return void
     */
    public function test_user_can_login_with_valid_credentials()
    {
        $username   =   'siswa';
        $password   =   'password';

        // Buat user dummy
        User::factory()->create([
            'username' => $username,
            'password' => bcrypt($password),
            'role' => 'USER'
        ]);

        Livewire::test(HalamanLogin::class)
            ->set('username', $username)
            ->set('password', $password)
            ->runAction('login')
            ->assertSet('username', $username)
            ->assertSet('password', $password)
            ->assertRedirectToRoute('home');
    }

    /**
     * Test bahwa user tidak dapat login dengan kredensial yang tidak valid.
     *
     * Test ini memastikan bahwa ketika user mencoba login dengan nama
     * pengguna dan kata sandi yang tidak valid, aksi login gagal, kredensial
     * tetap disetel ke nilai yang tidak valid, dan pesan toast error dikirimkan.
     */
    public function test_user_cannot_login_with_invalid_credentials()
    {

        User::factory()->create();

        Livewire::test(HalamanLogin::class)
            ->set('username', 'invalid')
            ->set('password', 'invalid')
            ->runAction('login')
            ->assertSet('username', 'invalid')
            ->assertSet('password', 'invalid')
            ->assertDispatched('toast', 'Harap periksa kembali username dan password anda', 'error');
    }
}
