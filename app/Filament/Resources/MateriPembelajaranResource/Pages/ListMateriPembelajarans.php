<?php

namespace App\Filament\Resources\MateriPembelajaranResource\Pages;

use App\Filament\Resources\MateriPembelajaranResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMateriPembelajarans extends ListRecords
{
    protected static string $resource = MateriPembelajaranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
