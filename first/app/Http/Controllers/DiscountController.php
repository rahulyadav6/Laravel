<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiscountController extends Controller
{
    private function isDiscountValid($discount){
        return $discount>0 && $discount<=50;
    }
    public function calculateDiscount($price, $discount){
        if($this->isDiscountValid($discount)){
            $finalPrice = $price - (($discount * $price)/100);
            return "Thi final pirce after applying $discount% is $finalPrice";
        }
        return "Discount cannot be $discount";
    }
}
