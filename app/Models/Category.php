<?php

namespace App\Models;

use App\Helpers\Helper;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function setSlugAttribute($value)
    {
        $slug = Helper::slug($value);
        $uniqueslug = Helper::uniqueSlug($slug,'categories');

        $this->attributes['slug'] = $uniqueslug;
    }

}


