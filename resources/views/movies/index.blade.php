@extends('layouts.master')

@section('title')
	ALL MOVIES
@endsection

@section('content')
	<div class="blog-post">
		@foreach($movies as $movie)
	        <a href="{{ route('single-movie', ['id' => $movie->id]) }}" class="blog-post-title">{{ $movie->title }}</a>
	        <p>{{substr($movie->storyline, 0, 100) }}...</p>
	        <hr>
        @endforeach
    </div><!-- /.blog-post -->
@endsection