<!DOCTYPE html>

@extends('layouts.app')

@section('content')
    <h1>Add Client</h1>
    <form id="clientForm" action="{{ route('clients.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone" required>
        </div>
        <button type="submit">Submit</button>
    </form>
@endsection
