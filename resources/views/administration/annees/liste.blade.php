@extends('layouts.app')
@section('content')
<section class="container-fluid p-4">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
            <div class="border-bottom pb-3 mb-3 d-lg-flex justify-content-between align-items-center">
                <div class="mb-3 mb-lg-0">
                    <h1 class="mb-0 h2 fw-bold">Annuaire Annees</h1>
                </div>
                <div class="d-flex">
                    <a href="{{route('annee.create')}}" class="btn btn-primary btn-sm"> <i class="fe fe-plus"></i>Création</a>
                </div>
            </div>
        </div>
    </div>
    <h5>Gestion des années  </h5>
    <hr>
    <div class="row">
        <div>
            <div class="table-responsive card">
                <table  id="dataTableBasic" class="table mb-0 text-nowrap table-hover table-centered">
                    <thead class="table-light">
                        <tr>
                            <th>Libelle role</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @forelse ($listeannee as $vlisteannee)
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">

                                <div class="ms-3">
                                    <h5 class="mb-0">
                                        <a href="#" class="text-inherit">{{$vlisteannee->libelle}}</a>
                                    </h5>
                                </div>
                            </div>
                        </td>
                        <td>
                            <a class="btn btn-outline-secondary btn-sm" href="{{route('annee.edit', $vlisteannee->id)}}"><i class="fe fe-edit"></i></a>
                            @if(count($vlisteannee->dossiers)<=0)
                            <form action="{{route('annee.destroy',$vlisteannee->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-outline-danger btn-sm" type="submit"><i class="fe fe-trash"></i></button>
                            </form>
                            @endif
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
