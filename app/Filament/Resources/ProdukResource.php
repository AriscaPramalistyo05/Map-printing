<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Produk;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Section;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ProdukResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ProdukResource\RelationManagers;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Storage;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;



class ProdukResource extends Resource
{
    protected static ?string $model = Produk::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->schema([
                        Forms\Components\TextInput::make('nama_produk')
                            ->required()
                            ->maxLength(255)
                            ->label('Nama Produk'),
                        Forms\Components\RichEditor::make('deskripsi')
                            ->columnSpanFull()
                            ->label('Deskripsi'),
                        Forms\Components\TextInput::make('harga')
                            ->required()
                            ->numeric()
                            ->label('Harga'),
                        Forms\Components\FileUpload::make('gambar')
                            ->label('Gambar')
                            ->disk('public')
                            ->directory('uploads/images')
                            ->nullable(),
                    ])
                    ->aside(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_produk')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('harga')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('deskripsi')->label('Deskripsi')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('gambar')
                    ->label('Gambar')
                    ->disk('public')
                    ->searchable(),
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
                BulkActionGroup::make([
                    DeleteBulkAction::make()->after(function (Collection $records) {
                        foreach ($records as $record) {
                            if ($record->gambar) {
                                Storage::disk('public')->delete($record->gambar);
                            }
                        }
                    }),
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
            'index' => Pages\ListProduks::route('/'),
            'create' => Pages\CreateProduk::route('/create'),
            'edit' => Pages\EditProduk::route('/{record}/edit'),
        ];
    }
}
