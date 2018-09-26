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
    public function getMetatitleAttribute($value)
    {
        if(!empty($value)){
            return $value;
        } else {
            return $this->title.' — купить в «Нордлайн» по привлекательной цене. Доставка по России.';
        }

    }
    public function getMetadescriptionAttribute($value)
    {
        if(!empty($value)){
            return $value;
        } else {
            return "На сайте компании «Нордлайн» вы можете приобрести товары из категории «".$this->title."» по привлекательной цене. Характеристики, сертификаты. Доставка по всей России.";
        }

    }
    public function getMetakeywordsAttribute($value)
    {
        if(!empty($value)){
            return $value;
        } else {
            return "$this->title, инструкция, цена, нордлайн, доставка по россии, санкт-петербург, спб, каталог, интернет-магазин";
        }
    }
    //Scopes
    public function scopeActive($query)
    {
        return $query->where('active',1);
    }

}
