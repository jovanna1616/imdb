@extends('layouts.master')

@section('title')
	{{ $movie->title }}
@endsection

@section('movies')
	<div class="blog-post">
		
	        
	        <p>{{$movie->storyline }}</p>        
    </div><!-- /.blog-post -->
@endsection