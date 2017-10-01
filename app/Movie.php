<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon;

class Movie extends Model
{
	protected $guarded = ['id'];

	protected $fillable = ['title', 'genre', 'director', 'year', 'storyline'];
	
	const STORE_RULES = [
        'title' => 'required | max: 25',
        'genre' => 'required | max: 20',
        'year' => 'required | between:1900, {year}',
        'storyline' => 'required | max: 1000'
    ];

	static function getMovies() {
		return self::latest()->get();
	}
}
