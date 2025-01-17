<?php

namespace App\Filament\Guru\Resources\InformasiPembelajaranResource\Pages;

use App\Filament\Guru\Resources\InformasiPembelajaranResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInformasiPembelajarans extends ListRecords
{
    protected static string $resource = InformasiPembelajaranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
