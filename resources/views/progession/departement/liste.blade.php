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
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Accueil</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Departement</a></li>
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

    

    <div class="row card ">


        <div class="col-lg-12 col-md-12 col-12">
            <div class="tab-content">
                <div class="tab-pane fade show active">
                    <div class="row">
                        @foreach ($listedepartement as $vlistedepartement)
                        @php
                        $nbre = count($vlistedepartement->dossiers->where('departement_id', '=', $vlistedepartement->id));
                        @endphp
                        <div class="col-xl-2 col-lg-6 col-md-6 col-12">
                            <div class="card mb-4">
                                <!-- Card body -->
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="{{asset('images/dossier.png')}}" class="rounded-circle avatar-xl mb-3" alt="">
                                        <h4 class="mb-0">{{$vlistedepartement->libelle}}</h4>
                                        <p class="mb-0">Nombre de dossier {{$nbre}}
                                        </p>
                                        <br>
                                        <a class="btn btn-outline-secondary" href="{{route('typedocument.show', $vlistedepartement->id)}}">Consulter</a>
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

