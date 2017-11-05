<?php

namespace App\Http\Controllers;
use App\Model\Product;
use App\Model\Page;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index(Request $request)
    {
        $params = $request->all();
        $products = Product::filter($params);
        $categories = Page::where('parent_id' , 2)->get();
        return view('catalog',[
            'products' => $products,
            'categories' => $categories,
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
