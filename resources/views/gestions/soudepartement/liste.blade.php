@extends('layouts.app')
@section('content')
<section class="container-fluid p-4">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
            <!-- Page header -->
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
        <div class="col-lg-12 col-md-12 col-12">
            <div class="card rounded-3">
                <div class="card-header border-bottom-0 p-0">
                    <ul class="nav nav-lb-tab" id="tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="all-orders-tab" data-bs-toggle="pill" href="#all-orders" role="tab" aria-controls="all-orders" aria-selected="true">
                                Lise des documents
                            </a>
                        </li>
                    </ul>
                </div>
                <div>
                    <div class="tab-content" id="tabContent">
                        <!-- Tab -->
                        <div class="tab-pane fade show active" id="all-orders" role="tabpanel" aria-labelledby="all-orders-tab">
                            <div class="table-responsive">
                                <!-- Table -->
                                <table class="table mb-0 text-nowrap table-hover table-centered table-with-checkbox" id="example">
                                    <!-- Table Head -->
                                    <thead class="table-light">
                                        <tr>
                                            <th>Type document</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @forelse ($listetypedocument as $vlistetypedocument)
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
                                                        <a href="#" class="text-inherit">{{$vlistetypedocument->libelle}}</a>
                                                    </h5>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <form action="{{route('dep.typedoc.destroy', $vlistetypedocument->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-outline-danger">Supprimer</button>
                                            </form>
                                          <button class="btn btn-primary" type="button">Information</button>
                                        </td>
                                    </tr>
                                    @empty
                                        <span>Aucun document a été créé </span>
                                    @endforelse

                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- Card Footer -->
                <div class="card-footer d-md-flex justify-content-end border-top-0">
                    <nav aria-label="">
                        <ul class="pagination mb-0">
                            {{-- {{$dossier->links()}} --}}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection
