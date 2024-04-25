<!DOCTYPE html>

<h1>Create Client</h1>
<form action="{{ route('clients.store') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Name">
    <input type="email" name="email" placeholder="Email">
    <input type="text" name="phone" placeholder="Phone">
    <button type="submit">Submit</button>
</form>
