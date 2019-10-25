@extends('layout')

@section('content')
<h1>Clients</h1>
<a href="/tuto-laravel-nord-coders/public/clients/create" class="btn btn-primary my-3">Nouveau client</a>
<ul>
    @foreach($clients as $client)
        <li>{{ $client->name }} <em class = "text-muted">{{ $client->entreprise->name }} </em></li>
    @endforeach
</ul>
@endsection