@extends('layout.index')

@section('content')
    @include('partial.bo.navAdmin')
    <section class="container mt-5">
        @include('layout.flash')
        <div class="d-flex justify-content-between mb-2">
            <a href={{ route('equipe.index') }} class="btn btn-primary">Retour index</a>
            <h3>Details</h3>
        </div>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <p><span class="font-weight-bold">Equipe : </span> {{ $equipe->nom }}
                        </p>
                    </div>
                    <div class="card-body">
                        <p><span class="font-weight-bold">Ville : </span> {{ $equipe->ville }}</p>
                        <p><span class="font-weight-bold">Pays : </span> {{ $equipe->pays }}</p>
                        <p><span class="font-weight-bold">Continent : </span> {{ $equipe->continent->continent }}</p>
                        <p><span class="font-weight-bold">Participants : </span> {{count($equipe->joueurs)}} / {{ $equipe->nombre }}</p>
                    </div>
                    <div class="card-body">
                        <h6>Liste des participants</h6>
                        <table class="table table-sm">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nom</th>
                                    <th scope="col">Prenom</th>
                                    <th scope="col">Role</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>

                                @forelse ($equipe->joueurs as $item)
                                    <tr>
                                        <th scope="row">{{$loop->iteration}}</th>
                                        <td>{{$item->nom}}</td>
                                        <td>{{$item->prenom}}</td>
                                        <td>{{$item->role->nom}}</td>
                                        <td><a href="" class="btn btn-success">Show</a></td>
                                    </tr>

                                @empty
                                    <p>Il n'y a pas encore de participants</p>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
