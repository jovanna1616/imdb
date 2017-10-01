<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Comment;

class CommentsController extends Controller
{
    public function store(Request $request, $movieId) {

    	$movie = Movie::find($movieId);
    	$request->validate(Comment::STORE_RULES);
    	$movie->comments()->create($request->all());
    	return redirect()->route(
    		'single-movie',
    		['id' => $movieId]
    	);

    }
}
