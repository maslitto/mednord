<?php namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Slug;

class News extends Model
{

    protected $table = 'news';

    protected $fillable = [
        'title',
        'date',
        'published',
        'text',
    ];

    public function scopeLast($query)
    {
        $query->orderBy('date', 'desc')->limit(4);
    }
    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Slug::make($this->title);
    }
}
