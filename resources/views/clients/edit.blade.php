@extends('layout')

@section('content')
<h1>Editer le profil de {{ $client->name }}</h1>
<form action="/tuto-laravel-nord-coders/public/clients/{{ $client->id }}" method="POST">
    @method('PATCH')
    @include('includes.form')
    <button type="submit" class="btn btn-primary">Sauvegarder les informations</button>
</form>
@endsection