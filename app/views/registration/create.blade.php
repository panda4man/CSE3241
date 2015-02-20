@extends('layouts.login')

@section('content')
    <div class="row">
        <div class="col-sm-offset-3 col-sm-6 col-md-offset-4 col-md-4">
        @if ($alert = Session::get('error'))
            <div class="alert alert-warning">
                {{ $alert }}
            </div>
        @endif
        <center><h1>Register</h1></center>
        {{ Form::open(array('url' => 'sign-up', 'class' => 'form-horizontal')) }}
        <div class="form-group">
            {{ Form::label('name', 'Full Name', array('class' => 'control-label col-sm-4')) }}
            <div class="col-sm-8">
            {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
            </div>
             @if ($errors->first('name'))
                <div class="col-sm-12">
                    <div class="alert alert-danger alert-dismissible" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <strong>{{ $errors->first('name') }}</strong>
                    </div>
                </div>
                @endif
          </div>
          <div class="form-group">
            {{ Form::label('username', 'Username', array('class' => 'control-label col-sm-4')) }}
            <div class="col-sm-8">
                {{ Form::text('username', Input::old('username'), array('class' => 'form-control')) }}
            </div>
             @if ($errors->first('username'))
                <div class="col-sm-12">
                    <div class="alert alert-danger alert-dismissible" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <strong>{{ $errors->first('username') }}</strong>
                    </div>
                </div>
                @endif
          </div>
          <div class="form-group">
            {{ Form::label('email', 'Email', array('class' => 'control-label col-sm-4')) }}
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
                {{ Form::label('password', 'Password', array('class' => 'control-label col-sm-4')) }}
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
            <div class="form-group">
          {{ Form::label('password_confirmation', 'Password confirm', array('class' => 'control-label col-sm-4')) }}
            <div class="col-sm-8">
            {{ Form::password('password_confirmation', array('class' => 'form-control')) }}
            </div>
             @if ($errors->first('password_confirmation'))
                <div class="col-sm-12">
                    <div class="alert alert-danger alert-dismissible" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <strong>{{ $errors->first('password_confirmation') }}</strong>
                    </div>
                </div>
                @endif
            </div>
          <center>{{ Form::submit('Get Started', array('class' => 'btn')) }}</center>

        {{ Form::close() }}
        </div>
    </div>
@stop