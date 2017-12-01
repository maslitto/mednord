<?php

namespace App\Http\Controllers;
use App\Model\Product;
use App\Model\Page;
use App\Model\Vendor;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index(Request $request)
    {
        $params = $request->all();
        $products = Product::filter($params);
        $vendors = Vendor::all();
        $categories = Page::where('parent_id' , 2)->get();
        return view('catalog',[
            'products' => $products,
            'categories' => $categories,
            'vendors' => $vendors,
        ]);
    }
    public function view($slug)
    {
        $product = Product::where('slug' , $slug)->firstOrFail();
        return view('product',[
            'product' => $product,
        ]);
    }
}
