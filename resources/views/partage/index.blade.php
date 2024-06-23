@extends('layouts.app')
@section('content')
<section class="container d-flex flex-column vh-100">

    <div class="row align-items-center justify-content-center g-0 h-lg-100 py-10">
      <!-- Docs -->
      <div class="offset-xl-1 col-xl-4 col-lg-6 col-md-12 col-12 text-center text-lg-start">
        <h1 class="display-1 mb-3">Page en construction</h1>

        <p class="mb-5 lead px-4 px-md-0">
            Revenez plus tard pour découvrir cette fonctionnalité

        </p>
        <a href="{{route('home')}}" class="btn btn-primary me-2">Retourner</a>
      </div>
      <!-- img -->
      <div class="offset-xl-1 col-xl-6 col-lg-6 col-md-12 col-12 mt-8 mt-lg-0">
        <img src="{{asset('404-error-img.svg')}}" alt="error" class="w-100">
      </div>
    </div>
    <div class="row">
      <div class="offset-xl-1 col-xl-10 col-lg-12 col-md-12 col-12">
        <div class="row align-items-center my-6">
          <div class="col-md-6 col-8">
            <p class="mb-0">© Si team .</p>
          </div>

        </div>
      </div>
    </div>
  </section>
@endsection
