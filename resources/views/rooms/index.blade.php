<!DOCTYPE html>

<h1>All Rooms</h1>
<ul>
    @foreach($rooms as $room)
        <li>{{ $room->name }} - Capacity: {{ $room->capacity }}</li>
    @endforeach
</ul>
