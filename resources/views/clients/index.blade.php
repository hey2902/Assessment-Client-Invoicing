<!DOCTYPE html>

<h1>All Clients</h1>
<ul>
    @foreach($clients as $client)
        <li>{{ $client->name }} - {{ $client->email }} - {{ $client->phone }}</li>
    @endforeach
</ul>
