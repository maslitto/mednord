<?php namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use File;
use Image;

class Banner extends Model
{
    protected $hidden = [];

    public function resizeImages()
    {
        if(!empty($image = $this->image)){
            foreach(config('images.banner') as $size){
                $path = public_path('images/resized/'.$size['w'].'x'.$size['h']);
                File::isDirectory($path) or File::makeDirectory($path, 0777, true, true);
                if (!file_exists($path.basename($image))) {
                    $resized  = Image::make(public_path().'/'.$image)->fit($size['w'], $size['h']);
                    $resized->save($path.'/'.basename($image));
                }
            }

        }
    }
}
