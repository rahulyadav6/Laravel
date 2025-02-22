<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserListController extends Controller
{
    public function users(){
        $users = [
            ["name"=>"ALICE","status"=>"Active", "role"=>"Admin"],
            ["name"=>"Bob","status"=>"inactive", "role"=>"User"],
            ["name"=>"Charlie","status"=>"Active", "role"=>"User"],
        ];
        return view('user', ['users' => $users]);
    }
}
