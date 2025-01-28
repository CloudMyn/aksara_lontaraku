<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PDFEksporter extends Controller
{
    public function exportPenilaianPDF()
    {
        $datas = \App\Models\Evaluasi::all();

        $formated_table =   [];

        $index  =   1;
        foreach ($datas as $model) {
            $formated_table[] =   [
                $index,
                $model->user->name,
                $model->score,
                str($model->video_pembelajaran?->judul ?? '-')->limit(30),
            ];

            $index++;
        }

        $data   =   [
            'title'     =>  'Laporan Evaluasi Siswa',
            'content'   =>  [],
            'tables'    =>  [
                'Penilaian Praktikan'    =>  [
                    "kolom"     =>  ['No', 'Nama Lengkap', 'Nilai', 'Video Pembelajaran'],
                    "data"      =>  $formated_table,
                ]
            ]
        ];

        $pdf = Pdf::loadView('report.index', $data)
            ->setPaper('a4', 'portrait');

        return $pdf->stream();
    }
}
