@extends('layouts.app')
@section('content')
<section class="container-fluid p-4">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
            <div class="border-bottom pb-3 mb-3 d-lg-flex align-items-center justify-content-between">
                <div class="mb-2 mb-lg-0">
                    <h1 class="mb-0 h2 fw-bold">Gestion type document du departement {{$departement->libelle}}  </h1>
                    <!-- Breadcrumb -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#" class="text-dark">{{$departement->libelle}} </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#" class="text-dark">Type document </a>
                            </li>

                            <li class="breadcrumb-item">
                                <a href="#" class="text-dark">Liste complete </a>
                            </li>

                        </ol>
                    </nav>
                </div>
                <div>
                    <form id="formtype" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="typedocument" class="form-control" id="typedocument" placeholder="Nom du type de  document" required>
                            </div>
                            <input type="hidden" name="departementid" id="departement_id" value="{{$departement->id}}">
                            <div class="col-md-6">
                                <button type="button" onclick="saveTypedocument()"  class="btn btn-outline-success me-2">Créer Type de document </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div>
            <div class="table-responsive card">
                <table  id="dataTableBasic" class="table mb-0 text-nowrap table-hover table-centered">
                    <thead class="table-light">
                        <tr>
                            <th>Type de document</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($listetypedocument as $vlistetypedocument)
                    <tr>
                        <td>{{$vlistetypedocument->libelle}}</td>
                        <td>
                            <div class="row">
                                <div class="col-md-2">
                                    <form action="{{route('dep.typedoc.destroy', $vlistetypedocument->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger">Supprimer</button>
                                    </form>
                                </div>
                                <div class="col-md-2">
                                    <button class="btn btn-primary" type="button">Information</button>
                                </div>
                            </div>
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
