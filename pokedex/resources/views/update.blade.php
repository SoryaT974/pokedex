@extends('layout')

@section('title', 'Modification du Pokémon')

@section('content')
    <h1>Modifier le pokémon {{ $pokemon->id }}</h1>
    
    <form action="{{ route('pokemon.update.post', ['id' => $pokemon->id]) }}" method="post">
        @csrf
        
        <div class="form-group">
            <label for="name">Nom</label>
            <input value="{{ $pokemon->name }}" type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror">
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input value="{{ $pokemon->image }}" type="text" name="image" id="image" class="form-control @error('image') is-invalid @enderror">
            @error('image')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="type">Type</label>
            <select name="type" id="">
                @foreach($types as $type)
                    <option value="{{ $type->id }}" @if ($pokemon->type_id == $type->id) selected @endif>{{ $type->name }}</option>
                @endforeach
            </select>
            @error('type')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="moves">Attaques</label>
        </div>
        <div class="mt-2">
            <button class="btn btn-primary">Modifier</button>
            <a href="{{ route('pokemon', ['id' => $pokemon->id]) }}" class="btn btn-default">Retour à la description</button>
        </div>
    </form>
@endsection