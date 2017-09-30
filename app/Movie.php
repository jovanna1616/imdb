<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
	protected $guarded = ['id'];
	protected $fillable = ['title', 'genre', 'director', 'year', 'storyline'];

	static function getMovies() {
		return self::latest()->get();
	}
}
