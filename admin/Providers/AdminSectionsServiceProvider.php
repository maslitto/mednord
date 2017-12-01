<?php

namespace Admin\Providers;

use Admin\Http\Sections\Contacts;
use Admin\Policies\ContactsSectionModelPolicy;
use Illuminate\Routing\Router;
use SleepingOwl\Admin\Contracts\Navigation\NavigationInterface;
use SleepingOwl\Admin\Contracts\Template\MetaInterface;
use SleepingOwl\Admin\Contracts\Widgets\WidgetsRegistryInterface;
use SleepingOwl\Admin\Providers\AdminSectionsServiceProvider as ServiceProvider;

class AdminSectionsServiceProvider extends ServiceProvider
{
    /**
     * @var array
     */
    protected $widgets = [
        \Admin\Widgets\DashboardMap::class,
        \Admin\Widgets\NavigationNotifications::class,
        \Admin\Widgets\NavigationUserBlock::class,
    ];

    /**
     * @var array
     */
    protected $sections = [

        'App\Model\Banner'         => 'Admin\Http\Sections\Banners',
        'App\Model\News'            => 'Admin\Http\Sections\News',
        'App\Model\Page'            => 'Admin\Http\Sections\Pages',
        'App\Model\Product'            => 'Admin\Http\Sections\Products',
        'App\Model\Question'            => 'Admin\Http\Sections\Questions',
        'App\Model\Vendor'            => 'Admin\Http\Sections\Vendors',

        'App\Role'                  => 'Admin\Http\Sections\Roles',
        'App\User'                  => 'Admin\Http\Sections\Users',
    ];

    /**
     * @param \SleepingOwl\Admin\Admin $admin
     *
     * @return void
     */
    public function boot(\SleepingOwl\Admin\Admin $admin)
    {


        $this->loadViewsFrom(base_path("admin/resources/views"), 'admin');
        $this->registerPolicies('Admin\\Policies\\');

        $this->app->call([$this, 'registerRoutes']);
        $this->app->call([$this, 'registerNavigation']);

        parent::boot($admin);

        $this->app->call([$this, 'registerViews']);
        $this->app->call([$this, 'registerMediaPackages']);
    }

    /**
     * @param NavigationInterface $navigation
     */
    public function registerNavigation(NavigationInterface $navigation)
    {
        require base_path('admin/navigation.php');
    }

    /**
     * @param WidgetsRegistryInterface $widgetsRegistry
     */
    public function registerViews(WidgetsRegistryInterface $widgetsRegistry)
    {
        foreach ($this->widgets as $widget) {
            $widgetsRegistry->registerWidget($widget);
        }
    }

    /**
     * @param Router $router
     */
    public function registerRoutes(Router $router)
    {
        $router->group(['prefix' => config('sleeping_owl.url_prefix'), 'middleware' => config('sleeping_owl.middleware')], function ($router) {
            require base_path('admin/Http/routes.php');
        });
    }

    /**
     * @param MetaInterface $meta
     */
    public function registerMediaPackages(MetaInterface $meta)
    {
        $packages = $meta->assets()->packageManager();

        require base_path('admin/assets.php');
    }
}
