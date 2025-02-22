<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class detailsController extends Controller
{
    public function details($studentName = null){
        $detials = [
            ["studentName" => "Rahul kumar yadav", "RegNo"=>12213785],
            ["studentName" => "Bishal moktan", "RegNo"=>1223523],
            ["studentName" => "Kaushal Thakur", "RegNo"=>5235423],
        ];
        return view('details',['details' => $detials]);
    }
}
