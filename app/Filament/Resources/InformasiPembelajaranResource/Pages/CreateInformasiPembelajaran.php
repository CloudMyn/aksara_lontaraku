<?php

namespace App\Filament\Resources\InformasiPembelajaranResource\Pages;

use App\Filament\Resources\InformasiPembelajaranResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateInformasiPembelajaran extends CreateRecord
{
    protected static string $resource = InformasiPembelajaranResource::class;

    protected static bool $canCreateAnother = false;

    protected function getRedirectUrl(): string
    {
        $resource = static::getResource();

        return $resource::getUrl('index');
    }
}
