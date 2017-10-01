@extends('layouts.master')

@section('title')
	{{ $movie->title }}
@endsection

@section('content')
	<div class="blog-post">
		<p>Director: {{ $movie->director }}</p>
		<p>Year of publishing: {{ $movie->year }}</p>
		<p>Genre: <a href="#">{{ $movie->genre }}</a></p>
        <p>{{$movie->storyline }}</p>        
    </div><!-- /.blog-post -->


@if(count($movie->comments))
    <hr/>
    <h4>Comments:</h4>
    <ul class="list-unstyled">
        @foreach($movie->comments as $comment)
            <li>
                <p>
                    <strong>Comment:</strong> {{ $comment->content }}
                </p>
                <p>
                    created at: {{ $comment->created_at->diffForHumans() }}
                </p>
            </li>
        @endforeach
    </ul>
@endif

<h4>Post a comment:</h4>
        <form method="POST" action="{{ route('comments-movie', ['movie_id' => $movie->id]) }}">

	        {{ csrf_field() }}

	        

	        <input type="hidden" name="movie_id" value="{{ $movie->id }}">

	        <div class="form-group">
	            <textarea class="form-control" id="content" name="content"></textarea>

	            @include(
		            'partials.error-messages', 
		            ['fieldTitle' => 'content']
	            )
	        </div>

	        <div class="form-group">
	            <button type="submit" class="btn btn-primary">Publish</button>
	        </div>

		</form>
	@endsection