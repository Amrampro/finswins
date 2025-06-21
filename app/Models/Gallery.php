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
}
