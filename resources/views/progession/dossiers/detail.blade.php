@extends('layouts.app')

@section('content')
<section class="container-fluid p-4">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12 mb-2">
            <!-- Page header -->
            <div class="d-lg-flex align-items-center justify-content-between">
                <div class="mb-2 mb-lg-0">
                    <h1 class="mb-0 h2 fw-bold">Liste des documents du dossiers {{$dossiers->code}}</h1>
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
                                            <h4 class="text-dark">NOM DU DOSSIER  : {{ $dossiers->code }}</h4>
                                            <div class="hstack gap-3 flex-wrap">
                                                <div><a href="#" class="text-dark d-block"> {{__('Identifiant Unique')}} :  {{ $dossiers->UnqId }}</a></div>
                                                <div class="vr"></div>
                                                <div class="text-muted float-end">{{__('Date de création ')}}  : <span class="text-body fw-medium">{{ date_format(date_create($dossiers->created_at), 'd M, Y à H:i:s') }}</span></div>
                                            </div>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <div>
                                                <a href="#" class="btn btn-outline-success">
                                                    <span><i class="ri-printer-line"></i></span>
                                                    <span> {{__('FICHE DE GESTION DES DOCUMENTS')}}   </span>
                                                </a>
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
                                                        <h5 class="mb-0">EDDFFQ</h5>
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
                                                        <h5 class="mb-0">DDFG</h5>
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
                                                        <h5 class="mb-0">dffffg</h5>
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

            {{-- <div class="row mb-2">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="mt-4">
                                        <h5 class="fs-14">{{__('ged.statutfolder')}} :</h5>
                                        <div class="d-flex flex-wrap gap-2" id="statusDoc" data-value="{{ $dossier->UnqId }}">
                                                <?php
                                                    $class = "btn-info";
                                                ?>
                                            @foreach ($types as $type)
                                                @foreach ($dossier->documents as $doc)
                                                    <?php if ($type->IdTypeDocumentsGed == $doc->IdTypeDocumentsGed)
                                                    {
                                                        $class = "btn-success";
                                                        }
                                                    ?>
                                                @endforeach
                                                <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="{{ $type->LibelleTypeDocumentsGed }}">
                                                    <label class="btn {{ $class }} avatar-xs rounded-circle p-0 d-flex justify-content-center align-items-center">{{ $type->CodeTypeDocumentsGed }}</label>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

            <div class="table-responsive overflow-y-hidden">
                <table class="table mb-0 text-nowrap table-hover table-centered" id="example">
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
                            <a href="javascript:void(0);" class="btn btn-outline-secondary btn-sm" onclick='window.open("{{asset('storage/documents/'.$vdocument->fichier)}}", "vue document", "width=800,height=500");'><i class="fe fe-eye"></i></a></a>
                            <a href="" class="btn btn-outline-danger btn-sm"><i class="fe fe-trash"></i></a>

                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>


        </div>
    </div>


    {{-- <div class="row">
        <!-- col -->
        <div class="col-12">
            <!-- card -->
            <div class="card">
                <!-- card header -->
                <div class="card-header">
                    <h4 class="mb-0">Files</h4>
                </div>
                <!-- table -->
                <div class="table-responsive overflow-y-hidden">
                    <table class="table mb-0 text-nowrap table-hover table-centered" id="example">
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
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-file-earmark-spreadsheet text-primary" viewBox="0 0 16 16">
                                                <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V9H3V2a1 1 0 0 1 1-1h5.5v2zM3 12v-2h2v2H3zm0 1h2v2H4a1 1 0 0 1-1-1v-1zm3 2v-2h3v2H6zm4 0v-2h3v1a1 1 0 0 1-1 1h-2zm3-3h-3v-2h3v2zm-7 0v-2h3v2H6z"></path>
                                            </svg>
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
                                <a href="javascript:void(0);" class="badge badge-soft-sccess avatar-xs rounded-circle fs-6 mr-1" onclick='window.open("{{asset('storage/documents/'.$vdocument->fichier)}}", "vue document", "width=800,height=500");'><i class="fe fe-eye"></i></a></a>
                                <a href="">Supprimer</a>
                                <a href="">Action</a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> --}}



</section>
@endsection
