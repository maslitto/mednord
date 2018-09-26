<?php namespace App\Model;

use Baum\Node;
use Slug;

class Page extends Node
{
    public function setSlugAttribute($value)
    {
        if($value == ''){
            $this->attributes['slug'] = Slug::make($this->title);
        } else{
            $this->attributes['slug'] = $value;
        }
    }

    /**
     * @param $value
     * @return string
     */
    public function getUrlAttribute($value)
    {
        self::rebuild();
        $url = '';
        foreach($this->getAncestorsAndSelf() as $descendant) {
            $url .= $descendant->slug . '/';
        }
        if($this->id == 1){
            $url = '';
        }
        //dd($url);
        return $url;
    }
    public function getImageAttribute($value)
    {
        if(isset($value)){
            return $value;
        } else {
            return 'img/empty.png';
        }
    }
    //Scopes
    public function scopeActive($query)
    {
        return $query->where('active',1);
    }

}
