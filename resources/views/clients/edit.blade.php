<!DOCTYPE html>

<h1>Edit Client</h1>
<form action="{{ route('clients.update', $client->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{ $client->name }}">
    <button type="submit">Update</button>
</form>
