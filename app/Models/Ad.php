<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Image;
use App\Helpers\Helper;

class Ad extends Model
{
//    protected $fillable=['title','slug','text','text','price','user_id','category_id','country_id','currency_id'];
    protected $guarded=['id'];

    public function setSlugAttribute($value)
    {
        $slug = Helper::slug($value);
        $uniqueslug = Helper::uniqueSlug($slug,'ads');

        $this->attributes['slug'] = $uniqueslug;
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }
}

