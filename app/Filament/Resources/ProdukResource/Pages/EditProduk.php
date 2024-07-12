<?php

namespace App\Filament\Resources\ProdukResource\Pages;

use App\Filament\Resources\ProdukResource;
use App\Models\Produk;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Storage;

class EditProduk extends EditRecord
{
    protected static string $resource = ProdukResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()->after
            (
                function(Produk $resource){
                    if($resource->gambar){
                        Storage::disk('public')->delete($resource->gambar);
                    }
                }
            ),
        ];
    }
}
