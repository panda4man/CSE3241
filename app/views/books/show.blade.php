@extends('layouts.master')

@section('content')
	<div class="row">
		<div class="col-sm-12">{{$book}}</div>
	</div>
	<hr>
	<h2>Ratings | Average Rating: {{round($book->average_rating, 2)}}</h2>
	@foreach ($book->comments as $comment)
		<div class="row comment">
			<div class="col-sm-3"><h4>{{$comment->title}}</h4></div>
			<div class="col-sm-2"><h4>By: {{$comment->user->username}}</h4></div>
			<div class="col-sm-2"><h4>Rating: {{$comment->rating}}</h4></div>
			<div class="col-sm-2"><h4>Posted: {{$comment->created_at}}</h4></div>
			<div class="col-sm-12">{{$comment->text}}</div>
		</div>
	@endforeach
	<hr>
	{{Form::open(array('route' => 'comments.store'))}}
		{{Form::hidden('user_id', $user->id)}}
		{{Form::hidden('book_id', $book->id)}}
		{{ Form::label('title', 'Title:') }}
		{{ Form::text('title') }}
		{{ Form::label('rating', 'Rating:') }}
		{{ Form::number('rating') }}
		{{ Form::label('text', 'Comment:') }}
		{{ Form::textarea('text') }}
		{{ Form::submit('Submit', array('class' => 'btn btn-info')) }}
	{{Form::close()}}
@stop