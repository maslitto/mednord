<?php namespace App\Model;

use Baum\Node;
use Illuminate\Database\Eloquent\Model;
use Slug;

class Page extends Node
{
    public function setSlugAttribute($value)
    {

        if($value == ''){
            $this->attributes['slug'] = Slug::make($this->title);
        }
        else{
            $this->attributes['slug'] = $value;
        }

    }

    public function getUrlAttribute($value)
    {
        $url = '';
        foreach($this->getAncestorsAndSelf() as $descendant) {
            $url .= $descendant->slug . '/';
        }
        return $url;
    }
}
