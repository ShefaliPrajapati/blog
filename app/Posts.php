<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Posts extends Model
{
    use HasSlug;

    /**
     * @var array
     */
    protected $fillable = [
        'title', 'slug', 'body', 'status', 'user_id', 'image'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function categories()
    {
        return $this->belongsToMany('App\Categories','category_post','post_id','category_id');
    }

    public function scopePublished($query)
    {
        return $query->where('status', 1);
    }

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug')
            ->slugsShouldBeNoLongerThan(50);
    }
}
