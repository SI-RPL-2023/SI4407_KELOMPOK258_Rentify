<!-- Close Top Nav -->


    <!-- Header -->
    
    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container d-flex justify-content-between align-items-center">

            <a class="navbar-brand text-success logo h1 align-self-center" href="/"><img src="assets/img/logo.png" alt="" style="width:50px ;">
                Rentify
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-evenly mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        @if (Auth::user())
                        @if (Auth::check() && Auth::user()->access_type == 'Pemilik' or Auth::user()->access_type == 'Penyewa')
                        <li class="nav-item">
                            <a class="nav-link" href="/property">Property</a>
                        </li>
                        @endif
                        @endif

                        @if (Auth::user())
                        @if (Auth::check() && Auth::user()->access_type == 'Penyewa')
                        <li class="nav-item">
                            <a class="nav-link" href="/history">History</a>
                        </li>
                        @endif
                        @endif

                        @if (Auth::user())
                        @if (Auth::check() && Auth::user()->access_type == 'Pemilik')
                        <li class="nav-item">
                            <a class="nav-link" href="/my_property/{{Auth::user()->id}}">My Property</a>
                        </li>
                        @endif
                        @endif
                        
                        
                        <li class="nav-item">
                            <a class="nav-link" href="/aboutus">About</a>
                        </li>
                        

                        @if (Auth::user())
                        @if (Auth::check() && Auth::user()->access_type == 'Admin')
                        <li class="nav-item">
                            <a class="nav-link" href="/list_gedung">List Gedung</a>
                        </li>
                        @endif
                        @endif

                        @if (Auth::user())
                        @if (Auth::check() && Auth::user()->access_type == 'Admin')
                        <li class="nav-item">
                            <a class="nav-link" href="/list_user">Users</a>
                        </li>
                        @endif
                        @endif

                        @if (Auth::user())
                        @if (Auth::check() && Auth::user()->access_type == 'Admin')
                        <li class="nav-item">
                            <a class="nav-link" href="/list_reservasi">Reservations</a>
                        </li>
                        @endif
                        @endif
                    </ul>
                </div>
                <div class="navbar align-self-center d-flex">
                    <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                        <div class="input-group">
                            <form action="/search" method="post">
                            @csrf
                            @method('POST')
                                <input type="text" class="form-control" id="search" placeholder="Masukkan Kota">
                                <div class="input-group-text">
                                    <i class="fa fa-fw fa-search"></i>
                                </div>
                            </form>
                            
                        </div>
                    </div>
                    <a class="nav-icon d-none d-lg-inline" href="#" data-bs-toggle="modal" data-bs-target="#templatemo_search">
                        <i class="fa fa-fw fa-search text-dark mr-2"></i>
                    </a>
                    @if(Auth::user())
                    <a class="nav-icon position-relative text-decoration-none" href="/favorite/{{Auth::user()->id}}">
                        <i class="fa fa-fw fa-heart text-dark mr-1"></i>
                        <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">{{$count}}
                            </span>
                    </a>
                    @else
                    <a class="nav-icon position-relative text-decoration-none" href="">
                        <i class="fa fa-fw fa-heart text-dark mr-1"></i>
                        <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark"></span>
                    </a>
                    @endif
                    
                    @if(Auth::user())
                <div class="nav-item dropdown">
                    <a class="nav-icon position-relative text-decoration-none nav-link dropdown-toggle" data-bs-toggle="dropdown">{{Auth::user()->name}}
                    <i class="fa fa-fw fa-user text-dark mr-3"></i>
                        <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark"></span>
                    </a>
                    <div class="dropdown-menu m-0">
                        <a href="/profile" class="dropdown-item">Profile</a>
                        <a href="/logout" class="dropdown-item">Logout</a>
                    </div>
                </div>
                @else
                <a class="nav-icon position-relative text-decoration-none nav-link dropdown-toggle" data-bs-toggle="dropdown">
                <i class="fa fa-fw fa-user text-dark mr-3"></i>
                        
                <div class="dropdown-menu m-0">
                        <a href="/login" class="dropdown-item">Login</a>
                        
                    </div>
                        
                    </a>
                    @endif
                </div>
            </div>

        </div>
    </nav>
    <!-- Close Header -->