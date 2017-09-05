@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>Log in</h1>
    </div>
    
    <div class="row">
        <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
            
            {!! Form::open(['route' => 'login.post']) !!}
                <div class="form-group">
                    {!! Form::label('email', 'Email') !!}
                    {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('password', 'Password') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>
                
                {!! Form::submit('Log in', ['class' => 'btn btn-primary btn-block']) !!}
            {!! Form::close() !!}
            
            <p>New user? {!! link_to_route('signup.get', 'Sign up now!') !!}</p>
        </div>
    </div>
@endsection