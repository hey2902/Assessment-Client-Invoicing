<h1>Create Unit</h1>
<form action="{{ route('units.store') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Name">
    <input type="number" name="capacity" placeholder="Capacity">
    <!-- You may also include a dropdown/select to select the room here -->
    <button type="submit">Submit</button>
</form>
