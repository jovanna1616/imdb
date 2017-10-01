<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class GenresController extends Controller
{
    
    public function show($genre)
    {
        $selectedByGenre = Movie::where('genre', 'like', '%' . $genre . '%')->get();
        return view('movies.genre', ['movies' => $selectedByGenre]);

    }

}
