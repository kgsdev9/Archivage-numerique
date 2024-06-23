@extends('layouts.app')
@section('content')
<section class="container-fluid p-4">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
            <div class="border-bottom pb-3 mb-3 d-lg-flex justify-content-between align-items-center">
                <div class="mb-3 mb-lg-0">
                    <h1 class="mb-0 h2 fw-bold">Modificiation de l'année </h1>
                </div>
                <div class="d-flex">
                    <a href="{{route('annee.index')}}" class="btn btn-primary btn-sm">Retourner</a>
                </div>
            </div>
        </div>
    </div>
    <h5>Modification</h5>
    <hr>
    <div class="row card">
        <div>
            <form class="row gx-3 needs-validation" action="{{route('annee.update', $annee->id)}}" method="POST">
                @csrf
                @method('PATCH')
                <div class="mb-3 col-12 col-md-6">
                    <label class="form-label" for="libelle">Nom d'utulisateur</label>
                    <input type="text" id="libelle" name="libelle" class="form-control" placeholder="libelle annee" required="" value="{{$annee->libelle}}">
                </div>
                <div class="mb-3 col-12 col-md-6">
                        <br>
                    <button class="btn btn-primary" type="submit">Enregistrer</button>
                   
                </div>

            </form>
        </div>
    </div>

</section>

@endsection
