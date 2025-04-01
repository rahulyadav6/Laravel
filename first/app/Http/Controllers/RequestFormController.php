<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestFormController extends Controller
{
    public function index(Request $request){
        $name = $request->input('name');
        // $name = $request->name;  // same as above 
        $username = $request->input('username');
        $password = $request->input('password');
        echo "The name is $name <br>
        The username is $username<br>
        The password is $password";

        // has method (it is like and operation)
        if($request->has(['name', 'username', 'email'])){
            echo "<br>All the Mentioned attributes present";
        }else{
            echo "<br>All the Mentioned attributes are not present";
        }
        // has any (it is like or operation)
        if($request->hasAny(['name', 'address', 'email'])){
            echo "<br>Mentioned attributes are present";
        }else{
            echo "<br>Mentioned attributes are not present";
        }
        
        // filled 
        if($request->filled(['name'])){
            echo "<br>Mentioned attributes are  filled";
        }else{
            echo "<br>Mentioned attributes are not filled";
        }
        // any filled 
        if($request->anyFilled(['name','username','email'])){
            echo "<br>Any Filled: Mentioned attributes are  filled";
        }else{
            echo "<br>Any Filled: Mentioned attributes are not filled";
        }

        // is not filled 
        

        // missing  
        if($request->missing(['name'])){
            echo "<br>Mentioned attribute is missing";
        }else{
            echo "<br>Mentioned attribute present";
        }

        // whenfilled   Runs a callback only if the given input is present and not empty.
        $request->whenFilled('name', function($name){
            // This runs only if 'name' is present and not empty    
            echo("<br>Your name is $name");
        });

        // whenHas 
        $request->whenHas('name', function($name){
            echo("<br>When Has: Mentioned attribute is present");
        });


    }
    
}
