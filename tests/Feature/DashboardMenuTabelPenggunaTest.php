<?php

namespace Tests\Feature;

use App\Filament\Resources\UserResource;
use App\Filament\Resources\UserResource\Pages\CreateUser;
use App\Filament\Resources\UserResource\Pages\EditUser;
use App\Models\User;
use Filament\Actions\DeleteAction;
use Filament\Facades\Filament;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class DashboardMenuTabelPenggunaTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        $this->actingAs(User::factory()->create([
            'username'      =>  'admin',
            'email'         =>  'admin@mail.io',
            'password'      =>  'password',
            'role'          =>  'ADMIN'
        ]));


        Filament::setCurrentPanel(Filament::getPanel('admin'));
    }

    /**
     *  @test
     *
     *  Metode test untuk memastikan pengguna dapat mengakses menu dashboard.
     */
    public function can_access_dashboard_menu()
    {
        // memastikan user sudah ter-autentkasi ( login )
        $this->assertAuthenticated();

        // memastikan user dapat mengakses menu dashboard
        $this->get(UserResource::getUrl('index'))->assertSuccessful();
    }

    /**
     *  @test
     *
     *  Metode test untuk membuat akun
     */
    public function can_create_user_account()
    {
        // memastikan user sudah ter-autentkasi ( login )
        $this->assertAuthenticated();

        // memastikan user dapat mengakses menu untuk membuat user
        $this->get(UserResource::getUrl('create'))->assertSuccessful();

        // generate fake file
        $file = \Illuminate\Http\UploadedFile::fake()->create('avatar_url.png', 100); // 100 KB

        // test membuat user
        Livewire::test(CreateUser::class)
            ->fillForm([
                'avatar_url'    =>  $file,
                'name'          =>  'John Doe',
                'username'      =>  'johndoe',
                'email'         =>  'johndoe@example.com',
                'password'      =>  'password',
                'status'        =>  'ACTIVE',
                'role'          =>  'ADMIN',
            ])
            ->call('create')
            ->assertHasNoFormErrors();

        // memastikan data berhasil disimpan
        $this->assertDatabaseHas(User::class, [
            'username' => 'johndoe',
        ]);
    }


    /**
     *  @test
     *
     *  Metode test untuk mengubah akun user
     */
    public function can_update_user_account()
    {
        // memastikan user sudah ter-autentkasi ( login )
        $this->assertAuthenticated();

        // mengunjungi halaman edit
        $this->get(UserResource::getUrl('create'))->assertSuccessful();

        // gemerate database baru untuk data user
        $user   =   User::factory()->create();

        // generate fake file
        $file = \Illuminate\Http\UploadedFile::fake()->create('avatar_url.png', 100); // 100 KB

        // test edit user
        Livewire::test(EditUser::class, [
            'record' => $user->getRouteKey()
        ])
            // pastikan form user sudah terisi dengan data yang di generate
            ->assertFormSet([
                'name'      =>  $user->name,
                'username'  =>  $user->username,
                'email'     =>  $user->email,
            ])

            // mengisi form dengan data baru
            ->fillForm([
                'avatar_url'    =>  $file,
                'name'          =>  'Abdi Nat',
                'username'      =>  'abdi_nat',
                'password'      =>  'password',
                'email'         =>  'cloudmyn46@gmail.com',
                'status'        =>  'ACTIVE',
                'role'          =>  'ADMIN'
            ])

            // memanggil metode save
            ->call('save')

            // memastikan tidak ada error pasa saat form submit
            ->assertHasNoFormErrors();


        // memastikan data user sudah terupdate
        expect($user->refresh())
            ->name->toBe('Abdi Nat')
            ->username->toBe('abdi_nat')
            ->email->toBe('cloudmyn46@gmail.com')
            ->status->toBe('ACTIVE')
            ->role->toBe('ADMIN');
    }


    /**
     *  @test
     *
     *  Metode untuk menghapus user account
     */
    public function can_deleet_user_account()
    {
        // memastikan user sudah ter-autentkasi ( login )
        $this->assertAuthenticated();

        // generate user baru
        $user   =   User::factory()->create();

        // mengunjungi halaman tabel user
        $this->get(UserResource::getUrl('index'))->assertSuccessful();

        // melakukan simulasi mengunjungi halaman user dengan data user yang ingin dihapus
        Livewire::test(EditUser::class, [
            'record'    =>  $user->getRouteKey(),
        ])
            // memanggil metode untuk menghapus
            ->callAction(DeleteAction::class);

        // memastikan user sudah terhapus
        $this->assertModelMissing($user);
    }
}
