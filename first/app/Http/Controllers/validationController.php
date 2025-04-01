<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class validationController extends Controller
{
    public function vlaidation(){
        $request->validate([
            'name' => ['required', 'min:2', 'max:255'],
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        echo "$name <br>$email <br> $password";
    }
}
