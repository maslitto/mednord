<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use App\Model\Product;
use App\Model\Banner;
use App\Model\Question;
use File;
use Image;
use Mail;
class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Events\SomeEvent' => [
            'App\Listeners\EventListener',
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        Product::created(function($product) {
            if(count($product->images)>0){
                foreach(config('images.product') as $size){
                    $path = public_path('images/resized/'.$size['w'].'x'.$size['h']);
                    File::isDirectory($path) or File::makeDirectory($path, 0777, true, true);
                    foreach($product->images as $image){
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
        });
        Product::updated(function($product) {
            if(count($product->images)>0){
                foreach(config('images.product') as $size){
                    $path = public_path('images/resized/'.$size['w'].'x'.$size['h']);
                    File::isDirectory($path) or File::makeDirectory($path, 0777, true, true);
                    foreach($product->images as $image){
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
        });
        Banner::created(function($banner) {
            if(!empty($image = $banner->image)){
                foreach(config('images.banner') as $size){
                    $path = public_path('images/resized/'.$size['w'].'x'.$size['h']);
                    File::isDirectory($path) or File::makeDirectory($path, 0777, true, true);
                    if (!file_exists($path.basename($image))) {
                        $resized  = Image::make(public_path().'/'.$image)->fit($size['w'], $size['h']);
                        $resized->save($path.'/'.basename($image));
                    }
                }

            }
        });
        Banner::updated(function($banner) {
            if(!empty($image = $banner->image)){
                foreach(config('images.banner') as $size){
                    $path = public_path('images/resized/'.$size['w'].'x'.$size['h']);
                    File::isDirectory($path) or File::makeDirectory($path, 0777, true, true);
                    if (!file_exists($path.basename($image))) {
                        $resized  = Image::make(public_path().'/'.$image)->fit($size['w'], $size['h']);
                        $resized->save($path.'/'.basename($image));
                    }
                }

            }
        });
        Question::created(function($banner){
            Mail::raw('Заявка с сайта', function($message)
            {
                $message->from('maslov433@mail.ru', 'Laravel');

                $message->to('maslov433@mail.ru');
            });
        });
    }
}
