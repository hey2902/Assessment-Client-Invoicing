<!DOCTYPE html>

<h1>Edit Property</h1>
<form action="{{ route('properties.update', $property->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{ $property->name }}">
    <input type="text" name="address" value="{{ $property->address }}">
    <button type="submit">Update</button>
</form>
