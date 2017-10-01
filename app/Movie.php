<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon;

class Movie extends Model
{
	protected $guarded = ['id'];

	protected $fillable = ['title', 'genre', 'director', 'year', 'storyline'];
	
	const STORE_RULES = [
        'title' => 'required | max: 55',
        'genre' => 'required | max: 20',
        'year' => 'required | numeric | between:1900, {year}',
        'storyline' => 'required | max: 1000'
    ];

	static function getMovies() {
		return self::latest()->get();
	}

	public function comments() {
		return $this->hasMany(Comment::class);
	}
}
