<?php

namespace App\Filament\Resources\EvaluasiResource\Pages;

use App\Filament\Resources\EvaluasiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEvaluasis extends ListRecords
{
    protected static string $resource = EvaluasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Actions\Action::make('export_pdf')
                ->label('Export PDF')
                ->url(route('export-penilaian'), true),
        ];
    }


}
