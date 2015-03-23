@extends('layouts.master')

@section('content')
	<div class="row">
	<div class="col-sm-12">
		@if ($alert = Session::get('error'))
            <div class="alert alert-warning">
                {{ $alert }}
            </div>
        @endif
	</div>
	<h1>Edit User</h1>
		{{ Form::model($user, array('method' => 'PATCH', 'route' =>
		 array('profiles.update', $user->id), 'class' => 'form-horizontal')) }}
		    <ul>
		        <li>
		            {{ Form::label('username', 'Username:') }}
		            {{ Form::text('username') }}
		        </li>
		        <li>
		            {{ Form::label('email', 'Email:') }}
		            {{ Form::text('email') }}
		        </li>
		        <li>
		            {{ Form::label('name', 'Name:') }}
		            {{ Form::text('name') }}
		        </li>
		        <li>
		            {{ Form::submit('Update', array('class' => 'btn btn-info')) }}
		            {{ link_to_route('profiles.show', 'Cancel', $user->
		id, array('class' => 'btn')) }}
		        </li>
		    </ul>
		{{ Form::close() }}

		@if ($errors->any())
		    <ul>
		        {{ implode('', $errors->all('<li class="error">:message</li>')) }}
		    </ul>
		@endif
	</div>
@stop