<div>
    <section class="container-fluid p-4">
        <div class="row">
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
        </div>

        <div class="row">
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

        </div>
    </section>
</div>
