@extends('layouts.app')

@section('content')
    <div class="col-xs-12 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
        <h1>{{ Auth::user()->name }}さんのタスク詳細</h1>
    </div>
    
    <div class="col-xs-12 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
        <table class="table table-striped">
        <tr>
            <th>id</th>
            <td>{{ $task->id }}</td>
        </tr>
        <tr>
            <th>タスク内容</th>
            <td>{{ $task->content }}</td>
        </tr>
        <tr>
            <th>状況</th>
            <td>{{ $task->status }}</td>
        </tr>
    </table>
    </div>
    <div class="col-xs-12 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
        {!! link_to_route('tasks.edit', 'このタスクを編集', ['id' => $task->id], ['class' => 'btn btn-warning']) !!}
    </div>
    <div class="col-xs-12 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
        {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
            {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    </div>
    

@endsection