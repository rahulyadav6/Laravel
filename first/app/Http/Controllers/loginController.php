<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function viewloginpage()
    {
        return view('login');
    }
    public function loginsession(Request $request)
    {
        $request->session()->put('data', $request->input());
        if ($request->session()->has('data')) {
            return redirect('profile');
        }
    }
    public function profile(){
        if(!session()->has('data')){
            return redirect('viewloginpage');
        }
        return view('profile');
    }
    public function logout(Request $request)
    {
        session()->forget('data');
    return redirect('viewloginpage');
    }
}