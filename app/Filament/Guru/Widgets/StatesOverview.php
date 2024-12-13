<?php

namespace App\Filament\Guru\Widgets;


use App\Models\MateriPembelajaran;
use App\Models\User;
use App\Models\VideoPembelajaran;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatesOverview extends BaseWidget
{
    protected static ?int $sort = 10;

    protected function getStats(): array
    {
        return [
            Stat::make('Jumlah Materi Pembelajaran', MateriPembelajaran::all()->count()),
            Stat::make('Jumlah Siswa', User::where('role', 'USER')->count()),
            Stat::make('Jumlah Video Pembelajaran', VideoPembelajaran::all()->count()),
        ];
    }
}
