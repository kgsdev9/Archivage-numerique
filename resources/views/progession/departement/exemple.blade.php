commebt mettre en place cette appkication de presttion de service
ce que tu sais faire met sur l'application pquel'un oeut te cobtacter

@extends('layouts.app')
@section('content')
<section class="container-fluid p-4">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
            <div class="border-bottom pb-3 mb-3 d-lg-flex justify-content-between align-items-center">
                <div class="mb-3 mb-lg-0">
                    <h1 class="mb-0 h2 fw-bold">Liste des dossiers </h1>
                </div>
                <div class="d-flex">
                    <a href="{{route('folder-progress')}}" class="btn btn-primary btn-sm"> <i class="fe fe-plus"></i>Créer un dossier</a>
                </div>
            </div>
        </div>
    </div>
    <h5>Liste de tous les dossiers pour tous les departements </h5>
    <hr>
    <div class="row">
        <div>
            <div class="table-responsive card">
                <table  id="dataTableBasic" class="table mb-0 text-nowrap table-hover table-centered">
                    <thead class="table-light">
                        <tr>
                            <th>Code Dossier</th>
                            <th>Departement</th>
                            <th>Année </th>
                            <th>Type Document</th>
                            <th>Création</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @forelse ($listedossiers as $vdossier)
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="icon-shape icon-lg rounded-3 bg-light-primary">
                                    <a href="#">
                                        <img src="{{asset('images/dossier.png')}}" alt="" class="img-fluid rounded">
                                    </a>
                                </div>
                                <div class="ms-3">
                                    <h5 class="mb-0">
                                        <a href="#" class="text-inherit">{{$vdossier->code}}</a>
                                    </h5>
                                </div>
                            </div>
                        </td>
                        <td>{{$vdossier->departement->libelle}}</td>
                        <td>{{$vdossier->annee->libelle}}</td>
                        <td>{{$vdossier->typedocument->libelle}}</td>
                        <td>{{$vdossier->created_at}}</td>
                        <td>
                            <a class="btn btn-secondary btn-sm" href="{{route('dossier.show', $vdossier->id)}}"><i class="fe fe-eye"></i></a>
                            <a class="btn btn-outline-secondary btn-sm" href="{{route('dossier.show', $vdossier->id)}}"><i class="fe fe-edit"></i></a>
                            <a class="btn btn-outline-danger btn-sm" href="{{route('dossier.show', $vdossier->id)}}"><i class="fe fe-trash"></i></a>
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
