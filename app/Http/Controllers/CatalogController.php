<?php

namespace App\Http\Controllers;
use App\Model\Product;
use App\Model\Page;
use App\Model\Vendor;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index(Request $request,$subcategory = null)
    {

        $subcategory = explode('/',$subcategory);
        $page = Page::where('slug',end($subcategory))->first();
        if(!$page){
            $page = Page::where('slug','catalog')->first();
        }
        $params = $request->all();
        $products = Product::filter($params,$page);
        $vendors = Vendor::all();
        $categories = Page::where('parent_id' , 2)->get();
        return view('catalog',[
            'products' => $products,
            'categories' => $categories,
            'vendors' => $vendors,
            'page' => $page,
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
