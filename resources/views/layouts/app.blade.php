
<!doctype html>
<html lang="en">
<head>
<link rel="stylesheet" href="{{asset('assets/libs/flatpickr/dist/flatpickr.min.css')}}">
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="description" content="#" />
<meta name="keywords" content="#" />
<meta name="author" content="#" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
<!-- Favicon icon-->
<link rel="shortcut icon" type="image/x-icon" href="" />
<!-- Libs CSS -->
<link rel="stylesheet" href="{{asset('assets/fonts/feather/feather.css')}}">
<link href="{{asset('assets/libs/bootstrap-icons/font/bootstrap-icons.min.css')}}" rel="stylesheet" />
<link rel="stylesheet" href="{{asset('assets/libs/simplebar/dist/simplebar.min.css')}}">
<!-- Theme CSS -->
<link rel="stylesheet" href="{{asset('assets/css/theme.min.css')}}">
 <link rel="canonical" href="#">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
 <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet">
 @livewireStyles

 <title>@yield('title')</title>
    </head>
    <body class="bg-light">
        <!-- Wrapper -->
        <div id="db-wrapper">
            <!-- navbar vertical -->
            <!-- Sidebar -->
<nav class="navbar-vertical navbar">
    <div class="vh-100" data-simplebar>
        <!-- Brand logo -->
        <a class="navbar-brand" href="#">
            <h2>Gestion DEV </h2>
        </a>
        <!-- Navbar nav -->
        <ul class="navbar-nav flex-column" id="sideNavbar">
            <li class="nav-item">
                <a
                    class="nav-link "
                    href="{{ route('home') }}"
                   >
                   <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-inbox"><polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline><path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"></path></svg> &nbsp;
                    Tableau de Bords
                </a>

            </li>
            <li class="nav-item">
                <a
                    class="nav-link  collapsed "
                    href="#"
                    data-bs-toggle="collapse"
                    data-bs-target="#navCourses"
                    aria-expanded="false"
                    aria-controls="navCourses">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-monitor"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect><line x1="8" y1="21" x2="16" y2="21"></line><line x1="12" y1="17" x2="12" y2="21"></line></svg> &nbsp;
                    Administration
                </a>
                <div id="navCourses" class="collapse " data-bs-parent="#sideNavbar">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link " href="{{route('roles.index')}}">Gestion role</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="{{route('users.index')}}">Gestion Utilisateurs</a>
                        </li>
                    </ul>
                </div>
            </li>


            <!-- Nav item -->
            <li class="nav-item">
                <a class="nav-link  collapsed " href="{{ route('departements.index') }}" hx-boost="true">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg> &nbsp;
                    Gestion Departements
                </a>

            </li>
            <!-- Nav item -->
            <li class="nav-item">
                <a
                    class="nav-link  collapsed "
                    href="{{route('dossier.index')}}"
                    >
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-folder"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path></svg> &nbsp;
                    Gestion Dossiers
                </a>

            </li>
{{--
            <li class="nav-item">
                <a
                    class="nav-link  collapsed "
                    href=""

                    >
                    <i class="nav-icon fe fe-lock me-2"></i>
                   Partage
                </a>

            </li>
            <!-- Nav item --> --}}

            <!-- Nav item -->
            <li class="nav-item">
                <a
                    class="nav-link"
                    href="{{route('annee.index')}}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chrome"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="4"></circle><line x1="21.17" y1="8" x2="12" y2="8"></line><line x1="3.95" y1="6.06" x2="8.54" y2="14"></line><line x1="10.88" y1="21.94" x2="15.46" y2="14"></line></svg> &nbsp;
                    Gestion des années
                </a>

            </li>

            <li class="nav-item">
                <div class="nav-divider"></div>
            </li>
            <!-- Nav item -->
            <li class="nav-item">
                <div class="navbar-heading">MODULE</div>
            </li>
            <!-- Nav item -->
            <li class="nav-item">


                <a class="nav-link " href="{{route('document.index')}}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect></svg> &nbsp;

                   Gestion Documents
                </a>


                <a class="nav-link " href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share"><path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path><polyline points="16 6 12 2 8 6"></polyline><line x1="12" y1="2" x2="12" y2="15"></line></svg> &nbsp;
                   Gestion Partage
                </a>

                <a class="nav-link " href="{{route('rappport.liste')}}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bar-chart-2"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg> &nbsp;
                    Rapports Dossiers
                </a>

            </li>

            <li class="nav-item">
                <div class="nav-divider"></div>
            </li>
            <!-- Nav item -->
            <li class="nav-item">
                <div class="navbar-heading">Messagérie & Notification </div>
            </li>
            <!-- Nav item -->
            <li class="nav-item">
                <a class="nav-link " href="#">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg> &nbsp;
                    </span>
                    <span class="ms-2">Messagerie</span>
                </a>
            </li>


            <!-- Nav item -->
            <li class="nav-item">
                <div class="nav-divider"></div>
            </li>
            <!-- Nav item -->
            <li class="nav-item">
                <div class="navbar-heading">Parametre</div>
            </li>
            <!-- Nav item -->
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-package"><line x1="16.5" y1="9.4" x2="7.5" y2="4.21"></line><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg> &nbsp;
                   Historique
                </a>
            </li>
            <!-- Nav item -->
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg> &nbsp;
                    Documentation

                </a>
            </li>


        </ul>
        <!-- Card -->
        <div class="card bg-dark-secondary shadow-none text-center mx-4 my-8">
            <div class="card-body py-6">

                <div class="mt-4">
                    <h5 class="text-white">Carriere pro plus SI Team </h5>
                    <p class="text-white-50 fs-6">Contactez nous en cas de probleme </p>
                    <a href="#" class="btn btn-white btn-sm mt-2">Démerraer une discution</a>
                </div>
            </div>
        </div>
    </div>
