<?php

namespace Tests\Feature;

use App\Filament\Resources\KuisSoalResource;
use App\Models\KuisSoal;
use App\Models\User;
use App\Models\VideoPembelajaran;
use Filament\Facades\Filament;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class DashboardMenuKuisTest extends TestCase
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

    /** @test */
    public function can_create_kuis_soal()
    {
        $this->assertAuthenticated();

        // Generate data dummy
        $data = KuisSoal::factory()->makeOne();
        $video = VideoPembelajaran::factory()->create();

        Livewire::test(KuisSoalResource\Pages\CreateKuisSoal::class)
            ->fillForm([
                'soal' => $data->soal,
                'video_pembelajaran_id' => $video->id,
                'pilihan_a' => $data->pilihan_a,
                'pilihan_b' => $data->pilihan_b,
                'pilihan_c' => $data->pilihan_c,
                'pilihan_d' => $data->pilihan_d,
                'jawaban' => $data->jawaban,
            ])
            ->call('create')
            ->assertHasNoFormErrors();

        $this->assertDatabaseHas(KuisSoal::class, [
            'soal' => $data->soal,
            'video_pembelajaran_id' => $video->id,
            'jawaban' => $data->jawaban,
        ]);
    }

    /** @test */
    public function can_update_kuis_soal()
    {
        $this->assertAuthenticated();

        // Membuat data awal
        $kuis = KuisSoal::factory()->create();
        $newVideo = VideoPembelajaran::factory()->create();

        Livewire::test(KuisSoalResource\Pages\EditKuisSoal::class, [
            'record' => $kuis->getRouteKey()
        ])
            ->fillForm([
                'soal' => 'Pertanyaan yang diupdate?',
                'video_pembelajaran_id' => $newVideo->id,
                'pilihan_a' => 'Update A',
                'pilihan_b' => 'Update B',
                'pilihan_c' => 'Update C',
                'pilihan_d' => 'Update D',
                'jawaban' => 'c',
            ])
            ->call('save')
            ->assertHasNoFormErrors();

        $kuis->refresh();
        $this->assertEquals('Pertanyaan yang diupdate?', $kuis->soal);
        $this->assertEquals('c', $kuis->jawaban);
        $this->assertEquals($newVideo->id, $kuis->video_pembelajaran_id);
    }

    /** @test */
    public function can_delete_kuis_soal()
    {
        $this->assertAuthenticated();

        $kuis = KuisSoal::factory()->create();

        Livewire::test(KuisSoalResource\Pages\EditKuisSoal::class, [
            'record' => $kuis->getRouteKey()
        ])
            ->callAction(\Filament\Actions\DeleteAction::class);

        $this->assertModelMissing($kuis);
    }
}
