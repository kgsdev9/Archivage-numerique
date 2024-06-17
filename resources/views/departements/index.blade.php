@extends('layouts.app')
@section('title', 'Annuaire des departements')
@section('content')
<section class="container-fluid p-4">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
            <div class="border-bottom pb-3 mb-3 d-lg-flex justify-content-between align-items-center">
                <div class="mb-3 mb-lg-0">
                    <h1 class="mb-0 h2 fw-bold">Annuaire des départements</h1>
                </div>
                <div class="d-flex">
                    <form  id="formdepartement" method="POST" onsubmit="createDepartement(event)">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="libelledepartement" id="libelledepartement" class="form-control" placeholder="Nom du departement" required>
                            </div>

                            <div class="col-md-6">
                                <button  type="submit" class="btn btn-primary"> <i class="fe fe-edit"></i>Création </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <div class="row">
        @forelse ($allDepartements as $vlistedepartement)
        <div class="col-xl-3 col-lg-6 col-md-12 col-12">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3 lh-1">
                        <div>
                            <span class="fs-6 text-uppercase fw-semibold ls-md">{{$vlistedepartement->libelle}} </span>
                        </div>
                    </div>
                    &nbsp;&nbsp;
                    <div class="row">
                        <div class="col-md-4">
                            <a  href="{{route('departements.edit', $vlistedepartement->id)}}" class="btn btn-primary btn-sm" >
                                Edition
                            </a>
                        </div>

                        <div class="col-md-4">
                            <form action="{{route('departements.destroy',$vlistedepartement->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-info btn-sm">Supprimer</button>
                            </form>
                        </div>

                        <div class="col-md-2">
                            <a href="{{route('gestion.subdepartement', $vlistedepartement->id)}}" class="btn btn-outline-dark btn-sm">Gérer</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
@endsection
