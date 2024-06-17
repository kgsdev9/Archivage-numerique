<div class="header">
    <nav class="navbar-default navbar navbar-expand-lg">
        <a id="nav-toggle" href="#"><i class="fe fe-menu"></i></a>
        <div class="ms-lg-3 d-none d-md-none d-lg-block"></div>
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
                                <a class="nav-link" href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fe fe-power nav-icon"></i>Déconnexion</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>
