<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Blog extends Model
{
    protected $guarded = [];
    public function blogCategory(): BelongsTo
    {
        return $this->belongsTo(BlogCategory::class);
    }
    public function getShowRoute()
    {
        return route('frontend.blogs.show',['blogId'=>$this->id]);
    }
    public function getPosterUrl()
    {
        return asset('storage/'.$this->poster);
    }
}
