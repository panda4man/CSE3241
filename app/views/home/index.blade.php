@extends('layouts.login')

@section('content')
	<div class="row">
		<div class="col col-sm-6 col-sm-offset-3">
			<h2>Welcome to the CSE 3241 Final Project</h2>
			<p>Inside is a sweet bookstore!</p>
			<a class="btn btn-default" href="{{URL::to('login')}}">Enter</a>
		</div>
	</div>
@stop