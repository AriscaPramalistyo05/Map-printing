<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;


class Produk extends Model
{
    use HasFactory;

    protected $fillable = ['nama_produk', 'deskripsi', 'harga', 'gambar'];

    protected static function boot()
{
    parent::boot();

    static::updating(function ($model) {
        // Assuming 'gambar' is the attribute name for the uploaded file
        $newImage = $model->gambar;

        if ($newImage instanceof UploadedFile) {
            // If $newImage is an instance of UploadedFile, store it
            $path = $newImage->store('images', 'public');
        } elseif (is_string($newImage)) {
            // If $newImage is a string (file path), store it directly
            $path = $newImage;
        } else {
            // Handle other cases if needed
            return;
        }

        // Get the original image path
        $oldImagePath = $model->getOriginal('gambar');

        // Check and delete the old image if it exists
        if ($oldImagePath && Storage::disk('public')->exists($oldImagePath)) {
            Storage::disk('public')->delete($oldImagePath);
        }

        // Update the 'gambar' attribute with the new path or filename
        $model->gambar = $path;
    });
}

}
