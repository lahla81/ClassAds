<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use illuminate\Http\Request;
use App\Models\User;
use App\Models\Image;
use App\Models\Country;
use App\Models\Currency;
use App\Models\Category;
use App\Helpers\Helper;

class Ad extends Model
{
    protected $fillable=['title','slug','text','price','user_id','category_id','country_id','currency_id'];
    // protected $guarded=['id'];

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

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function currency()
    {
        return $this->belongsTo(Currency::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function scopeFilter($query,Request $request)
    {
        if($request->country){
            $query->whereCountry_id($request->country);
        }

        if($request->category){
            $query->whereCategory_id($request->category);
        }

        if($request->keyword){
            $query->where('title','LIKE','%'.$request->keyword.'%');
        }

        return $query->with('images')->get();
    }
}

