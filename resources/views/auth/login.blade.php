
<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">

<head>

    <meta charset="utf-8" />
    <title>Espace De Connexion </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Layout config Js -->
    <script src="{{ asset('auth_assets/layout.js') }}"></script>
    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="{{ asset('auth_assets/bootstrap.min.css') }}">
    <!-- Icons Css -->
    <link rel="stylesheet" href="{{ asset('auth_assets/icons.min.css') }}">
    <!-- App Css-->
    <link rel="stylesheet" href="{{ asset('auth_assets/app.min.css') }}">
    <!-- custom Css-->

    <link rel="stylesheet" href="{{ asset('auth_assets/custom.min.css') }}">

</head>

<body>

    <div class="auth-page-wrapper pt-5">
        <!-- auth page bg -->
        <div class="auth-one-bg-position auth-one-bg">
            <img src="{{ asset('images/SONACO_Objectif.jpg') }}" alt="">


        </div>

        <!-- auth page content -->
        <div class="auth-page-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mt-sm-5 mb-4 text-white-50">
                            <div>
                                <a href="index.html" class="d-inline-block auth-logo">
                                    <img src="assets/images/logo-light.png" alt="" height="20">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card mt-4 card-bg-fill">

                            <div class="card-body p-4">
                                <div class="text-center mt-2">
                                    <h5 class="text-primary">Bienvenue sur Gestion Dev App !</h5>
                                    <p class="text-muted">Un service de qualité une nouvelle plateforme de qualite.</p>
                                </div>
                                <div class="p-2 mt-4">
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __(' Addresse  E-Mail ') }}</label>
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <div class="float-end">
                                                <a href="{{ route('password.request') }}" class="text-muted">Mot de passe oublié?</a>
                                            </div>
                                            <label class="form-label" for="password-input">Mot de passe </label>
                                            <div class="position-relative auth-pass-inputgroup mb-3">
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="auth-remember-check"> {{ __('Se Souvenir de  moi ') }}</label>
                                        </div>

                                        <div class="mt-4">
                                            <button class="btn btn-success w-100" type="submit">   {{ __('Connexion') }}</button>
                                        </div>
                                    </form>

                                    <div class="mt-4 text-center">
                                        <p class="mb-0"><a href="{{route('register')}}" class="fw-semibold text-primary text-decoration-underline"> Demande de compte </a> </p>
                                    </div>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- JAVASCRIPT -->
    <script src="{{ asset('auth_assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('auth_assets/js/simplebar.min.js') }}"></script>
    <script src="{{ asset('auth_assets/js/waves.min.js') }}"></script>
    <script src="{{ asset('auth_assets/js/feather.min.js') }}"></script>
    <script src="{{ asset('auth_assets/js/lord-icon-2.1.0.js') }}"></script>
    <script src="{{ asset('auth_assets/js/plugins.js') }}"></script>
    <!-- particles js -->
    <script src="{{ asset('auth_assets/js/particles.app.js') }}"></script>
    <!-- particles app js -->
    <script src="assets/js/pages/particles.app.js"></script>
    <!-- password-addon init -->
    <script src="{{ asset('auth_assets/js/password-addon.init.js') }}"></script>
</body>

</html>
