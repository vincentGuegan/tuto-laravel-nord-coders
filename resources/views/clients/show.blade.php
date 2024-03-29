@extends('layout')

@section('content')
    <h1>{{ $client->name }}</h1>
    <a href="/tuto-laravel-nord-coders/public/clients/{{ $client->id }}/edit" class="btn btn-secondary my-3">Editer</a>
    <form action="/tuto-laravel-nord-coders/public/clients/{{ $client->id }}" method="POST" style="display: inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Supprimer</button>
    </form>
    <hr>
    <p><strong>Email : </strong> {{ $client->email }}</p>
    <p><strong>Entreprise : </strong> {{ $client->entreprise->name }}</p>
@endsection