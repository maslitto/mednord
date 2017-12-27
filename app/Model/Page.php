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
        //dd($url);
        return $url;
    }
    public function getImageAttribute($value)
    {
        if(isset($value)){
            return $value;
        } else {
            return 'https://dummyimage.com/400x400/ffffff/107bb1.jpg&text=НЕТ+ФОТО';
        }
    }
}
