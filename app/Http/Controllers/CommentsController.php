<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Comment;

class CommentsController extends Controller
{
    public function store(Request $request, $movie_id) {

    	$movie = Movie::find($movie_id);
    	$request->validate(Comment::STORE_RULES);
    	$movie->comments()->create($request->all());
    	return redirect()->route(
    		'single-movie',
    		['id' => $movie_id]
    	);

    }
}
