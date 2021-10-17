@extends('layout')

@section('title', 'Pokémon')

@section('content')
    <h1>Liste des pokémons</h1>
    <ul class="list-unstyled">
        @foreach($pokemons as $pokemon)
        <li>
            <div>
                <p>{{ $pokemon->name }}</p>
                <a href="{{ route('pokemon', ['id' => $pokemon->id]) }}">Voir détails</a>
            </div>
        </li>
        @endforeach
    </ul>
    {{ $pokemons->links() }}
@endsection