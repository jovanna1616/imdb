<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use Carbon\Carbon;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::getMovies();
        return view('movies.index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('movies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dinamicly create '{year}' from Movie Model;
        // need to include Carbon\Carbon to use year() method. We call that method $now->year
        $now = new Carbon();
        $rules = Movie::STORE_RULES;
        
        $rules['year'] = str_replace('{year}', $now->year + 1, $rules['year']);
        
        // 1. izvrsi validaciju unetih podataka kroz formu
        $request->validate($rules);
        // 2. salji i sacuvaj u bazi
        $movie = Movie::create($request->all());

        // 3. redirektuj na stranicu sa svim filovima
        return redirect()->route('all-movies');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movie = Movie::with('comments')->find($id);
        return view('movies/show', compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
