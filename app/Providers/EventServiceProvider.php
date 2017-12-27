<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use App\Model\Product;
use App\Model\Banner;
use App\Model\Question;
use App\Model\Page;
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

        Page::updated(function($page){
            Page::rebuild();

        });
        Product::created(function($product) {
            $product->resizeImages();
        });
        Product::updated(function($product) {
            $product->resizeImages();
        });
        Banner::created(function($banner) {
            $banner->resizeImages();
        });
        Banner::updated(function($banner) {
            $banner->resizeImages();
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
