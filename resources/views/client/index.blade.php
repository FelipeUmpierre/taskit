@extends('layouts.master')

@section('content')
    @parent
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Cliente</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($clients as $client)
                <tr>
                    <td>{{ $client->id }}</td>
                    <td>{{ $client->name }}</td>
                </tr>
            @empty
                <tr>
                    <td>No found</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@stop