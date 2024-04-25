<!DOCTYPE html>

<h1>Create Room</h1>
<form action="{{ route('rooms.store') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Name">
    <input type="number" name="capacity" placeholder="Capacity">
    <!-- You may also include a dropdown/select to select the property here -->
    <button type="submit">Submit</button>
</form>
