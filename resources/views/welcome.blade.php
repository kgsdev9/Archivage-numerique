@extends('layouts.app')
@section('title', 'Bienvenue sur la Ged')
@section('content')
<section class="container-fluid p-4">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
            <div class="border-bottom pb-3 mb-3 d-lg-flex justify-content-between align-items-center">
                <div class="mb-3 mb-lg-0">
                    <h1 class="mb-0 h2 fw-bold">Bienvenue {{Auth::user()->name}} </h1>
                </div>
                <div class="d-flex">

                    <a href="{{route('folder-progress')}}" class="btn btn-primary"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect></svg> &nbsp; Debuter la numerisation</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        @forelse ($listedepartement as $vlistedepartement)
        <div class="col-xl-3 col-lg-6 col-md-12 col-12">
            <!-- Card -->
            <div class="card mb-4">
                <!-- Card body -->
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3 lh-1">
                        <div>
                            <span class="fs-6 text-uppercase fw-semibold ls-md">{{$vlistedepartement->libelle}} Nmbre dossier {{count($vlistedepartement->dossiers)}}</span>
                        </div>

                        <div>
                           <img src="{{asset('images/dossier.png')}}" alt="" height="30px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <h5>Liste des recents dossiers</h5>
    <hr>
    <div class="row">
        <div>
            <div class="table-responsive card">
                <!-- Table -->
                <table  id="dataTableBasic" class="table mb-0 text-nowrap table-hover table-centered">
                    <!-- Table Head -->
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
                                        <a href="#" class="text-inherit">{{$vdossier->nom}}</a>
                                    </h5>
                                </div>
                            </div>
                        </td>
                        <td>{{$vdossier->departement->libelle}}</td>
                        <td>{{$vdossier->annee->libelle}}</td>
                        <td>{{$vdossier->typedocument->libelle}}</td>
                        <td>{{$vdossier->created_at}}</td>
                        <td>
                            <a class="btn btn-secondary btn-sm" href="{{route('dossier.show', $vdossier->id)}}"><i class="fe fe-eye"></i></a>

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
