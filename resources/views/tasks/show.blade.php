@extends('layouts.app')

@section('content')

    <h1>id = {{ $task->id }}のタスク詳細ページ</h1>

    <p>状況: {{ $task->status }}</p><p>タスク内容: {{ $task->content }}</p>

    {!! link_to_route('tasks.edit', 'このタスクを編集', ['id' => $task->id]) !!}
    
    @if (Auth::user()->id == $task->user_id)
        {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
            {!! Form::submit('削除') !!}
        {!! Form::close() !!}
    @endif

@endsection