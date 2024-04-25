<!DOCTYPE html>

<!-- resources/views/welcome.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Welcome to Your Laravel Application</div>

                    <div class="card-body">
                        <p>Welcome to our application! This is the homepage where you can get started.</p>
                        <p>Here are a few things you can do:</p>
                        <ul>
                            <li><a href="{{ route('clients.index') }}">View Clients</a></li>
                            <li><a href="{{ route('clients.create') }}">Add a Client</a></li>
                            <!-- You can add more links or instructions here -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
