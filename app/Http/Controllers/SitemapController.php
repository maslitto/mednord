<?php

namespace App\Http\Controllers;
use App\Model\Page;
use App\Model\Vendor;
use App\Model\Product;

class SitemapController extends Controller
{
    const HOST  = 'http://med-nord.ru/';
    public function sitemap()
    {
        $products = Product::active()->get();
        $pages = Page::active()->get();
        /*return view('sitemap',[
            'pages' => $pages,
            'products' => $products
        ]);*/
        return response()
            ->view('sitemap',[
                'pages' => $pages,
                'products' => $products,
                'host' => self::HOST
            ])
            ->header('Content-Type', 'text/xml');
    }

}
