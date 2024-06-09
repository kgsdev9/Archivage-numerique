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


    <div class="row">
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
    </div>
</section>
@endsection
