<?php

use App\Livewire\HalamanDaftarVideo;
use App\Livewire\HalamanKontenPembelajaran;
use App\Livewire\HalamanKuisEvaluasi;
use App\Livewire\HalamanMateriPembelajaran;
use App\Livewire\HalamanPembelajaran;
use App\Livewire\HalamanTabelAksara;
use App\Livewire\HalamanTentang;
use App\Livewire\HalamanVideoPembelajaran;
use App\Livewire\HomePage;
use Illuminate\Support\Facades\Route;

Route::get('/', HomePage::class)->name('home');

Route::group(['middleware' => 'auth'], function () {

    Route::get('/tabel-aksara', HalamanTabelAksara::class)->name('tabel-aksara');

    Route::get('/pembelajaran', HalamanPembelajaran::class)->name('pembelajaran');
    Route::get('/informasi-materi-pembelajaran/{slug}', HalamanMateriPembelajaran::class)->name('materi-pembelajaran');
    Route::get('/konten-pembelajaran/{slug}', HalamanKontenPembelajaran::class)->name('konten-pembelajaran');

    Route::get('/daftar-video', HalamanDaftarVideo::class)->name('daftar-video-pembelajaran');
    Route::get('/video-pembelajaran/{slug}', HalamanVideoPembelajaran::class)->name('video-pembelajaran');
    Route::get('/tentang', HalamanTentang::class)->name('tentang');

    Route::get('/kuis/{video_id}', HalamanKuisEvaluasi::class)->name('kuis');
});
