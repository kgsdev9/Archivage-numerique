@extends('layouts.app')
@section('content')
<div>
    <section class="container-fluid p-4 ">
        <div class="row ">
            <div class="col">
                <h1><i class="fas fa-warehouse"></i> Gestion des départements</h1>
                <p>{{__('Gestion departements')}} - {{__('Liste complete')}}</p>
            </div>
            <div class="col-auto">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href=""><i class="fa fa-home fa-lg"></i></a></li>
                        <li class="breadcrumb-item active">{{__('Gestion departements')}}</li>
                    </ol>
                </nav>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h1>{{__('SELECTION')}}</h1>
                        <form action="" method="POST" id="myform" name="myform">
                            @csrf
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="libmarchandise" class="form-label">{{__('Libelle departement')}}</label>
                                        <input class="form-control form-control-sm" type="text" name="libmarchandise" id="libmarchandise" >
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="annee" class="form-label">{{__('Sous Département')}}</label>
                                        <select class="form-control form-control-sm" data-live-search="true" title="{{__('home.titreselect')}}" name="annee" id="annee" type="string" >
                                            <option> </option>
                                            {{-- @foreach ($listeannee as $vlisteannee)
                                                <option value="{{$vlisteannee->IdAnnees}}" {{$marchandise == $vlisteannee->IdAnnees ? "selected" : ""}}>{{$vlisteannee->LibelleAnnees}}</option>
                                            @endforeach --}}
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-1">
                                </div>


                                    <div class="col-md-4">
                                        <div class="right">
                                            <button class="btn btn-primary" type="submit" id="search_transport"><i class="fa fa-fw fa-lg fa-check-circle"></i>{{__('Rechercher')}}</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <a class="btn btn-secondary" href=""><i class="fa fa-fw fa-lg fa-times-circle"></i>{{__('Retourner')}}</a>
                                        </div>
                                       <ul></ul>
                                       <div >
                                            <a class="btn btn-info" href=""><i class="icon fa fa-edit"></i>{{__('Imprimer')}}</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                            <button class="btn btn-dark" type="submit" id="pdf_transport" name="pdf_transport"><i class="fa fa-print"></i>{{__('home.print')}}</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <button class="btn btn-warning" type="submit" id="xls_transport" name="xls_transport"><i class="fas fa-file-excel"></i> {{__('home.excel')}}</button>

                                        </div>
                                    </div>
                            </div>
                        </form>
                        <hr>
                        <div class="row">
                            <div class="table mb-0 text-nowrap table-hover table-centered">
                                <table class="table table-hover">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Libelle </th>
                                            <th>Daté création</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($allDepartements as $liste)
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">


                                                    <h5 class="mb-0">sssss </h5>
                                                </div>
                                            </td>
                                            <td>{{$liste->matricule}}</td>

                                            <td>
                                                <a href="" class="btn btn-success btn-sm"> <i class="fe fe-edit"></i></a>
                                                <a href="" class="btn btn-white btn-sm"><i class="fe fe-eye"> </i></a>
                                                <a href="#" class="btn btn-danger btn-sm"><i class="fe fe-trash"></i></a>

                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            {{-- <table id="SmTable" class="table table-sm table-hover table-bordered table-striped autoWidth">
                                <thead class="bg-success text-white">
                                    <tr>
                                        <th style="text-align:center;">{{__('ged.libmarchandise')}}</th>
                                        <th style="text-align:center;">{{__('ged.annee')}}</th>
                                        <th style="text-align:center;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($marchandises  as  $vmarchandises)
                                        <tr>
                                            <td>{{$vmarchandises->LibelleMarchandises}}</td>
                                            <td>
                                                @php $cpt=0 @endphp
                                                @foreach ($vmarchandises->annees as $vannee )
                                                    @if($cpt>0)&nbsp;- &nbsp; @endif {{ $vannee->LibelleAnnees }}
                                                    @php $cpt+=1 @endphp
                                                @endforeach
                                            </td>
                                            <td>
                                                <form action="{{ route('Ged.marchandises.destroy',$vmarchandises->IdMarchandises)}}" method="POST">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE')}}
                                                    <input type="hidden" name="action" id="action" value="1">

                                                    @if(count($vmarchandises->transports)<=0)
                                                        <button class="btn btn-danger btn-sm" type="submit" data-toggle="confirmation" data-title="Confirmation" data-content="{{__('home.sure')}}" data-singleton="true" data-placement="left" data-popout="true"><i class="far fa-trash-alt"></i></button>
                                                    @endif
                                                    <a title="{{__('ventes.titremodifaccempt')}}" class="btn btn-light btn-sm" href="{{ route('Ged.marchandises.show', ['marchandise'=>$vmarchandises->IdMarchandises]) }}"><i class="fas fa-eye"></i></a>
                                                    <a title="{{__('ged.editmarchandise')}}" class="btn btn-warning btn-sm" href="{{ route('Ged.marchandises.edit', ['marchandise'=>$vmarchandises->IdMarchandises]) }}"><i class="fas fa-pencil-alt"></i></a>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <!-- Page header -->
                <div class="border-bottom pb-3 mb-3">
                    <div>
                        <h1 class="mb-1 h2 fw-bold">Liste des departements </h1>
                        <!-- Breadcrumb -->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="admin-dashboard.html">Accueil </a>
                                </li>
                                <li class="breadcrumb-item" aria-current="page">
                                    <a href="#">Departements</a>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div> --}}

        {{-- <div class="row">
            <!-- basic table -->
            <div class="col-xl-12 col-12 mb-5">
                <div class="card">
                    <!-- card header  -->
                    <div class="card-header">
                        <div class="row">
                            <div class="col-lg-10">
                                <h4 class="mb-1">Liste des services</h4>
                            </div>
                            <div class="col-lg-2">
                                <input type="search" wire:model="search" class="form-control" placeholder="Rechercher...">
                            </div>
                        </div>
                    </div>
                    <!-- table  -->
                    <div class="table-responsive">
                        <table class="table text-nowrap mb-0 table-centered">
                            <thead>
                                <tr>
                                    <th>Departement</th>
                                    <th>Date de création</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($allDepartements as $vdepartement)
                                <tr>

                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="ms-3 lh-1">
                                                <h5 class="mb-1"><a href="#" class="text-inherit">{{ $vdepartement->libelle }}</a></h5>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{ $vdepartement->created_at }}</td>
                                    <td>
                                        <button class="btn btn-outline-primary">Edition</button>
                                        <button class="btn btn-outline-danger">Supression</button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div> --}}
    </section>
</div>


@endsection
