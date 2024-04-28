
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
                                    <form action="https://themesbrand.com/velzon/html/master/index.html">

                                        <div class="mb-3">
                                            <label for="username" class="form-label">Username</label>
                                            <input type="text" class="form-control" id="username" placeholder="Enter username">
                                        </div>

                                        <div class="mb-3">
                                            <div class="float-end">
                                                <a href="auth-pass-reset-basic.html" class="text-muted">Mot de passe oublié?</a>
                                            </div>
                                            <label class="form-label" for="password-input">Password</label>
                                            <div class="position-relative auth-pass-inputgroup mb-3">
                                                <input type="password" class="form-control pe-5 password-input" placeholder="Enter password" id="password-input">
                                                <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon material-shadow-none" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                            </div>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="auth-remember-check">
                                            <label class="form-check-label" for="auth-remember-check">Se souvenir de moi </label>
                                        </div>

                                        <div class="mt-4">
                                            <button class="btn btn-success w-100" type="submit">Connexion</button>
                                        </div>
                                    </form>

                                    <div class="mt-4 text-center">
                                        <p class="mb-0"><a href="#" class="fw-semibold text-primary text-decoration-underline"> Demande de compte  </a> </p>
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
