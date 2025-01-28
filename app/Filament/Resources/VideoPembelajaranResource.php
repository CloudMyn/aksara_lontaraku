<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VideoPembelajaranResource\Pages;
use App\Filament\Resources\VideoPembelajaranResource\RelationManagers;
use App\Models\VideoPembelajaran;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class VideoPembelajaranResource extends Resource
{
    protected static ?string $model = VideoPembelajaran::class;

    protected static ?string $navigationIcon = 'heroicon-o-video-camera';

    protected static ?int $navigationSort = 4;

    public static function getModelLabel(): string
    {
        return 'Video Pembelajaran';
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
                    ->columnSpanFull()
                    ->image()
                    ->label('Gambar')
                    ->maxSize(1024 * 5),

                Forms\Components\TextInput::make('judul')
                    ->required()
                    ->live(onBlur: true)
                    ->afterStateUpdated(function ($set, $state) {
                        $set('slug', \Illuminate\Support\Str::slug($state));
                    })
                    ->maxLength(255),

                Forms\Components\Hidden::make('slug')
                    ->required(),

                Forms\Components\TextInput::make('durasi')
                    ->required()
                    ->maxLength(255),

                Forms\Components\RichEditor::make('deskripsi')
                    ->required()
                    ->disableToolbarButtons([
                        'blockquote',
                        'strike',
                        'attachFiles',
                    ])
                    ->columnSpanFull(),

                Forms\Components\Textarea::make('video')
                    ->label('Link Video')
                    ->required()
                    ->columnSpanFull()
                    ->maxLength(900),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('judul')
                    ->limit(30)
                    ->searchable(),

                Tables\Columns\TextColumn::make('durasi')
                    ->searchable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Dibuat Pada')
                    ->dateTime()
                    ->sortable(),

                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Diubah Pada')
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
            'index' => Pages\ListVideoPembelajarans::route('/'),
            'create' => Pages\CreateVideoPembelajaran::route('/create'),
            'edit' => Pages\EditVideoPembelajaran::route('/{record}/edit'),
        ];
    }
}
