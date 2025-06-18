<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TeamCategory extends Model
{
    protected $guarded = [];

    public function teams(): HasMany
    {
        return $this->hasMany(Team::class);
    }
}
