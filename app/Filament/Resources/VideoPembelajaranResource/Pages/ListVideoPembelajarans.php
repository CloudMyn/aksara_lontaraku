<?php

namespace App\Filament\Resources\VideoPembelajaranResource\Pages;

use App\Filament\Resources\VideoPembelajaranResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListVideoPembelajarans extends ListRecords
{
    protected static string $resource = VideoPembelajaranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
