<?php

namespace App\Filament\Resources\VideoPembelajaranResource\Pages;

use App\Filament\Resources\VideoPembelajaranResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateVideoPembelajaran extends CreateRecord
{
    protected static string $resource = VideoPembelajaranResource::class;

    protected function getRedirectUrl(): string
    {
        $resource = static::getResource();

        return $resource::getUrl('index');
    }
}
