<?php

namespace App\Http\Controllers;

use App\Model\Banner;
use App\Model\News;

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
        return view('index',[
            'banners' => $banners,
            'news' => $news,
        ]);
    }
}
