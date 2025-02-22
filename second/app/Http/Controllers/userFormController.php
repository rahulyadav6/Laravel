<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userFormController
{
    function addUser(Request $requset){
        // return $requset;
        echo $requset->username;
        echo"<br>";
        echo $requset->email;
        echo"<br>";
        echo $requset->city;
        echo"<br>";
    }
}
