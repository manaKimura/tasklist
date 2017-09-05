@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>Sign up</h1>
    </div>
    
    <div class="row">
        <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
            
            {!! Form::open(['route' => 'signup.post']) !!}
                <div class="form-group">
                    {!! Form::label('name', 'Name') !!}
                    {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('email', 'Email') !!}
                    {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('password', 'Password') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('password_confirmation', 'Confirmation') !!}
                    {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
                </div>
                
                {!! Form::submit('Sign up', ['class' => 'btn btn-primary btn-block']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection