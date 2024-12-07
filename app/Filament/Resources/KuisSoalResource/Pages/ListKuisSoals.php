<?php

namespace App\Filament\Resources\KuisSoalResource\Pages;

use App\Filament\Resources\KuisSoalResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKuisSoals extends ListRecords
{
    protected static string $resource = KuisSoalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
