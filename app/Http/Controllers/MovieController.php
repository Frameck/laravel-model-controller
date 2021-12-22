<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    function index() {
        // $daRicercare = StaticRequest::query()["ricerca"] ?? "";
        $data = Movie::all();
        
        return view("movies.index", [
            "movies" => $data
        ]);
    }
}
