@extends('layouts.app')

@section('content')

@include('layouts.navbar')
<div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
    <h1>To do リスト　一覧</h1>

@if (count($tasks) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>タスク</th>
                    <th>状況</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tasks as $task)
                    <tr>
                        <td>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!}</td>
                        <td>{{ $task->content }}</td>
                        <td>{{ $task->status }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    {!! link_to_route('tasks.create', 'タスクの投稿', null, ['class' => 'btn btn-primary']) !!}
</div>
@endsection
