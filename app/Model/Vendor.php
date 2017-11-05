<?php namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Slug;

class Vendor extends Model
{
    protected $hidden = [];

    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Slug::make($this->title);
    }

    public function getUrlAttribute($value)
    {
        return '/proizvoditeli/' . $this->attributes['slug'];
    }
    public function getImageAttribute($value)
    {
        return '/' . $value;
    }
}
