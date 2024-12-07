<?php

namespace App\Filament\Resources\VideoPembelajaranResource\Pages;

use App\Filament\Resources\VideoPembelajaranResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVideoPembelajaran extends EditRecord
{
    protected static string $resource = VideoPembelajaranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
