<?php

namespace App\Filament\Resources\AksaraLontaraResource\Pages;

use App\Filament\Resources\AksaraLontaraResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageAksaraLontaras extends ManageRecords
{
    protected static string $resource = AksaraLontaraResource::class;

    protected static bool $canCreateAnother = false;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
