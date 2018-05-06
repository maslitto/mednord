<?php

namespace App\Http\Controllers;
use App\Model\Page;
use App\Model\Vendor;

class VendorController extends Controller
{

    public function index()
    {
        $vendors = Vendor::where('id','>',0)->get();
        $page = Page::where('title', 'Производители')->firstOrFail();
        return view('vendors',[
            'vendors' => $vendors,
            'page' => $page,
        ]);
    }

    public function view($slug)
    {
        $vendors = Vendor::where('id','>',0)->get();
        $vendor = Vendor::where('slug',$slug)->firstOrFail();
        return view('vendor_single',[
            'vendor' => $vendor,
            'vendors' => $vendors,
            'page' => $vendor
        ]);
    }
}
