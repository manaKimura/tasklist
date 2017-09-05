@extends('layouts.app')

@section('content')
    @if (Auth::check())
    <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
        <div class="row">
            <aside class="col-md-4">
            </aside>
            <div class="col-xs-8">
                @if (count($tasks) > 0)
                    @include('tasks.index', ['tasks' => $tasks])
                @endif
            </div>
        </div>
    </div>
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>Welcome to the Microposts</h1>
                {!! link_to_route('signup.get', 'Sign up now!', null, ['class' => 'btn btn-lg btn-primary']) !!}
                {!! link_to_route('login.get', 'Login',  null,['class' => 'btn btn-lg btn-primary']) !!} 
            </div>
        </div>
    @endif
@endsection