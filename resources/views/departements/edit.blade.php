@extends('layouts.app')
@section('title', 'Annuaire des departements')
@section('content')
<section class="container-fluid p-4">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
            <div class="border-bottom pb-3 mb-3 d-lg-flex justify-content-between align-items-center">
                <div class="mb-3 mb-lg-0">
                    <h1 class="mb-0 h2 fw-bold">Edition du departement {{$departement->libelle}}</h1>
                </div>
                <div class="d-flex">
                    <form  action="{{route('departements.update', $departement->id)}}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="row">
                            <div class="col-md-8">
                                <input type="text" name="libelledepartement" id="libelledepartement" class="form-control" placeholder="Nom du departement" value="{{$departement->libelle}}" required>
                            </div>

                            <div class="col-md-4">
                                <button  type="submit" class="btn btn-primary"> <i class="fe fe-edit"></i>Modification</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection
