<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Team extends Model
{
    protected $guarded = [];

    public function teamCategory(): BelongsTo
    {
        return $this->belongsTo(TeamCategory::class);
    }

}

