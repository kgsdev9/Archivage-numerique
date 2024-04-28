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
                                <a href="#" class="text-dark">Type Document {{$typedocument->libelle}}</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#" class="text-dark">Departement {{$departement->libelle}}</a>
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
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
            <div class="card rounded-3">
                <div class="card-header border-bottom-0 p-0">
                    <ul class="nav nav-lb-tab" id="tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="all-orders-tab" data-bs-toggle="pill" href="#all-orders" role="tab" aria-controls="all-orders" aria-selected="true">
                                Lise des dossiers
                            </a>
                        </li>

                    </ul>
                </div>
                <div class="p-4 row gx-3">
                    <!-- Form -->
                    <div class="col-12 col-lg-8 mb-3 mb-lg-0">
                        <!-- search -->
                        <form class="d-flex align-items-center">
                            <span class="position-absolute ps-3 search-icon">
                                <i class="fe fe-search"></i>
                            </span>
                            <!-- input -->
                        
                            <input type="search" class="form-control ps-6" placeholder="Rechercher un dossier...">
                        </form>
                    </div>
                    <div class="col-6 col-lg-2">
                        <!-- form select -->
                        <button class="btn btn-outline-warning">Imprimer</button>
                    </div>
                    <div class="col-6 col-lg-2">
                        <!-- form select -->
                        <button class="btn btn-outline-success">Exporter</button>
                    </div>
                </div>
                <div>
                    <div class="tab-content" id="tabContent">
                        <!-- Tab -->
                        <div class="tab-pane fade show active" id="all-orders" role="tabpanel" aria-labelledby="all-orders-tab">
                            <div class="table-responsive">
                                <!-- Table -->
                                <table class="table mb-0 text-nowrap table-hover table-centered table-with-checkbox" id="example">
                                    <!-- Table Head -->
                                    <thead class="table-light">
                                        <tr>

                                            <th>Code Dossier</th>
                                            <th>Departement</th>
                                            <th>Année </th>
                                            <th>Type Document</th>
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
                                                        <a href="#" class="text-inherit">{{$vdossier->code}}</a>
                                                    </h5>
                                                </div>
                                            </div>
                                        </td>
                                        <td>{{$vdossier->departement->libelle}}</td>
                                        <td>{{$vdossier->annee->libelle}}</td>
                                        <td>{{$vdossier->typedocument->libelle}}</td>
                                        <td>
                                          <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" onclick="chargeInfoDossier('{{$vdossier->code}}|{{ $vdossier->id }}')">Information</button>
                                           <button class="btn btn-outline-danger"><i class="fe fe-eye"></i></button>
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
                </div>
                <!-- Card Footer -->
                <div class="card-footer d-md-flex justify-content-end border-top-0">
                    <nav aria-label="">
                        <ul class="pagination mb-0">
                            {{$dossier->links()}}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
      <h5 id="offcanvasRightLabel">Ajouter des document au dossier <span id="code_dossier"></span></h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="accordion" id="accordionExample" enctype="multipart/form-data">
            <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Uplaoder les fichiers
                  </button>
                </h2>
                {{-- <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <div class="form-group">
                        <input type="file" id="fichier" name="fichier" class="form-control" multiple>
                    </div>

                    <div class="d-grid mt-4">
                        <button class="btn btn-outline-primary"  type="button">Enregistrer</button>
                    </div>
                  </div>
                </div> --}}
                <form id="uploadForm" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="file">
                    <input type="text" name="codedossier">
                    <button type="submit">Envoyer</button>
                </form>


              </div>
          </div>

    </div>
  </div>

@endsection
