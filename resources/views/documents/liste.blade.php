@extends('layouts.app')
@section('content')
<section class="container-fluid p-4">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
            <div class="border-bottom pb-3 mb-3 d-lg-flex justify-content-between align-items-center">
                <div class="mb-3 mb-lg-0">
                    <h1 class="mb-0 h2 fw-bold">Liste des documents</h1>
                </div>
                <div class="d-flex">
                    <a href="{{route('folder-progress')}}" class="btn btn-primary"> <i class="fe fe-plus"></i>Suivi documents</a>
                </div>
            </div>
        </div>
    </div>
    <h5>Liste de tous les documents numérisés </h5>
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
                    @forelse ($listedocuments as $vdocument)
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="icon-shape icon-lg rounded-3 bg-light-primary">
                                    <a href="#">
                                        <img src="{{ $vdocument->getIconFile() }}" alt="" style="width:25px;"/>
                                    </a>
                                </div>
                                <div class="ms-3">
                                    <h5 class="mb-0">
                                        <a href="#" class="text-inherit">{{$vdocument->nom}}</a>
                                    </h5>
                                </div>
                            </div>
                        </td>
                        <td>{{$vdocument->dossier->departement->libelle}}</td>
                        <td>{{$vdocument->dossier->annee->libelle}}</td>
                        <td>{{$vdocument->dossier->typedocument->libelle}}</td>
                        <td>{{$vdocument->created_at}}</td>
                        <td>
                            <a href="javascript:void(0);" class="btn btn-outline-secondary btn-sm" onclick='window.open("{{asset('storage/documents/'.$vdocument->fichier)}}", "vue document", "width=800,height=500");'><i class="fe fe-eye"></i></a></a>
                          
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
