@extends('layouts.app')
@section('content')
<section class="container-fluid p-4">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
            <!-- Page header -->
            <div class="border-bottom pb-3 mb-3 d-lg-flex align-items-center justify-content-between">
                <div class="mb-2 mb-lg-0">
                    <h1 class="mb-0 h2 fw-bold">Liste des dossiers </h1>
                    <!-- Breadcrumb -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#" class="text-dark">Type Document {{$typedocument->libelle ?? 'ss'}}</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#" class="text-dark">Departement {{$departement->libelle ?? 's'}}</a>
                            </li>

                            <li class="breadcrumb-item">
                                <a href="#" class="text-dark">Annee {{$annee->libelle}}</a>
                            </li>

                        </ol>
                    </nav>
                </div>
                <div>
                    <form action="{{route('folder.store')}}" method="POST">
                        @csrf
                        <input type="hidden" name="DepartementId" id="DepartementId" value="{{$DepartementId}}">
                        <input type="hidden" name="TypeDocumentId" id="TypeDocumentId" value="{{$TypeDocumentId}}">
                        <input type="hidden" name="AnneeId" id="AnneeId" value="{{$AnneeId}}">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="nom_du_dossier" placeholder="Nom du Dossier">
                            </div>
                            <div class="col-md-6">
                                <button type="button" onclick="supprimerUtilisateur({{ $AnneeId }})" class="btn btn-outline-success me-2">Créer un dossier</button>

                            </div>

                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <h5>Liste de tous les dossiers du departement {{$departement->libelle}}  </h5>
    <hr>
    <div class="row">
        <div>
            <div class="table-responsive card">
                <table   class="table mb-0 text-nowrap table-hover table-centered">
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
                    @forelse ($dossier as $vdossier)
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
                                        <a href="#" class="text-inherit">{{$vdossier->nom}}</a>
                                    </h5>
                                </div>
                            </div>
                        </td>
                        <td>{{$vdossier->departement->libelle}}</td>
                        <td>{{$vdossier->annee->libelle}}</td>
                        <td>{{$vdossier->typedocument->libelle}}</td>
                        <td>{{$vdossier->created_at}}</td>
                        <td>
                            @if(count($vdossier->documents)> 0)
                            <a class="btn btn-success btn-sm" href="{{route('dossier.show', $vdossier->id)}}"><i class="fe fe-eye"></i></a>
                            @else
                            <a class="btn btn-secondary btn-sm" href="{{route('dossier.show', $vdossier->id)}}"><i class="fe fe-eye"></i></a>
                            @endif

                            <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="chargeInfoDossier('{{$vdossier->nom}}|{{ $vdossier->id }}')">
                                <i class="fe fe-plus"></i>
                                </button>

                            <a class="btn btn-outline-danger btn-sm" href="{{route('dossier.destroy', $vdossier->id)}}"><i class="fe fe-trash"></i></a>

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
  @include('modals.documents.createdocument')
@endsection
