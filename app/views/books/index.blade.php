@extends('layouts.master')

@section('content')
	@foreach($books as $book)
	<div class="row">
		<div class="col-sm-12">
			<p>Book: {{$book->title}}, Year: {{$book->year}}, Price: {{$book->price}}, Stock: {{$book->stock}}</p>
		</div>
	</div>
	@endforeach
@stop