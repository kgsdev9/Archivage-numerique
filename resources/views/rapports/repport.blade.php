@extends('layouts.app')
@section('content')
<section class="container-fluid p-4">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
            <!-- Page header -->
            <div class="border-bottom pb-3 mb-3 d-lg-flex align-items-center justify-content-between">
                <div class="mb-2 mb-lg-0">
                    <h1 class="mb-0 h2 fw-bold">RAPPORT DOSSIERS  </h1>
                    <!-- Breadcrumb -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#" class="text-dark">Dossiers </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#" class="text-dark">Annéee  </a>
                            </li>

                            <li class="breadcrumb-item">
                                <a href="#" class="text-dark">Graphe</a>
                            </li>

                        </ol>
                    </nav>
                </div>

            </div>
        </div>
    </div>
    <h5>Liste de tous les dossiers du departement </h5>
    <hr>

    <div class="row">

        <div class="col-xl-12 col-lg-12 col-md-12 col-12">
            <!-- Card -->
            <div class="card mb-4">
                <!-- Card header -->
                <div class="card-header align-items-center card-header-height d-flex justify-content-between align-items-center">
                    <div>
                        <h4 class="mb-0">Statistique des dossiers crées par année </h4>
                    </div>

                </div>

                <canvas id="myChart" style="height:350px;"></canvas>

            </div>
        </div>
    </div>

</section>

@endsection

@section('scripts')

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: {!! json_encode(array_values($annees)) !!},
            datasets: [{
                label: 'Nombre de dossiers créés par années ',
                data: {!! json_encode($nombreDossiers) !!},
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>

@endsection
