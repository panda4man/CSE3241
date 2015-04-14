@extends('layouts.master')

@section('content')
	<div class="row">
		{{link_to_route('profiles.edit', 'Edit', array($user->id))}}
		<div class="col-s-12">{{$user->name}}</div>
		<div class="col-s-12">{{$user->username}}</div>
		<div class="col-s-12">{{$user->email}}</div>
		<div class="col-s-12">{{$user->address}}</div>
	</div>
@stop