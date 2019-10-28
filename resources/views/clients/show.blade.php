@extends('layout')

@section('content')
    <h1>{{ $client->name }}</h1>
    <hr>
    <p><strong>Email : </strong> {{ $client->email }}</p>
    <p><strong>Entreprise : </strong> {{ $client->entreprise->name }}</p>
@endsection