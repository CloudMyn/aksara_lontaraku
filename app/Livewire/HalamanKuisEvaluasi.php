<?php

namespace App\Livewire;

use App\Models\Evaluasi;
use Livewire\Attributes\Url;
use App\Models\KuisSoal;
use Livewire\Component;

class HalamanKuisEvaluasi extends Component
{
    public KuisSoal $kuis;

    public $jawaban;

    public $is_finish = false;

    public $total_nilai =   0;

    public $semua_jawaban = [];

    #[Url]
    public $pertanyaan_count = 0;

    public function mount($video_id)
    {
        $soals = KuisSoal::where('video_pembelajaran_id', $video_id)->orderBy('created_at', 'asc')->get();

        $this->kuis = $soals[0];

        $this->pertanyaan_count = 1;
    }

    #[\Livewire\Attributes\Title('Halaman Kuis')]
    public function render()
    {
        return view('livewire.halaman-kuis-evaluasi');
    }

    public function next()
    {
        $this->semua_jawaban[$this->kuis->id] = $this->jawaban ?? '-';

        $soals = KuisSoal::where('video_pembelajaran_id', $this->kuis->video_pembelajaran_id)->orderBy('created_at', 'asc')->get();

        if ($this->pertanyaan_count < count($soals)) {
            $this->kuis = $soals[$this->pertanyaan_count];
            $this->pertanyaan_count = $this->pertanyaan_count + 1;
        } else {

            $this->finish();
        }
    }

    public function prev()
    {
        if ($this->pertanyaan_count > 1) {
            $this->pertanyaan_count = $this->pertanyaan_count - 1;
            $this->kuis = KuisSoal::where('video_pembelajaran_id', $this->kuis->video_pembelajaran_id)->orderBy('created_at', 'asc')->get()[$this->pertanyaan_count - 1];
        } else {
            $this->redirect(route('video-pembelajaran', ['slug' => $this->kuis->video_pembelajaran->slug]));
        }
    }

    private function finish()
    {

        $jawaban_benar  =   0;
        $jumlah_pertanyaan = count($this->semua_jawaban);

        foreach ($this->semua_jawaban as $id_soal => $jawaban) {
            $kuis = KuisSoal::find($id_soal);

            if ($kuis->jawaban == $jawaban) {
                $jawaban_benar++;
            }
        }

        $persentase_jawaban_benar = ($jawaban_benar / $jumlah_pertanyaan) * 100;

        $this->total_nilai = intval($persentase_jawaban_benar);

        $this->is_finish = true;

        try {

            Evaluasi::where('user_id', auth()->user()->id)
                ->where('kuis_soal_id', $this->kuis->id)->delete();
        } catch (\Throwable $th) {
            //throw $th;
        }

        Evaluasi::create([
            'user_id' => auth()->user()->id,
            'score' => $this->total_nilai,
            'video_pembelajaran_id' => $this->kuis->video_pembelajaran_id,
            'kuis_soal_id' => $this->kuis->id,
            'informasi_pembelajaran_id' => $this->kuis->informasi_pembelajaran_id,
        ]);
    }
}
