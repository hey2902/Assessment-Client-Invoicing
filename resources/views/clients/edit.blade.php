<!DOCTYPE html>

<h1>Edit Client</h1>
<form action="{{ route('clients.update', $client->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{ $client->name }}">
    <input type="email" name="email" value="{{ $client->email }}">
    <input type="text" name="phone" value="{{ $client->phone }}">
    <button type="submit">Update</button>
</form>
