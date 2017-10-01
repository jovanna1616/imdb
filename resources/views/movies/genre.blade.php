@extends('layouts.master')

@section('title')
	All movies from genre {{ strtoupper(basename($_SERVER['PATH_INFO'])) }}
@endsection

@section('content')
	<div class="blog-post">
		@foreach($movies as $movie)
	        <h1 class="blog-post-title">{{ $movie->title }}</h1>
	        <p>{{ $movie->storyline }}</p>
	        <hr>
        @endforeach
    </div><!-- /.blog-post -->
@endsection