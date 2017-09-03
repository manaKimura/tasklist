@extends('layouts.app')

@section('content')
<div class="col-xs-12 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
        <h1>タスク新規作成ページ</h1>
    

    {!! Form::model($task, ['route' => 'tasks.store']) !!}

        {!! Form::label('content', 'タスク:') !!}
        {!! Form::text('content', null, ['class' => 'form-control']) !!}
        
        {!! Form::label('status', '状況:') !!}
        {!! Form::select('status',[
            '完了' => '完了',
            '作業中' => '作業中',
            '途中' => '途中',
            '保留' => '保留'], null, ['class' => 'form-control']
            ) !!}

        {!! Form::submit('投稿', ['class' => 'btn btn-success']) !!}

    {!! Form::close() !!}
    </div>

@endsection