@extends('layout.index')

@section('content')
    @include('partial.nav')
    <section class="container">
        <h1>Home</h1>
        {{-- @dump($joueurs) --}}
        {{$joueurs[0]->role->nom}}
        {{$joueurs[0]->genre->type}}
        {{$joueurs[0]->equipe->nom}}
    </section>
    
@endsection