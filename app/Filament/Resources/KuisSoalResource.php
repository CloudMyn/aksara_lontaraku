<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KuisSoalResource\Pages;
use App\Filament\Resources\KuisSoalResource\RelationManagers;
use App\Models\KuisSoal;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KuisSoalResource extends Resource
{
    protected static ?string $model = KuisSoal::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('soal')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('pilihan_a')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('pilihan_b')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('pilihan_c')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('pilihan_d')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('jawaban')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('nilai')
                    ->required()
                    ->numeric()
                    ->default(2),
                Forms\Components\TextInput::make('video_pembelajaran_id')
                    ->required()
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('soal')
                    ->searchable(),
                Tables\Columns\TextColumn::make('pilihan_a')
                    ->searchable(),
                Tables\Columns\TextColumn::make('pilihan_b')
                    ->searchable(),
                Tables\Columns\TextColumn::make('pilihan_c')
                    ->searchable(),
                Tables\Columns\TextColumn::make('pilihan_d')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jawaban')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nilai')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('video_pembelajaran_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListKuisSoals::route('/'),
            'create' => Pages\CreateKuisSoal::route('/create'),
            'edit' => Pages\EditKuisSoal::route('/{record}/edit'),
        ];
    }
}
