<!DOCTYPE html>

<h1>Create Property</h1>
<form action="{{ route('properties.store') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Name">
    <input type="text" name="address" placeholder="Address">
    <button type="submit">Submit</button>
</form>
