<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InformasiPembelajaranResource\Pages;
use App\Filament\Resources\InformasiPembelajaranResource\RelationManagers;
use App\Models\InformasiPembelajaran;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class InformasiPembelajaranResource extends Resource
{
    protected static ?string $model = InformasiPembelajaran::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-check';

    protected static ?int $navigationSort = 2;

    public static function getModelLabel(): string
    {
        return 'Informasi Pembelajaran';
    }

    public static function getNavigationGroup(): ?string
    {
        return "Manajemen Pembelajaran";
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('gambar')
                    ->required()
                    ->columnSpanFull()
                    ->maxSize(1024 * 5)
                    ->image(),
                Forms\Components\TextInput::make('judul')
                    ->required()
                    ->live(onBlur: true)
                    ->afterStateUpdated(function ($set, $state) {
                        $set('slug', \Illuminate\Support\Str::slug($state));
                    })
                    ->maxLength(255),

                Forms\Components\Hidden::make('slug')
                    ->required(),

                Forms\Components\Select::make('materi_pembelajaran_id')
                    ->relationship('materi_pembelajaran', 'judul')
                    ->required(),

                Forms\Components\RichEditor::make('deskripsi')
                    ->required()
                    ->minLength(3)
                    ->disableToolbarButtons([
                        'blockquote',
                        'strike',
                        'attachFiles',
                    ])
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('gambar')
                    ->searchable(),

                Tables\Columns\TextColumn::make('judul')
                    ->searchable(),

                Tables\Columns\TextColumn::make('slug')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),

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
            'index' => Pages\ListInformasiPembelajarans::route('/'),
            'create' => Pages\CreateInformasiPembelajaran::route('/create'),
            'edit' => Pages\EditInformasiPembelajaran::route('/{record}/edit'),
        ];
    }
}
