<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function delivered(){
        return view('Delivered order');
    }
    public function pending(){
        return view('Pending order');
    }
    public function totalorders(){
        return view('Total orders');
    }
}
