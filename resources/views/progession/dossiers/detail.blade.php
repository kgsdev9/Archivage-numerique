@extends('layouts.app')

@section('content')
<section class="container-fluid p-4">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12 mb-2">
            <!-- Page header -->
            <div class="d-lg-flex align-items-center justify-content-between">
                <div class="mb-2 mb-lg-0">
                    <h1 class="mb-0 h2 fw-bold">Liste des documents du dossiers {{$dossiers->nom}}</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-12 card">
        <div class="tile">
            <div class="row">
                <div class="col">
                    <div class="row mb-2">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">

                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <h4 class="text-dark">NOM DU DOSSIER  : {{ $dossiers->nom }}</h4>
                                            <div class="hstack gap-3 flex-wrap">
                                                <div><a href="#" class="text-dark d-block"> {{__('Identifiant Unique')}} :  {{ $dossiers->unqId }}</a></div>
                                                <div class="vr"></div>
                                                <div class="text-muted float-end">{{__('Date de création ')}}  : <span class="text-body fw-medium">{{ $dossiers->created_at }}</span></div>
                                            </div>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <div>
                                                <a href="#" class="btn btn-outline-success">
                                                    <span><i class="ri-printer-line"></i></span>
                                                    <span> {{__('FICHE DE GESTION DES DOCUMENTS')}} </span>
                                                </a>
                                                <br><br>
                                                @if(count($dossiers->documents)>0)
                                                <form  method="POST" action="{{route('extract.zip')}}">
                                                    @csrf
                                                    <input type="hidden" name="dossierid" id="dossierid" value="{{ $dossiers->id}}">
                                                    <button type="submit" class="btn btn-primary btn-sm"><i class="fe fe-file-zip-o"></i>Expoter au format zip </button>
                                                    </a>
                                                </form>
                                                @endif

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-lg-4 col-sm-6">
                                            <div class="p-2 border border-dashed rounded">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-sm me-2">
                                                        <div class="avatar-title rounded bg-transparent text-success fs-24">
                                                            <i class="ri-folder-3-line"></i>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <p class="text-muted mb-1">{{__('DEPARTEMENT')}} :</p>
                                                        <h5 class="mb-0">{{$dossiers->departement->libelle}}</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end col -->
                                        <div class="col-lg-4 col-sm-6">
                                            <div class="p-2 border border-dashed rounded">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-sm me-2">
                                                        <div class="avatar-title rounded bg-transparent text-success fs-24">
                                                            <i class="ri-file-copy-2-fill"></i>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <p class="text-muted mb-1">{{__('TYPE DE DOCUMENT')}} :</p>
                                                        <h5 class="mb-0">{{$dossiers->typedocument->libelle}}</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end col -->
                                        <div class="col-lg-4 col-sm-6">
                                            <div class="p-2 border border-dashed rounded">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-sm me-2">
                                                        <div class="avatar-title rounded bg-transparent text-success fs-24">
                                                            <i class="ri-product-hunt-fill"></i>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <p class="text-muted mb-1">{{__('Année ')}} :</p>
                                                        <h5 class="mb-0">{{$dossiers->annee->libelle}}</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end col -->

                                        <!-- end col -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <ul></ul>
            <div class="table-responsive overflow-y-hidden">
                <table class="table mb-0 text-nowrap table-hover table-centered" id="dataTableBasic">
                    <thead class="table-light">
                        <tr>
                            <th>Nom du fichier </th>
                            <th>Code du fichier</th>
                            <th>Dossier</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($dossiers->documents as $vdocument)
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

                        <td>
                            {{$vdocument->code}}
                        </td>
                        <td>
                            {{$vdocument->dossier?->code}}
                        </td>
                        <td>
                            <form action="{{route('document.delete', $vdocument->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a href="javascript:void(0);" class="btn btn-outline-secondary btn-sm" onclick='window.open("{{asset('storage/documents/'.$vdocument->fichier)}}", "vue document", "width=800,height=500");'><i class="fe fe-eye"></i></a></a>
                                <button type="submit" class="btn btn-outline-danger btn-sm"><i class="fe fe-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</section>
@endsection
