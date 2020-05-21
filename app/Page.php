<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Page extends Model
{
    protected $fillable = [
        'title', 'content', 'is_draft', 'slug',
    ];

    protected static function boot()
    {
        parent::boot();

        static::created(function ($page) {
            $page->update(['slug' => $page->title]);
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
