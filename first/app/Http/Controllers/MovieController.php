<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function movies()
    {
        $movies = [
            (object)[
                "name" => "Intensteller",
                "rating" => "8.5",
                "top_rated" => "Top Rated",
                "category" => "Sci-Fi"
            ],
            (object)[
                "name" => "Avengers Endgame",
                "rating" => "7.9",
                "top_rated" => "Not Top Rated",
                "category" => "Action"
            ],
            (object)[
                "name" => "Movie2",
                "rating" => "6.5",
                "top_rated" => "Top Rated",
                "category" => "Romance"
            ],
        ];

        return view("movieslist",["movies" => $movies]);
    }
}
