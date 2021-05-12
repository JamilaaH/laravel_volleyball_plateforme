@extends('layout.index')

@section('content')
    @include('partial.bo.navAdmin')
    <section class="container mt-5">
        @include('layout.flash')
        <div class="d-flex justify-content-between mb-2">
            <h3>Liste des équipes</h3>
            <a href={{route('equipe.create')}} class="btn btn-primary"><i class="fa fa-plus" style="font-size:20px"></i></a>
        </div>
        <div class="row">
            @forelse ($equipes as $equipe)
                <div class="col-3">
                    <div class="card">
                        <div class="card-header">
                            <p><span class="font-weight-bold">Equipe : </span> {{$equipe->nom}}
                            </p>
                        </div>
                        <div class="card-body">
                            <p><span class="font-weight-bold">Ville : </span> {{$equipe->ville}}</p>
                            <p><span class="font-weight-bold">Pays : </span> {{$equipe->pays}}</p>
                            <p><span class="font-weight-bold">Continent : </span> {{$equipe->continent->continent}}</p>
                            <p><span class="font-weight-bold">Max de participants : </span> {{$equipe->nombre}}</p>
                        </div>
                        <div class="card-footer">
                            <a href={{route('equipe.show', $equipe->id)}} class="btn btn-success">show</a>
                            <a href="" class="btn btn-primary">edit</a>
                            <a href="" class="btn btn-danger">delete</a>
                        </div>
                    </div>
                </div>
            @empty
                <p>Il n'y a pas encore d'équipe</p>
            @endforelse
        </div>
    </section>
    
@endsection