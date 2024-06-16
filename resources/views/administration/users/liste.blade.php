@extends('layouts.app')
@section('content')
<section class="container-fluid p-4">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
            <div class="border-bottom pb-3 mb-3 d-lg-flex justify-content-between align-items-center">
                <div class="mb-3 mb-lg-0">
                    <h1 class="mb-0 h2 fw-bold">Annuaire Utilisateurs</h1>
                </div>
                <div class="d-flex">
                    <a href="{{route('users.create')}}" class="btn btn-primary btn-sm"> <i class="fe fe-plus"></i>Création</a>
                </div>
            </div>
        </div>
    </div>
    <h5>Gestion des utilisateurs </h5>
    <hr>
    <div class="row">
        <div>
            <div class="table-responsive card">
                <table  id="dataTableBasic" class="table mb-0 text-nowrap table-hover table-centered">
                    <thead class="table-light">
                        <tr>
                            <th>Nom employe</th>
                            <th>Email</th>
                            <th>Departement</th>
                            <th>Role </th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @forelse ($listeusers as $vlisteusers)
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="icon-shape icon-lg rounded-3 bg-light-primary">
                                    <a href="#">
                                        <img src="{{asset('images/avatar.jpg')}}" alt="" class="img-fluid rounded">
                                    </a>
                                </div>
                                <div class="ms-3">
                                    <h5 class="mb-0">
                                        <a href="#" class="text-inherit">{{$vlisteusers->email}}</a>
                                    </h5>
                                </div>
                            </div>
                        </td>
                         <td>{{$vlisteusers->name}}</td>
                         <td>{{$vlisteusers->departement->libelle}}</td>
                         <td>{{$vlisteusers->role->libelle}}</td>
                        <td>
                            <a class="btn btn-secondary btn-sm" href="{{route('users.edit', $vlisteusers->id)}}"><i class="fe fe-eye"></i></a>
                            <a class="btn btn-outline-secondary btn-sm" href="{{route('users.show', $vlisteusers->id)}}"><i class="fe fe-edit"></i></a>
                            <a class="btn btn-outline-danger btn-sm" href="{{route('users.show', $vlisteusers->id)}}"><i class="fe fe-trash"></i></a>
                        </td>
                    </tr>
                    @empty
                        <span>Aucun dossier n'a été crée ici </span>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

@endsection
