@extends('layouts.app')

@section('content')

<section class="container-fluid p-4">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
            <div class="border-bottom pb-3 mb-3 d-lg-flex justify-content-between align-items-center">
                <div class="mb-3 mb-lg-0">
                    <h1 class="mb-0 h2 fw-bold">Bienvenue </h1>
                </div>
                <div class="d-flex">

                    <a href="#" class="btn btn-primary"> <i class="fe fe-plus"></i>Commencer</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-3 col-lg-6 col-md-12 col-12">
            <!-- Card -->
            <div class="card mb-4">
                <!-- Card body -->
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3 lh-1">
                        <div>
                            <span class="fs-6 text-uppercase fw-semibold ls-md">Tota Dossiers</span>
                        </div>
                        <div>
                            <span class="fe fe-shopping-bag fs-3 text-primary"></span>
                        </div>
                    </div>
                    <h2 class="fw-bold mb-1">233</h2>

                    <span class="ms-1 fw-medium">Liste des dossiers</span>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-12 col-12">
            <!-- Card -->
            <div class="card mb-4">
                <!-- Card body -->
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3 lh-1">
                        <div>
                            <span class="fs-6 text-uppercase fw-semibold ls-md">Total Déparemets</span>
                        </div>
                        <div>
                            <span class="fe fe-book-open fs-3 text-primary"></span>
                        </div>
                    </div>
                    <h2 class="fw-bold mb-1">2,456</h2>
                    <span class="text-danger fw-semibold">120+</span>
                    <span class="ms-1 fw-medium">Number of pending</span>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-12 col-12">
            <!-- Card -->
            <div class="card mb-4">
                <!-- Card body -->
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3 lh-1">
                        <div>
                            <span class="fs-6 text-uppercase fw-semibold ls-md">TOTAL ANNEE</span>
                        </div>
                        <div>
                            <span class="fe fe-users fs-3 text-primary"></span>
                        </div>
                    </div>
                    <h2 class="fw-bold mb-1">1,22,456</h2>
                    <span class="text-success fw-semibold">
                        <i class="fe fe-trending-up me-1"></i>
                        +1200
                    </span>
                    <span class="ms-1 fw-medium">Students</span>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-12 col-12">
            <!-- Card -->
            <div class="card mb-4">
                <!-- Card body -->
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3 lh-1">
                        <div>
                            <span class="fs-6 text-uppercase fw-semibold ls-md">TOTAL TYOE DOCUMENT</span>
                        </div>
                        <div>
                            <span class="fe fe-user-check fs-3 text-primary"></span>
                        </div>
                    </div>
                    <h2 class="fw-bold mb-1">22,786</h2>
                    <span class="text-success fw-semibold">
                        <i class="fe fe-trending-up me-1"></i>
                        +200
                    </span>
                    <span class="ms-1 fw-medium">Instructor</span>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
            <div class="card rounded-3">
               <br>

                <div>
                    <div class="tab-content" id="tabContent">
                        <!-- Tab -->
                        <div class="tab-pane fade show active" id="all-orders" role="tabpanel" aria-labelledby="all-orders-tab">
                            <div class="table-responsive">
                                <!-- Table -->
                                <table class="table mb-0 text-nowrap table-hover table-centered table-with-checkbox">
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

                                           <button class="btn btn-outline-secondary"><i class="fe fe-eye"></i></button>
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
            </div>
        </div>
    </div>

</section>

<div class="row justify-content-center">
    @foreach ($departement as $vdepartement)
    <div class="col-md-2">
        <a href="{{route('typedocument.show', $vdepartement->id)}}">{{$vdepartement->libelle}}</a>
    </div>
    @endforeach
</div>

@endsection
