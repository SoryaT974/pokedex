@extends('layout')

@section('title', 'Accueil')

@section('content')
    <h1>Pokedex</h1>
    
    
    <ul class="list-unstyled">
            @foreach($pokemons as $pokemon)
            <li>
                
                <div>
                    <p>{{ $pokemon['name'] }}</p>
                    <p>{{ $pokemon['url'] }}</p>
                    <figure>
                                
                    </figure>
                    <p></p>
                </div>
                
            </li>
            @endforeach
    </ul>
@endsection