@extends('layouts.app')
@section('content')
<section class="container-fluid p-4">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
            <div class="border-bottom pb-3 mb-3 d-lg-flex justify-content-between align-items-center">
                <div class="mb-3 mb-lg-0">
                    <h1 class="mb-0 h2 fw-bold">Liste des déartementsss </h1>
                </div>
                <div class="d-flex">

                    <a href="{{route('folder-progress')}}" class="btn btn-primary"> <i class="fe fe-edit"></i>Création </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        @forelse ($allDepartements as $vlistedepartement)
        <div class="col-xl-3 col-lg-6 col-md-12 col-12">
            <!-- Card -->
            <div class="card mb-4">
                <!-- Card body -->
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3 lh-1">
                        <div>
                            <span class="fs-6 text-uppercase fw-semibold ls-md">{{$vlistedepartement->libelle}} </span>
                        </div>
                    </div>
                    &nbsp;&nbsp;
                    <a href="" class="btn btn-outline-info btn-sm">Modifier</a>

                    <a href="{{route('gestion.subdepartement', $vlistedepartement->id)}}" class="btn btn-outline-dark btn-sm">Gérer</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>


</section>

@endsection
