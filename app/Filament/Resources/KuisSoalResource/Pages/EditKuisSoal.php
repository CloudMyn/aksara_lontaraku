<?php

namespace App\Filament\Resources\KuisSoalResource\Pages;

use App\Filament\Resources\KuisSoalResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKuisSoal extends EditRecord
{
    protected static string $resource = KuisSoalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
