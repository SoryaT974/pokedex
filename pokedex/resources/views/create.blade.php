@extends('layout')

@section('title', 'Nouveau Pokémon')

@section('content')
    <h1>Créer un pokémon</h1>
    
    <form action="{{ route('pokemon.create.post') }}" method="post">
        @csrf
        
        <div class="form-group">
            <label for="name">Nom</label>
            <input value="{{ old('name') }}" type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror">
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input value="{{ old('image') }}" type="text" name="image" id="image" class="form-control @error('image') is-invalid @enderror">
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
                    <option value="{{ $type->id }}">{{ $type->name }}</option>
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
            <button class="btn btn-primary">Créer</button>
        </div>
    </form>
@endsection