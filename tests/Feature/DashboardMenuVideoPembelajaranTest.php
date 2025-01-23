<?php

namespace Tests\Feature;

use App\Filament\Resources\VideoPembelajaranResource;
use App\Filament\Resources\VideoPembelajaranResource\Pages\CreateVideoPembelajaran;
use App\Filament\Resources\VideoPembelajaranResource\Pages\EditVideoPembelajaran;
use App\Models\User;
use App\Models\VideoPembelajaran;
use Filament\Actions\DeleteAction;
use Filament\Facades\Filament;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class DashboardMenuVideoPembelajaranTest extends TestCase
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
        $this->get(VideoPembelajaranResource::getUrl('index'))->assertSuccessful();
    }

    /**
     *  @test
     *
     *  Metode test untuk membuat akun
     */
    public function can_create_video_pembelajaran()
    {
        // memastikan user sudah ter-autentkasi ( login )
        $this->assertAuthenticated();

        // memastikan user dapat mengakses menu untuk membuat user
        $this->get(VideoPembelajaranResource::getUrl('create'))->assertSuccessful();

        $fake_data  =   VideoPembelajaran::factory()->make();

        // generate fake file
        $file = \Illuminate\Http\UploadedFile::fake()->create('avatar_url.png', 100); // 100 KB

        $data = $fake_data->toArray();

        $data['gambar'] = $file;

        // test membuat user
        Livewire::test(CreateVideoPembelajaran::class)
            ->fillForm($data)
            ->call('create');

        // memastikan data berhasil disimpan
        $this->assertDatabaseHas(VideoPembelajaran::class, [
            'judul' => $fake_data->judul,
        ]);
    }

    /**
     *  @test
     *
     *  Summary of can_update_video_pembelajaran
     */
    public function can_update_video_pembelajaran()
    {
        // memastikan user sudah ter-autentikasi (login)
        $this->assertAuthenticated();

        // generate video pembelajaran baru
        $video = VideoPembelajaran::factory()->create();

        // mengunjungi halaman edit
        $this->get(VideoPembelajaranResource::getUrl('edit', ['record' => $video->id]))->assertSuccessful();

        // test edit video pembelajaran
        Livewire::test(EditVideoPembelajaran::class, [
            'record' => $video->id
        ])
            // pastikan form video pembelajaran sudah terisi dengan data yang di-generate
            ->assertFormSet([
                'judul' => $video->judul,
                'slug' => $video->slug,
                'deskripsi' => $video->deskripsi,
                'durasi' => $video->durasi,
                'video' => $video->video,
            ])

            // mengisi form dengan data baru
            ->fillForm([
                'judul' => 'Judul Baru',
                'gambar' => \Illuminate\Http\UploadedFile::fake()->create('avatar_url.png', 100),
                'slug' => 'judul-baru',
                'deskripsi' => 'Deskripsi baru',
                'durasi' => '10 menit',
                'video' => 'url',
            ])

            // memanggil metode save
            ->call('save')

            // memastikan tidak ada error pada saat form submit
            ->assertHasNoFormErrors();

        // memastikan data video pembelajaran sudah terupdate
        expect($video->refresh())
            ->judul->toBe('Judul Baru')
            ->slug->toBe('judul-baru')
            ->deskripsi->toBe('Deskripsi baru')
            ->durasi->toBe('10 menit')
            ->video->toBe('url');
    }


    /**
     *  @test
     *
     *  @return void
     */
    public function can_delete_video_pembelajaran()
    {
        // memastikan user sudah ter-autentikasi (login)
        $this->assertAuthenticated();

        // generate video pembelajaran baru
        $video = VideoPembelajaran::factory()->create();

        // mengunjungi halaman tabel video pembelajaran
        $this->get(VideoPembelajaranResource::getUrl('index'))->assertSuccessful();

        // melakukan simulasi mengunjungi halaman video pembelajaran dengan data yang ingin dihapus
        Livewire::test(EditVideoPembelajaran::class, [
            'record' => $video->id,
        ])
            // memanggil metode untuk menghapus
            ->callAction(DeleteAction::class);

        // memastikan video pembelajaran sudah terhapus
        $this->assertModelMissing($video);
    }
}
