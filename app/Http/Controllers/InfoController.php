<?php

namespace App\Http\Controllers;

use App\Model\Banner;
use App\Model\News;
use App\Model\Vendor;
use App\Model\Page;

class InfoController extends Controller
{
    /**
     * Content page controller
     *
     * @return \Illuminate\Http\Response
     */
    public function index($slug)
    {
        $page = Page::where('slug',"LIKE",'%'.$slug.'%')->firstOrFail();
        return view('content',[
            'page' => $page,
        ]);
    }
}
