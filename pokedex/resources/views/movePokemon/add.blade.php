@extends('layout')

@section('title', 'Ajouter une attaque au Pokémon')

@section('content')
    <h1>Ajouter une attque pour le pokémon {{ $pokemon->id }}</h1>
    
    <form action="{{ route('movePokemon.add.post', ['id' => $pokemon->id]) }}" method="post">
        @csrf
        <div class="form-group">
            <label for="move">move</label>
            <select name="move" id="move">
                @foreach($moves as $move)
                    <option value="{{ $move->id }}">{{ $move->name }}</option>
                @endforeach
            </select>
            @error('type')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mt-2">
        <button class="btn btn-primary">Ajouter</button>
            <a href="{{ route('pokemon', ['id' => $pokemon->id]) }}" class="btn btn-default">Retour à la description</button>
        </div>
    </form>
@endsection