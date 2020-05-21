<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Restaurant extends Model
{
    protected $fillable = [
        'category_id',
        'slug',
        'title',
        'short_description',
        'description',
        'logo_url',
        'img_url',
        'work_time',
        'average_check',
        'delivery_cost',
        'average_delivery_time',
        'is_draft',
    ];

    public function parentsCats()
    {
        return $this->hasMany('App\Category');
    }

    protected static function boot()
    {
        parent::boot();

        static::created(function ($restaurant) {
            $restaurant->update(['slug' => $restaurant->title]);
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
