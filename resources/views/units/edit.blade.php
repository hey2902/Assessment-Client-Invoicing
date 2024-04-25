<h1>Edit Unit</h1>
<form action="{{ route('units.update', $unit->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{ $unit->name }}">
    <input type="number" name="capacity" value="{{ $unit->capacity }}">
    <!-- You may also include a dropdown/select to select the room here -->
    <button type="submit">Update</button>
</form>
