@extends('layouts.master')

@section('content')
	<div class="row">
		<div class="col-sm-12">{{$book}}</div>
	</div>
	<hr>
	<h2>Ratings</h2>
	@foreach ($book->comments as $comment)
		<div class="row comment">
			<div class="col-sm-3">{{$comment->title}}</div>
			<div class="col-sm-2">By: {{$comment->user->name}}</div>
			<div class="col-sm-1">Rating: {{$comment->rating}}</div>
			<div class="col-sm-12">{{$comment->text}}</div>
		</div>
	@endforeach
@stop