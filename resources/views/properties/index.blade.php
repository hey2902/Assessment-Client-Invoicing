<!DOCTYPE html>

<h1>All Properties</h1>
<ul>
    @foreach($properties as $property)
        <li>{{ $property->name }} - {{ $property->address }}</li>
    @endforeach
</ul>
