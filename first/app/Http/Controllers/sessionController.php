<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sessionController extends Controller
{
    public function storeSession(Request $request){
        // $request->session()->put('name', 'Rahul');

        // $request->session()->put(['name' => 'Rahul', 'email' =>'rahul@gmail.com']);

        // session(['name'=>'Rahul', 'email'=>'rahul@gmail.com']);

        $request->session()->push('address','Delhi');
        $request->session()->push('address','Mumbai');

        return "Session data has been stored";
    }
    
    public function getSession(Request $request){
        // $name = $request->session()->get('name');
        // $email = $request->session()->get('email');
        // return response()->json([
        //     'name'=>$name,
        //     'email'=>$email
        // ]);

        // return $request->session()->all();

        // if($request->session()->has('name')){
        //     return "Session data is available";
        // }else{
        //     return "Session data  is not available";
        // }

        if($request->session()->exists('name')){
            return "Session data is available";
        }else{
            return "Session data ia not available";
        }
    }

    public function deleteSession(Request $request){
        // return $request->session()->flush();

        // return $request->forget(['name','email']);

        return $request->session()->pull('name','123');
    }

}
