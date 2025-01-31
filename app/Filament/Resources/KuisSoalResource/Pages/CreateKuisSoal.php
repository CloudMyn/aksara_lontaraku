<?php

namespace App\Filament\Resources\KuisSoalResource\Pages;

use App\Filament\Resources\KuisSoalResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateKuisSoal extends CreateRecord
{
    protected static string $resource = KuisSoalResource::class;

    protected static bool $canCreateAnother = false;

    protected function getRedirectUrl(): string
    {
        $resource = static::getResource();

        return $resource::getUrl('index');
    }
}
