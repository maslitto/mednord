<?php namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Slug;

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

    public function resized($value)
    {
        $images = $this->getBaseImagesAttribute(NULL);
        if(count($images)>0){
            foreach($images as $k=>$image) {
                $images[$k] = 'images/resized/'.$value.'/'.$image;
            }
            return $images;
        }

        else return ['https://dummyimage.com/300x300/ffffff/e07383.jpg&text=НЕТ+ФОТО'];
    }

    public static function filter($params)
    {
        $products = self::where('id','>',0);
        if(!empty($params['sortby'])){
            $products = $products->orderBy('updated_at',$params['sortby']);
        }
        else{
            $products = $products->orderBy('updated_at','DESC');
        }
        $products->get();
        if(isset($params['per_page'])){
            $products = $products->paginate($params['per_page']);
        }
        else{
            $products = $products->paginate(12);
        }

        return $products;
    }
}
