<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KuisSoalResource\Pages;
use App\Filament\Resources\KuisSoalResource\RelationManagers;
use App\Models\KuisSoal;
use Filament\Forms;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KuisSoalResource extends Resource
{
    protected static ?string $model = KuisSoal::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?int $navigationSort = 5;

    public static function getModelLabel(): string
    {
        return 'Kuis Soal';
    }

    public static function getNavigationGroup(): ?string
    {
        return "Manajemen Pembelajaran";
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('soal')
                    ->required()
                    ->maxLength(255),

                Forms\Components\Select::make('video_pembelajaran_id')
                    ->required()
                    ->relationship('video_pembelajaran', 'judul'),

                Fieldset::make('Pilihan Jawaban')
                    ->schema([

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

                    ]),

                Forms\Components\Select::make('jawaban')
                    ->required()
                    ->columnSpanFull()
                    ->options([
                        'a' => 'A',
                        'b' => 'B',
                        'c' => 'C',
                        'd' => 'D',
                    ]),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('soal')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jawaban')
                    ->searchable(),
                Tables\Columns\TextColumn::make('video_pembelajaran.judul')
                    ->limit(40)
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Dibuat Pada')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Dibuat Pada')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
