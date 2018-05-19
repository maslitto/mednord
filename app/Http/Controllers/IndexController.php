<?php

namespace App\Http\Controllers;

use App\Model\Banner;
use App\Model\News;
use App\Model\Vendor;
use App\Model\Page;

class IndexController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banner::all();
        $news = News::where('id','>',0)->take(10)->get();
        $vendors = Vendor::all();
        $categories['cat1'] = Page::find(9);
        $categories['cat2'] = Page::find(13);
        $categories['cat3'] = Page::find(8);
        $categories['cat4'] = Page::find(12);
        $categories['cat5'] = Page::find(14);
        $categories['cat6'] = Page::find(7);
        return view('index',[
            'banners' => $banners,
            'news' => $news,
            'vendors' => $vendors,
            'categories' => $categories,
            'page' => Page::find(1)
        ]);
    }
}
