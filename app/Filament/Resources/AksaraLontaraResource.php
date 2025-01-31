<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AksaraLontaraResource\Pages;
use App\Filament\Resources\AksaraLontaraResource\RelationManagers;
use App\Models\AksaraLontara;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AksaraLontaraResource extends Resource
{
    protected static ?string $model = AksaraLontara::class;

    protected static ?string $navigationIcon = 'heroicon-o-table-cells';

    protected static ?int $navigationSort = 3;

    public static function getModelLabel(): string
    {
        return 'Aksara Lontara';
    }

    public static function getNavigationGroup(): ?string
    {
        return "Manajemen Pembelajaran";
    }

    public static function form(Form $form): Form
    {
        return $form
            ->columns(2)
            ->schema([
                Forms\Components\TextInput::make('nama_aksara')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('kode_aksara')
                    ->required()
                    ->maxLength(10),
                Forms\Components\Select::make('jenis')
                    ->required()
                    ->options([
                        'huruf' => 'Huruf',
                        'tanda_baca' => 'Tanda Baca',
                    ]),
                Forms\Components\TextInput::make('urutan')
                    ->required()
                    ->numeric(),
                Forms\Components\FileUpload::make('suara')
                    ->label('Suara')
                    ->columnSpanFull()
                    ->maxSize(1024),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_aksara')
                    ->searchable(),

                Tables\Columns\TextColumn::make('kode_aksara')
                    ->fontFamily('font-lontara'),

                Tables\Columns\TextColumn::make('jenis')
                    ->searchable()
                    ->sortable()
                    ->badge(),

                Tables\Columns\TextColumn::make('urutan')
                    ->numeric()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Dibuat Pada')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: false),

                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Diperbarui Pada')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageAksaraLontaras::route('/'),
        ];
    }
}
