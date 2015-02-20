@extends('layouts.login')

@section('content')
    <div class="row">
        <div class="col-sm-offset-3 col-sm-6 col-md-offset-4 col-md-4">
        <center><h1>Login</h1></center>
    	{{ Form::open(array( 'url'=> 'login', 'class' => 'form-horizontal')) }}
            <div class="form-group">
                {{ Form::label('email', 'Email Address', array('class' => 'col-sm-4 control-label')) }}
                <div class="col-sm-8">
                    {{ Form::text('email', Input::old('email'), array('class' => 'form-control')) }}
                </div>
                @if ($errors->first('email'))
                <div class="col-sm-12">
                    <div class="alert alert-danger alert-dismissible" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <strong>{{ $errors->first('email') }}</strong>
                    </div>
                </div>
                @endif
            </div>
            <div class="form-group">
                {{ Form::label('password', 'Password', array('class' => 'col-sm-4 control-label')) }}
                <div class="col-sm-8">
                    {{ Form::password('password', array('class' => 'form-control')) }}
                </div>
                @if ($errors->first('password'))
                <div class="col-sm-12">
                    <div class="alert alert-danger alert-dismissible" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <strong>{{ $errors->first('password') }}</strong>
                    </div>
                </div>
                @endif
            </div>
            <center>{{ Form::submit('Login', array('class' => 'btn')) }}</center>
        {{ Form::close() }}
        <br>
        <center><p>Don't have an account? <a href="{{ URL::to('sign-up') }}">Sign Up!</a></p></center>
        </div>
    </div>
@stop