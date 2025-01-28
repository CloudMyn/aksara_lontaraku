<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MateriPembelajaranResource\Pages;
use App\Filament\Resources\MateriPembelajaranResource\RelationManagers;
use App\Models\MateriPembelajaran;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MateriPembelajaranResource extends Resource
{
    protected static ?string $model = MateriPembelajaran::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-list';

    protected static ?int $navigationSort = 1;

    public static function getModelLabel(): string
    {
        return 'Materi Pembelajaran';
    }

    public static function getNavigationGroup(): ?string
    {
        return "Manajemen Pembelajaran";
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('gambar')
                    ->label('Gambar')
                    ->image()
                    ->directory('materi_pembelajaran')
                    ->columnSpanFull()
                    ->minSize(2)
                    ->maxSize(1024 * 5)
                    ->required(),

                Forms\Components\TextInput::make('judul')
                    ->required()
                    ->maxLength(255),

                Forms\Components\TextInput::make('kelas')
                    ->required()
                    ->maxLength(255),

                Forms\Components\TextInput::make('deskripsi')
                    ->columnSpanFull()
                    ->maxLength(199),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('gambar'),
                Tables\Columns\TextColumn::make('judul')
                    ->limit(30),
                Tables\Columns\TextColumn::make('kelas'),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Dibuat Pada')
                    ->dateTime()
                    ->sortable(),
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

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMateriPembelajarans::route('/'),
            'create' => Pages\CreateMateriPembelajaran::route('/create'),
            'edit' => Pages\EditMateriPembelajaran::route('/{record}/edit'),
        ];
    }
}
