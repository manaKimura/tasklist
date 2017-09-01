@extends('layouts.app')

@section('content')

    <h1>id: {{ $task->id }} のメッセージ編集ページ</h1>
    

    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}

        {!! Form::label('content', 'メッセージ:') !!}
        {!! Form::text('content') !!}
        
        {!! Form::label('status', '状況:') !!}
        {!! Form::select('status',[
            '完了' => '完了',
            '作業中' => '作業中',
            '途中' => '途中',
            '保留' => '保留']
            ) !!}

        {!! Form::submit('更新') !!}

    {!! Form::close() !!}

@endsection