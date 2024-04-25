<h1>All Units</h1>
<ul>
    @foreach($units as $unit)
        <li>{{ $unit->name }} - Capacity: {{ $unit->capacity }}</li>
    @endforeach
</ul>
