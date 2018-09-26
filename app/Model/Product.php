<?php namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Slug;
use File;
use Image;

class Product extends Model
{
    protected $guarded = [];

    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Slug::make($this->title);
    }
    protected $casts = [
        'images' => 'array',
        'params' => 'array',
    ];

    //Relations
    public function category()
    {
        return $this->belongsTo(Page::class);
    }
    public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }
    //Mutators & Accessors
    public function setParamsAttribute($value){
        $this->attributes['params'] = json_encode($value);
    }
    public function getImageAttribute($value)
    {
        if(isset($this->images)){
            if(count($this->images)>0)
                return $this->images[0];
        }
        else{
            return NULL;
        }

    }
    public function getUrlAttribute($value)
    {
        return 'products/' . $this->slug;
    }
    public function getBaseImagesAttribute($value)
    {
        $baseImages = [];
        if(isset($this->images)) {
            foreach ($this->images as $image) {
                $baseImages[] = basename($image);
            }
        }
        return $baseImages;
    }

    public function getMetatitleAttribute($value)
    {
        if(!empty($value)){
            return $value;
        } else {
            return $this->title.' | Купить в «Нордлайн» c доставкой по России';
        }

    }
    public function getMetadescriptionAttribute($value)
    {
        if(!empty($value)){
            return $value;
        } else {
            $categoryTitle = $this->category->title;
            return "На сайте компании «Нордлайн» вы можете приобрести  из категории «".$categoryTitle."» по привлекательной цене. Характеристики, сертификаты. Доставка по всей России.";
        }

    }
    public function getMetakeywordsAttribute($value)
    {
        $categoryTitle = $this->category->title;
        return "$this->title, $categoryTitle, инструкция, цена, нордлайн, доставка по россии, санкт-петербург, спб, каталог, интернет-магазин";
    }

    public function resized($value)
    {
        $images = $this->getBaseImagesAttribute(NULL);
        if(count($images)>0){
            foreach($images as $k => $image) {
                $images[$k] = 'images/resized/'.$value.'/'.$image;
            }
            return $images;
        }

        else return ['img/empty.png'];
    }

    public function resizeImages()
    {
        if(count($this->images)>0){
            foreach(config('images.product') as $size){
                $path = public_path('images/resized/'.$size['w'].'x'.$size['h']);
                File::isDirectory($path) or File::makeDirectory($path, 0777, true, true);
                foreach($this->images as $image){
                    if (!file_exists($path.basename($image))) {
                        $background = Image::canvas($size['w'], $size['h'],'#fff');

                        $resized = Image::make(public_path().'/'.$image)->resize($size['w'], $size['h'], function ($c) {
                            $c->aspectRatio();
                            $c->upsize();
                        });
                        $background->insert($resized, 'center');
                        $background->save($path.'/'.basename($image));
                    }
                }
            }

        }
    }
    //Scopes
    public function scopeActive($query)
    {
        return $query->where('active',1);
    }

}
