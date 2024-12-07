<?php

namespace App\Filament\Resources\InformasiPembelajaranResource\Pages;

use App\Filament\Resources\InformasiPembelajaranResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInformasiPembelajaran extends EditRecord
{
    protected static string $resource = InformasiPembelajaranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
