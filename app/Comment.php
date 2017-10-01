<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
	protected $guarder = ['id'];
	protected $fillable = ['content'];

	const STORE_RULES = 
	[
		'movie_id' => 'required',
		'content' => 'required | min: 2'
	];

	public function movie() {
		return $this->belongsTo(Movie::class);
	}
}
