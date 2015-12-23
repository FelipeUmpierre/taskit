@extends('layouts.master')

@section('content')
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Task</th>
                <th>Project</th>
                <th>Client</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($tasks as $task)
                <tr>
                    <td>{{ $task->id }}</td>
                    <td>{{ $task->title }}</td>
                    <td>{{ $task->project->name }}</td>
                    <td>{{ $task->project->client->name }}</td>
                </tr>
            @empty
                <tr>
                    <td>No found</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@stop