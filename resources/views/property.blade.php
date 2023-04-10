<!DOCTYPE html>
<html lang="en">

<head>
    <title>Rentify</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/logo.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo.ico">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">

    

</head>

<body>

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
                            <a class="nav-link" href="">List Gedung</a>
                        </li>
                        @endif
                        @endif

                        @if (Auth::user())
                        @if (Auth::check() && Auth::user()->access_type == 'Admin')
                        <li class="nav-item">
                            <a class="nav-link" href="">Users</a>
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
                    <a class="nav-icon position-relative text-decoration-none" href="#">
                        <i class="fa fa-fw fa-heart text-dark mr-1"></i>
                        <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">7</span>
                    </a>
                    
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

    <!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/search" method="get" class="modal-content modal-body border-0 p-0">
                @csrf
                @method('GET')
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="search" name="search" placeholder="Masukkan nama kota">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
    <!-- Start Content -->
    <div class="container py-5">
        <div class="row">

            <div class="col-lg-6">
                <h1 class="h2 pb-4">Kategori</h1>
                <div class="col-md-6 pb-4">
                    <div class="d-flex">
                        <select class="form-control">
                            <option>Kategori</option>
                            <option>Luxury</option>
                            <option>Standard</option>
                        </select>
                    </div>
                </div>
            </div>
                
            @if (is_countable($data) && count($data) > 0)
            <div class="container py-5">
            @foreach ($data as $tampil)
            <div class="row row-cols-1 row-cols-md-2">
                <div class="row col-12 col-md-4 mb-4">
                
                <div class="card h-100">
                        <a href="/detail/{{ $tampil->id}}">
                            <img class="card-img-top" src='{{ asset('storage/'.$tampil->image) }}' alt='No Image'/>
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                </li>
                                <li class="text-warning text-right">RP {{ $tampil->price}}/jam</li>
                            </ul>
                            <a href="/detail/{{ $tampil->id}}" class="h2 text-decoration-none text-dark">{{ $tampil->property_name}}</a>
                            <p>{{ $tampil->lokasi}}</p>
                        </div>
                    </div>
                </div>
                </div>
                
                @endforeach
                @else
                   <center><p>No data found.</p></center> 
                @endif
                
            

            @if (is_countable($data) && count($data) > 0)
            <br>
            <p>Menampilkan {{is_countable($data) && count($data)}} Property</p>
            @endif
            </div>
            </div>
            </div>
            </div>
                
    <!-- Start Footer -->
    <footer class="bg-dark" id="tempaltemo_footer">
        <div class="container">
            <div class="row">

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-success border-bottom pb-3 border-light logo">Rentify</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li>
                            <i class="fas fa-map-marker-alt fa-fw"></i>
                            Kota Bandung
                        </li>
                        <li>
                            <i class="fa fa-phone fa-fw"></i>
                            <a class="text-decoration-none" href="tel:010-020-0340">021-5467897</a>
                        </li>
                        <li>
                            <i class="fa fa-envelope fa-fw"></i>
                            <a class="text-decoration-none" href="mailto:info@company.com">infogedungRentify@gmail.com</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Products</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" href="#">Luxury</a></li>
                        <li><a class="text-decoration-none" href="#">Standard</a></li>
                    </ul>
                </div>

            </div>
     

    <!-- Start Script -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- End Script -->
</body>

</html>