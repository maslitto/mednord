<?php

namespace App\Http\Controllers;

use App\Model\Product;
use App\Model\Page;
use App\Model\Vendor;
use Illuminate\Http\Request;
use App\Repository\ProductRepository;

class CatalogController extends Controller
{
    /**
     * @var ProductRepository
     */
    private $productRepository;

    /**
     * CatalogController constructor.
     */
    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    /**
     * @param Request $request
     * @param null $subcategory
     * @return array|\Illuminate\Contracts\View\Factory|\Illuminate\View\View|mixed
     */
    public function index(Request $request, $subcategory = null)
    {
        $subcategory = explode('/',$subcategory);
        $page = Page::where('slug',end($subcategory))->first();
        if(!$page){
            $page = Page::where('slug','catalog')->first();
        }
        $categories = Page::where('parent_id' , 2)->get();
        $children = Page::where('parent_id' , $page->id)->get();

        if($page->isLeaf()){
            $params = $request->all();
            if($page->slug == 'ves-spisok'){
                $products = $this->productRepository->filter($params);
            } else {
                $products = $this->productRepository->filter($params,$page);
            }

            $vendors = Vendor::all();

            return view('catalog',[
                'products' => $products,
                'categories' => $categories,
                'vendors' => $vendors,
                'page' => $page,
            ]);

        }else{

            return view('category',[
                'categories' => $categories,
                'page' => $page,
                'children' => $children
            ]);
        }

    }

    /**
     * @param $slug
     * @return array|\Illuminate\Contracts\View\Factory|\Illuminate\View\View|mixed
     */
    public function view($slug)
    {
        $product = Product::where('slug' , $slug)->firstOrFail();
        return view('product',[
            'product' => $product,
        ]);
    }

    /**
     * @param string $q
     * @return mixed
     */
    public function search(Request $request)
    {
        $q = $request->q;
        $products = $this->productRepository->search($q);
        return view('search_results',[
            'products' => $products,
            'page' => Page::find(1),
        ]);

    }
}
