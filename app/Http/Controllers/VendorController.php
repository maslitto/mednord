<?php

namespace App\Http\Controllers;
use App\Model\Vendor;

class VendorController extends Controller
{

    public function index()
    {
        $vendors = Vendor::where('id','>',0)->get();
        return view('vendors',['vendors' => $vendors]);
    }

    public function view($slug)
    {
        $vendors = Vendor::where('id','>',0)->get();
        $vendor = Vendor::where('slug',$slug)->firstOrFail();
        return view('vendor_single',['vendor' => $vendor,'vendors' => $vendors]);
    }
}
