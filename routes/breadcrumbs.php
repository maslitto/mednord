<?php
use App\Model\Page;

// Home
Breadcrumbs::register('home', function($breadcrumbs)
{
    $breadcrumbs->push('Главная', route('home'));
});

$pages = Page::where('parent_id',NULL)->get();
foreach($pages as $page){
    Breadcrumbs::register($page->slug, function($breadcrumbs) use ($page)
    {
        $breadcrumbs->parent('home');
        $breadcrumbs->push($page->title, route($page->slug));
    });
}


// Home > Search
Breadcrumbs::register('search', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Результаты поиска', route('search'));
});

// Home > Каталог > [Product]
Breadcrumbs::register('product', function($breadcrumbs, $product)
{

    $breadcrumbs->parent('catalog');
    $breadcrumbs->push($product->title, route('product', $product->id));
});

Breadcrumbs::register('contacts', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Контакты', route('kontakty'));
});
// Home > blog > [post]
Breadcrumbs::register('post', function($breadcrumbs, $post)
{
    //dd($blog);
    $breadcrumbs->parent('blog');
    //$breadcrumbs->push('Избранное', route('wishlist'));
    //dd($post);
    $breadcrumbs->push($post->title, route('post', $post->slug));
});