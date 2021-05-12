@extends('layout.index')

@section('content')
    @include('partial.bo.navAdmin')
    <section class="container mt-5">
        @include('layout.flash')
        <h4 class="mb-4">Créer une nouvelle équipe</h4>
        <form action={{route('equipe.store')}} method="post" class="w-75 mx-auto">
            @csrf

            <div class="form-group">
                <label for="nom">Nom de l'équipe :</label>
                <input type="text" id="nom" name="nom" class="form-control @error('nom') is-invalid @enderror" value="{{old('nom')}}">
                @error('nom')
                    <span class="invalid-feedback">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="ville">Ville :</label>
                <input type="text" id="ville" name="ville" class="form-control @error('ville') is-invalid @enderror" value="{{old('ville')}}">
                @error('ville')
                    <span class="invalid-feedback">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="pays">Pays :</label>
                <input type="text" id="pays" name="pays" class="form-control @error('pays') is-invalid @enderror" value="{{old('pays')}}">
                @error('pays')
                    <span class="invalid-feedback">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="nombre">Nombre de participants</label>
                <select name="nombre" id="nombre" class="form-control">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select>
                @error('nombre')
                    <span class="invalid-feedback">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="continent">Continent :</label>
                <select name="continent_id" id="continent_id" class="form-control">
                    <option selected></option>
                    @foreach ($continents as $continent)
                        <option value="{{$continent->id}}">{{$continent->continent}}</option>
                    @endforeach
                </select>

                @error('continent')
                    <span class="invalid-feedback">{{$message}}</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Valider</button>
        </form>
    </section>
    
@endsection