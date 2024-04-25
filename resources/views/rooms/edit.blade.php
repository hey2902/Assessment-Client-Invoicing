<!DOCTYPE html>

<h1>Edit Room</h1>
<form action="{{ route('rooms.update', $room->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{ $room->name }}">
    <input type="number" name="capacity" value="{{ $room->capacity }}">
    <!-- You may also include a dropdown/select to select the property here -->
    <button type="submit">Update</button>
</form>
