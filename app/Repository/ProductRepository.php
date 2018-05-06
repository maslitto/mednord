<?php
/**
 * Created by PhpStorm.
 * User: HOME
 * Date: 26.12.2017
 * Time: 19:24
 */
namespace App\Repository;

use App\Model\Product;
use App\Model\Page;

class ProductRepository
{
    /**
     * @param $params
     * @param $page
     * @return mixed
     */
    public function filter($params, $page = NULL)
    {
        if($page == NULL){
            $leaves = Page::find(2)->allLeaves()->get();
            $ids = [];
            foreach($leaves as $leaf){
                $ids[] = $leaf->id;
            }
            $products = Product::whereIn('category_id', $ids);
        } else{
            $products = Product::where('category_id',$page->id);
        }

        if(!empty($params['sortby'])){
            $products = $products->orderBy('updated_at',$params['sortby']);
        } else{
            $products = $products->orderBy('updated_at','DESC');
        }
        $products->get();
        if(isset($params['per-page'])){
            $products = $products->paginate($params['per-page']);
        } else{
            $products = $products->paginate(12);
        }

        return $products;
    }

    /**
     * @param $q
     * @return mixed
     */
    public function search($q)
    {
        $products = Product::orWhere('title','LIKE','%'.$q.'%')
            ->orWhere('metadescription','LIKE','%'.$q.'%')
            ->orWhere('text','LIKE','%'.$q.'%')
            ->paginate(12);
        return $products;
    }
}