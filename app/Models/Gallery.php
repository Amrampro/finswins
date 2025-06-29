<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $guarded = [];
    protected function casts(): array
    {
        return [
            'published_at' => 'date',
            'images' => 'array',
        ];

    }

    public function getFirstImageUrl(): string
    {
        return asset("storage/".data_get($this->images, "0","default.png"));
    }

    public function getImagesUrl(): array
    {
        return collect($this->images)->map(function (string $image){
            return asset('storage/'.$image);
        })->all();
    }
}
