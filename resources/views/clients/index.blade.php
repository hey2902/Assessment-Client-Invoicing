<!DOCTYPE html>

@extends('layouts.app')

@section('content')
    <h1>Clients</h1>
    <a href="{{ route('clients.create') }}">Add Client</a>
    <ul>
        @foreach ($clients as $client)
            <li>{{ $client->name }}</li>
            <!-- Display other client details -->
            <a href="{{ route('clients.edit', $client->id) }}">Edit</a>
            <form action="{{ route('clients.destroy', $client->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        @endforeach
    </ul>
@endsection
