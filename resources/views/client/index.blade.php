@extends('layouts.master')

@section('content')
    @parent
    <table>
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
    </table>
@stop