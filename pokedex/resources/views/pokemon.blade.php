@extends('layout')

@section('title', 'Pokémon')

@section('content')
    <h1>Fiche pokémon</h1>
    <a href="{{ route('pokemon.update', ['id' => $pokemon->id]) }}" class="btn btn-info">Modifier</a>
    <a href="{{ route('pokemon.delete', ['id' => $pokemon->id]) }}" class="btn btn-danger">Supprimer</a>
    <section>
        <h2>{{ $pokemon->name }}</h2>
        <p>{{ $pokemon->id }}</p>
        <img src={{ $pokemon->image }}>
        <h3>Type</h3>
        <p>{{ $pokemon->type->name }}</p>
        <h3>Attaques</h3>
        @foreach($pokemon->moves as $move)
        <div class="border">
            <p>Nom : {{ $move->name }}</p>
            <p>Puissance : {{ $move->power }}</p>
            <p>Précision : {{ $move->accuracy }}</p>
        </div>
        @endforeach
    </section>
@endsection