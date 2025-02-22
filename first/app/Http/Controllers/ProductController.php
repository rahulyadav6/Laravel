<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function products($productName = null){
        $products = [
            ["product_name" => "Pencil Box", "product_price"=>100],
            ["product_name" => "Notebook", "product_price"=>60],
            ["product_name" => "Drafter", "product_price"=>200],
        ];
        $discountPrice = 0;
        foreach($products as $product){
            if($product['product_name'] == $productName){
                $price = $product['product_price'];
                $discountPrice = $price - 0.1 * $price;
            }
        }

        return view('product', ['products' => $products, 'discountPrice' => $discountPrice, "productName"=> $productName]);
    }
}
