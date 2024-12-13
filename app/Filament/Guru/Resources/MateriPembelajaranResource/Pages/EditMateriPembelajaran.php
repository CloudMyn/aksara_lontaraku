<?php

namespace App\Filament\Guru\Resources\MateriPembelajaranResource\Pages;

use App\Filament\Guru\Resources\MateriPembelajaranResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMateriPembelajaran extends EditRecord
{
    protected static string $resource = MateriPembelajaranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
