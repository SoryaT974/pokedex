@extends('layout')

@section('title', 'Pokémon')

@section('content')
    <h1>Fiche pokémon</h1>
    <section>
        <h2>{{ $pokemon->name }}</h2>
        <img src={{ $pokemon->image }}>
    </section>
@endsection