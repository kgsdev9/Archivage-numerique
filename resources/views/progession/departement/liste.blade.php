@extends('layouts.app')
@section('content')
<section class="container-fluid p-4">
    <div class="row">
        <!-- Page Header -->
        <div class="col-lg-12 col-md-12 col-12">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="border-bottom pb-3 mb-3 d-lg-flex justify-content-between align-items-center">
                        <div class="mb-3 mb-lg-0">
                            <h1 class="mb-0 h2 fw-bold">Liste des départements</h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#" class="text-dark">Accueil</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="#" class="text-dark">liste</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Départements</li>
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
            @foreach ($listedepartement as $vlistedepartement)
            @php
            $nbre = count($vlistedepartement->dossiers->where('departement_id', '=', $vlistedepartement->id));
            @endphp
            {{-- @can('departement_display', $vlistedepartement) --}}
            <div class="col-md-3 mb-3">
                <a href="{{route('typedocument.show', $vlistedepartement->id)}}">
                    <div class="card">
                        <div class="row g-0">
                            <div class="col-md-4 d-flex align-items-center justify-content-center">
                                <img src="{{ asset('images/dossier.png') }}" class="img-thumbnail" style="height: 100px; width: auto;" alt="Image du dossier">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">{{Str::limit($vlistedepartement->libelle, 10)}}</h5>
                                    <p class="card-text">Nombre de dossier {{$nbre}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            {{-- @endcan --}}
            @endforeach
        </div>
    </div>
</section>


@endsection

