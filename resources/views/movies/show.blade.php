@extends('layouts.master')

@section('title')
	{{ $movie->title }}
@endsection

@section('content')
	<div class="blog-post">
        <p>{{$movie->storyline }}</p>        
    </div><!-- /.blog-post -->
@endsection