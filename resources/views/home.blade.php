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



    <!-- Start Banner Hero -->
    <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="assets/img/smesco.png" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">
                                <h1 class="h1 text-success"><b>Rentify</b></h1>
                                <p>
                                    Aplikasi Rentify yaitu suatu sistem informasi mengenai pemesanan dan penyewaan gedung berbasis web. Aplikasi Web ini mampu mengelola dan memonitor daftar gedung yang disewakan sesuai dengan budget dan keperluan yang diinginkan oleh konsumen (penyewa)
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="assets/img/smesco3.png" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1 text-success"><b>Rentify</b></h1>
                                <h3 class="h2">Luxury</h3>
                                <p>
                                    Tipe gedung Luxury ini menawarkan beberapa dekor mewah dan elegant untuk acara - acara penting serta mengutamakan keamanan dan kenyamanan.
                                    Selain itu adanya penerapan kapasitas maksimal dalam satu ruangan.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="assets/img/ayaka.png" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1 text-success"><b>Rentify</b></h1>
                                <h3 class="h2">Standard</h3>
                                <p>
                                    Sesuai namanya tipe gedung standar ini memiliki keterbasan fasilitas dan dekorasi gedung yang di butuhkan. 
                                    Namun, tipe standard ini banyak diminati seperti acara - acara formal meeting serta mengutamakan keamanan dan kenyamanannya.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
            <i class="fas fa-chevron-left"></i>
        </a>
        <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
            <i class="fas fa-chevron-right"></i>
        </a>
    </div>
    <!-- End Banner Hero -->

    @if (Auth::user())
    @if (Auth::check() && Auth::user()->access_type == 'Pemilik' or Auth::user()->access_type == 'Penyewa')
    <!-- Start Featured Product -->
    <section class="bg-light">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Featured Product</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="shop-single.html">
                            <img src="assets/img/ayaka.png" class="card-img-top" alt="...">
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
                                <li class="text-warning text-right">RP 1.900.000/jam</li>
                            </ul>
                            <a href="shop-single.html" class="h2 text-decoration-none text-dark">Ayaka Suites, Seruni 1</a>
                            <p>Senayan, Jakarta</p>
                            <p class="card-text">
                                Gedung Ayaka Suites ini memiliki kesan nyaman.
                            </p>
                            <p class="text-muted">Reviews (24)</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="shop-single.html">
                            <img src="assets/img/cyber2tower.png" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                </li>
                                <li class="text-warning text-right">RP 6.250.000/jam</li>
                            </ul>
                            <a href="shop-single.html" class="h2 text-decoration-none text-dark">Cyber 2 Tower</a>
                            <p>DKI Jakarta</p>
                            <p class="card-text">
                                Gedung pernikahan yang memiliki dekorasi yang mewah dan elegant
                            </p>
                            <p class="text-muted">Reviews (48)</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="shop-single.html">
                            <img src="assets/img/smesco2.png" class="card-img-top" alt="...">
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
                                <li class="text-warning text-right">RP 10.0000/jam</li>
                            </ul>
                            <a href="shop-single.html" class="h2 text-decoration-none text-dark">Smesco 2</a>
                            <p>Bandung</p>
                            <p class="card-text">
                                Gedung pernikahan yang paling mewah di Bandung.
                            </p>
                            <p class="text-muted">Reviews (74)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Featured Product -->
    @endif
    @endif

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