<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PDFEksporter extends Controller
{
    public function exportPenilaianPDF()
    {
        // perulangan untuk menampilkan daftar video pembelajaran
        $daftar_video_pembelajaran  =   \App\Models\VideoPembelajaran::all();

        $tables = [];

        foreach ($daftar_video_pembelajaran as $video_pembelajaran) {
            $data_evaluasi = \App\Models\Evaluasi::where('video_pembelajaran_id', $video_pembelajaran->id)->get();

            if(count($data_evaluasi) === 0) {
                continue;
            }

            $data = [];

            $index  =   1;
            foreach ($data_evaluasi as $evaluasi) {
                $data[] =   [
                    $index,
                    $evaluasi->user->name,
                    $evaluasi->user?->kelas ?? '-',
                    $evaluasi->score,
                ];

                $index++;
            }

            $tabel_video_pembelajaran   =   [
                'kolom' =>  ['No', 'Nama Siswa', 'Kelas', 'Nilai'],
                'data'  =>  $data,
            ];

            $tables[$video_pembelajaran->judul]   =   $tabel_video_pembelajaran;

        }


        $daftar_informasi_pembelajaran  =   \App\Models\InformasiPembelajaran::all();


        foreach ($daftar_informasi_pembelajaran as $informasi_pembelajaran) {
            $data_evaluasi = \App\Models\Evaluasi::where('informasi_pembelajaran_id', $informasi_pembelajaran->id)->get();

            if(count($data_evaluasi) === 0) {
                continue;
            }

            $data = [];

            $index  =   1;
            foreach ($data_evaluasi as $evaluasi) {
                $data[] =   [
                    $index,
                    $evaluasi->user->name,
                    $evaluasi->user?->kelas ?? '-',
                    $evaluasi->score,
                ];

                $index++;
            }

            $tabel_informasi_pembelajaran   =   [
                'kolom' =>  ['No', 'Nama Siswa', 'Kelas', 'Nilai'],
                'data'  =>  $data,
            ];

            $tables[$informasi_pembelajaran->judul]   =   $tabel_informasi_pembelajaran;

        }

        $data   =   [
            'title'     =>  'Laporan Evaluasi Siswa',
            'content'   =>  [],
            'tables'    =>  $tables,
        ];

        $pdf = Pdf::loadView('report.index', $data)
            ->setPaper('a4', 'portrait');

        return $pdf->stream();
    }
}
