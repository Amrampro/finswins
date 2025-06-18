<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Portrait extends Model
{
    protected $guarded = [];


    public function getImageUrl(): string
    {
        return asset("storage/".$this->image);
    }
}
