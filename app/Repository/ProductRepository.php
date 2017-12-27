<?php
/**
 * Created by PhpStorm.
 * User: HOME
 * Date: 26.12.2017
 * Time: 19:24
 */
namespace App\Repository;

use App\Model\Product;

class ProductRepository
{
    /**
     * @param $params
     * @param $page
     * @return mixed
     */
    public function filter($params,$page)
    {
        $products = Product::where('category_id',$page->id);
        if(!empty($params['sortby'])){
            $products = $products->orderBy('updated_at',$params['sortby']);
        } else{
            $products = $products->orderBy('updated_at','DESC');
        }
        $products->get();
        if(isset($params['per_page'])){
            $products = $products->paginate($params['per_page']);
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