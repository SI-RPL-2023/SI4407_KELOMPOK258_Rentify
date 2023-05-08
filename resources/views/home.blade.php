<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>
    @include('header')
    

</head>

<body>
    @include('navbar')
    
    @include('modal')

    @include('alert')

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
    @include('footer')
</body>

</html>