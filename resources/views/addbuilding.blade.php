<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rentify</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    
        <!-- Close Top Nav -->


    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container d-flex justify-content-between align-items-center">

            <a class="navbar-brand text-success logo h1 align-self-center" href="index.html">
                Rentify
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-evenly mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="shop.html">Property</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About</a>
                        </li>
                        
                    </ul>
                </div>
                <div class="navbar align-self-center d-flex">
                    <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                        <div class="input-group">
                            <input type="text" class="form-control" id="inputMobileSearch" placeholder="Search">
                            <div class="input-group-text">
                                <i class="fa fa-fw fa-search"></i>
                            </div>
                        </div>
                    </div>
                    <a class="nav-icon d-none d-lg-inline" href="#" data-bs-toggle="modal" data-bs-target="#templatemo_search">
                        <i class="fa fa-fw fa-search text-dark mr-2"></i>
                    </a>
                    <a class="nav-icon position-relative text-decoration-none" href="#">
                        <i class="fa fa-fw fa-cart-arrow-down text-dark mr-1"></i>
                        <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">7</span>
                    </a>
                    <a class="nav-icon position-relative text-decoration-none" href="#">
                        <i class="fa fa-fw fa-user text-dark mr-3"></i>
                        <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">+99</span>
                    </a>
                </div>
            </div>

        </div>
    </nav>
    <!-- Close Header -->

    <!-- Form Start-->
    <div class="container">
        <div class="row">
          <div class="col-8">
<br><br>
            <h3>Add Your Building</h3><p>Tambahkan item baru ke Rentify</p><br><br>
            <form action="../config/insert.php" method="post" enctype="multipart/form-data" >
            @csrf
            @method('put')

            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label"> <b>Property Name</b></label>
              <input type="text" class="form-control" placeholder="..." name="property_name">
            </div>

            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label"><b>Category</b></label>
              <input type="text" class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search..." name="category">
              <datalist id="datalistOptions">
                <option value="Apartemen">
                <option value="Rumah">
                <option value="Hotel">
                <option value="Gedung">
                <option value="Kos">
              </datalist>
            </div>

            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label"><b>Price</b></label>
              <input type="text" class="form-control" placeholder="Rp 000.000,00" name="price">
            </div>

            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label"><b>Availability</b></label>
              <input type="text" class="form-control" placeholder="..." name="availability">
            </div>

            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label"><b>Kapasitas</b></label>
              <input type="text" class="form-control" placeholder="..." name="kapasitas">
            </div>
            
            <div class="col-12">
              <label for="inputAddress" class="form-label"><b>Lokasi</b></label>
              <input type="text" class="form-control" id="lokasi" placeholder="Jl.xxx no.x Bandung" name="lokasi">
            </div>

            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label"><b>Fasilitas</b></label>
              <textarea class="form-control" rows="3" name="fasilitas"></textarea>
            </div>
            
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label"><b>Deskripsi</b></label>
              <textarea class="form-control" rows="3" name="description"></textarea>
            </div>
            
            <div><label for="foto" class="form-label"><b>Image</b></label>
              <input class="form-control" type="file" id="image" name="image"><br></div>

          <button type="submit" name="Selesai" class="btn btn-primary">Selesai</button>
          </form>
          </div>

        </div>
      </div>
      <!-- Form End-->
<br>
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

  </body>
</html>