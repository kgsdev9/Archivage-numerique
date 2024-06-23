@extends('layouts.app')
@section('content')
<section class="container-fluid p-4">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="border-bottom pb-3 mb-3 d-lg-flex justify-content-between align-items-center">
                        <div class="mb-3 mb-lg-0">
                            <h1 class="mb-0 h2 fw-bold">Liste des types de documents du departement {{$departement->libelle}} </h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#" class="text-dark">Accueil</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="#" class="text-dark">departement </a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">{{$departement->libelle}}</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="d-flex">
                            <a href="#" class="btn btn-primary btn-sm">  &nbsp; Retourner</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="row row-cols-1 row-cols-md-2 g-2">
            @foreach ($litetypedocument as $vlitetypedocument)
            @php
            $nbre = DB::select("SELECT COUNT(*) as nombre FROM Dossiers WHERE departement_id  = ". $departement->id ."  AND  typedocument_id  = ". $vlitetypedocument->id ." ");
            @endphp
            <div class="col-md-3 mb-3">
                <a href="{{route('anne.show', ['DepartementId' =>$departement->id, 'TypeDocumentId'=>$vlitetypedocument->id])}}">
                    <div class="card">
                        <div class="row g-0">
                            <div class="col-md-4 d-flex align-items-center justify-content-center">
                                <img src="{{ asset('images/dossier.png') }}" class="img-thumbnail" style="height: 100px; width: auto;" alt="Image du dossier">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">{{Str::limit($vlitetypedocument->libelle,15)}}</h5>
                                    <p class="card-text">Nombre de dossier {{$nbre[0]->nombre}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>


@endsection



