<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function index(Request $request){
        $path = $request->path();
        echo("The path is $path <br>");

        $is = $request->is('request/*');
        echo "The return value is $is<br>";

        if($request->is('admin/*')){
            echo("It starts with the given prefix");
        }else{
            echo "It does not start with the given prefix";
        }

        // is Method() method

        $isMethod = $request->isMethod("GET");
        echo "The result if isMethod() is $isMethod <br>";

        // metho method
        $method = $request->method("GET");
        echo "The result if method() is $method";

        // url 
        $url = $request->url();
        echo "<br>The url is $url";

        $fullurl = $request->fullurl();
        echo "<br>The url is $fullurl";

        // routesIs()

        if($request->routeIs('admin')){
            echo "The name matches<br>";
        }else{
            echo "The name does not match <br>";
        }

        //query
        $queryname = $request->query('name', 'Md Tauhibur');
        $queryage = $request->query('age', 20);
        echo "The name is $queryname and age is $queryage";

    }
}
