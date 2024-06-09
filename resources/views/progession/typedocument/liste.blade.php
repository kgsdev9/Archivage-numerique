@extends('layouts.app')
@section('content')
<section class="container-fluid p-4">
    <div class="row">
        <!-- Page Header -->
        <div class="col-lg-12 col-md-12 col-12">
            <div class="border-bottom pb-3 mb-3 d-flex justify-content-between align-items-center">
                <div class="mb-2 mb-lg-0">
                    <h1 class="mb-1 h2 fw-bold">
                        LISTE DES DEPARTEMENTS

                    </h1>
                    <!-- Breadcrumb  -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Accueil</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Departement {{$departement->libelle}}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Liste complete</li>
                        </ol>
                    </nav>
                </div>
                <div class="nav btn-group" role="tablist">
                    <a href="">Liste departements</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
            <div class="tab-content">
                <div class="tab-pane fade show active">
                    <div class="row">
                        @foreach ($litetypedocument as $vlitetypedocument)
                        @php
                        $nbre = DB::select("SELECT COUNT(*) as nombre FROM Dossiers WHERE departement_id  = ". $departement->id ."  AND  typedocument_id  = ". $vlitetypedocument->id ." ");
                        @endphp


                        <div class="col-xl-2 col-lg-6 col-md-6 col-12">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="{{asset('images/dossier.png')}}" class="rounded-circle avatar-xl mb-3" alt="">
                                        <h4 class="mb-0">{{$vlitetypedocument->libelle}}</h4>
                                        <p class="mb-0">Nombre de dossier {{$nbre[0]->nombre}}</p>
                                        <br>
                                        <a class="btn btn-outline-secondary" href="{{route('anne.show', ['DepartementId' =>$departement->id, 'TypeDocumentId'=>$vlitetypedocument->id])}}">Consulter</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
        </div>
    </div>
</section>


@endsection

