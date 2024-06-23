@extends('layouts.app')
@section('content')
<section class="container-fluid p-4">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
            <div class="border-bottom pb-3 mb-3 d-lg-flex justify-content-between align-items-center">
                <div class="mb-3 mb-lg-0">
                    <h1 class="mb-0 h2 fw-bold">Modificiation d'un utilisateur Utilisateurs</h1>
                </div>
                <div class="d-flex">
                    <a href="{{route('users.index')}}" class="btn btn-primary btn-sm"> <i class="fe fe-plus"></i>Retourner</a>
                </div>
            </div>
        </div>
    </div>
    <h5>Création utilisateur</h5>
    <hr>
    <div class="row card">
        <div>
            <form class="row gx-3 needs-validation" action="{{route('users.update', $users->id)}}" method="POST">
                @csrf
                @method('PATCH')
                <div class="mb-3 col-12 col-md-6">
                    <label class="form-label" for="fname">Nom d'utulisateur</label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="Nom d'utilisateur" required="" value="{{$users->name}}">
                </div>
                <div class="mb-3 col-12 col-md-6">
                    <label class="form-label" for="lname">Email de l'utulisateur</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="Adresse email" required="" value="{{$users->email}}">
                </div>
                <div class="mb-3 col-12 col-md-6">
                    <label class="form-label" for="phone">Nouveau mot de passse  </label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="Phone" >
                </div>

                <div class="mb-3 col-12 col-md-6">
                    <label class="form-label" for="role_id">Choisir</label>
                    <select class="form-select" id="role_id" name="role_id" required="">
                        <option value="">Seletionner un role </option>
                        @foreach ($listeroles as $vlisteroles)
                        <option value="{{$vlisteroles->id}}" {{$vlisteroles->id == $users->role_id ? 'selected':''}}>{{$vlisteroles->libelle}}</option>
                        @endforeach
                    </select>

                </div>
                <div class="mb-3 col-12 col-md-6">
                    <label class="form-label" for="departement_id">Département</label>
                    <select class="form-select" id="departement_id" name="departement_id" required="">
                        <option value="">Seletionner un departement </option>
                        @foreach ($listedepartements as $vlistedepartements)
                        <option value="{{$vlistedepartements->id}}" {{$vlistedepartements->id == $users->departement_id ? 'selected':''}}>{{$vlistedepartements->libelle}}</option>
                        @endforeach
                    </select>
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