</nav>



<main id="page-content">
	<div class="header">
		<nav class="navbar-default navbar navbar-expand-lg">
			<a id="nav-toggle" href="#"><i class="fe fe-menu"></i></a>
			<div class="ms-lg-3 d-none d-md-none d-lg-block">

			</div>
			<!--Navbar nav -->
			<div class="ms-auto d-flex">
				<ul class="navbar-nav navbar-right-wrap ms-2 d-flex nav-top-wrap">

					<li class="dropdown ms-2">
						<a class="rounded-circle" href="#" role="button" id="dropdownUser" data-bs-toggle="dropdown" aria-expanded="false">
							<div class="avatar avatar-md avatar-indicators avatar-online">
								<img alt="avatar" src="{{asset('images/avatar.jpg')}}" class="rounded-circle" />
							</div>
						</a>
						<div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownUser">
							<div class="dropdown-item">
								<div class="d-flex">
									<div class="avatar avatar-md avatar-indicators avatar-online">
										<img alt="avatar" src="{{asset('images/avatar.jpg')}}" class="rounded-circle" />
									</div>
									<div class="ms-3 lh-1">
										<h5 class="mb-1">
											KGS INFORMATIQUE
										</h5>
										<p class="mb-0">
											kgsinformatique@gmail.com
										</p>
									</div>
								</div>
							</div>
							<div class="dropdown-divider"></div>

							<div class="dropdown-divider"></div>
							<ul class="list-unstyled">
								<li>
									<a class="dropdown-item" href="#"><i class="fe fe-power me-2"></i>Déconnexion</a>
								</li>
							</ul>
						</div>
					</li>
				</ul>
			</div>
		</nav>
	</div>
    @yield('content')
</main>
</div>


<footer class="pt-5 pb-3 bg-white text-center">
    <div class="container">
        <p>Si Team Informatique Carriere Pro plus  </p>
    </div>
</footer>
<script src="{{asset('assets/js/jquery-3.5.1.min.js')}}"></script>
<script src="{{asset('assets/libs/@popperjs/core/dist/umd/popper.min.js')}}"></script>
<script src="{{asset('assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/js/dataTables.bootstrap5.min.js')}}"></script>
<script src="{{asset('assets/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assets/libs/simplebar/dist/simplebar.min.js')}}"></script>
<script src="{{asset('assets/js/theme.min.js')}}"></script>
<script src="{{asset('assets/libs/flatpickr/dist/flatpickr.min.js')}}"> </script>
<script src="{{asset('assets/js/vendors/flatpickr.js')}}"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="{{asset('assets/js/functiondossier.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="{{asset('assets/js/datatables.js')}}"></script>
<script src="{{asset('assets/js/functiontypedocument.js')}}"></script>
<script src="{{asset('assets/js/vendors/functiondocument.js')}}"></script>
<script src="{{asset('assets/js/superglobalfunction.js')}}"></script>
@yield('scripts')
@livewireScripts
</body>
</html>
