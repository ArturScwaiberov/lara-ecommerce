<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    protected $fillable = ['title', 'short_description', 'description', 'img_url', 'is_draft', 'slug'];

    public function childsRests()
    {
        return $this->hasMany('App\Restaurant');
    }

    protected static function boot()
    {
        parent::boot();

        static::created(function ($category) {
            $category->update(['slug' => $category->title]);
        });
    }

    public function setSlugAttribute($value)
    {
        if (static::whereSlug($slug = Str::slug($value))->exists()) {
            $slug = "{$slug}-{$this->id}";
        }
        $this->attributes['slug'] = $slug;
    }

}
