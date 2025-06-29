<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $guarded = [];

    //get image url
    public function getImageUrl(): string
    {
        return asset('storage/' . $this->avatar);
    }

}
