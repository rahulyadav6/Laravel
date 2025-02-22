<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController
{
    function show(){
        return "Student List";
    }
    function add(){
        return "add new student";
    }
}
