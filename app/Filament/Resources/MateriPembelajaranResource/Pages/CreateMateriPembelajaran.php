<?php

namespace App\Filament\Resources\MateriPembelajaranResource\Pages;

use App\Filament\Resources\MateriPembelajaranResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateMateriPembelajaran extends CreateRecord
{
    protected static string $resource = MateriPembelajaranResource::class;

    protected function getRedirectUrl(): string
    {
        $resource = static::getResource();

        return $resource::getUrl('index');
    }
}
