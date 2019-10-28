@extends('layout')

@section('content')
<h1>Créer un nouveau client</h1>
<form action="/tuto-laravel-nord-coders/public/clients" method="POST">
    @include('includes.form')
    <button type="submit" class="btn btn-primary">Ajouter le client</button>
</form>
@endsection