<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pembayaran</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    
<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&family=Work+Sans:wght@800&display=swap');


  * {
      padding: 0;
      margin: 0;
      box-sizing: border-box;

  }

  body {
      padding: 15px;
      background-color: #69bb7e;
  }

  .container {
      margin: 20px auto;
      max-width: 1000px;
      background-color: white;
      padding: 0;
  }


  .form-control {
      height: 25px;
      width: 150px;
      border: none;
      border-radius: 0;
      font-weight: 800;
      padding: 0 0 5px 0;
      background-color: transparent;
      box-shadow: none;
      outline: none;
      border-bottom: 2px solid #ccc;
      margin: 0;
      font-size: 14px;
  }

  .form-control:focus {
      box-shadow: none;
      border-bottom: 2px solid #ccc;
      background-color: transparent;
  }

  .form-control2 {
      font-size: 14px;
      height: 20px;
      width: 55px;
      border: none;
      border-radius: 0;
      font-weight: 800;
      padding: 0 0 5px 0;
      background-color: transparent;
      box-shadow: none;
      outline: none;
      border-bottom: 2px solid #ccc;
      margin: 0;
  }

  .form-control2:focus {
      box-shadow: none;
      border-bottom: 2px solid #ccc;
      background-color: transparent;
  }

  .form-control3 {
      font-size: 14px;
      height: 20px;
      width: 30px;
      border: none;
      border-radius: 0;
      font-weight: 800;
      padding: 0 0 5px 0;
      background-color: transparent;
      box-shadow: none;
      outline: none;
      border-bottom: 2px solid #ccc;
      margin: 0;
  }

  .form-control3:focus {
      box-shadow: none;
      border-bottom: 2px solid #ccc;
      background-color: transparent;
  }

  p {
      margin: 0;
  }

  img {
      width: 100%;
      height: 100%;
      object-fit: fill;
  }

  .text-muted {
      font-size: 10px;
  }

  .textmuted {
      color: #6c757d;
      font-size: 13px;
  }

  .fs-14 {
      font-size: 14px;
  }

  .btn.btn-primary {
      width: 100%;
      height: 55px;
      border-radius: 0;
      padding: 13px 0;
      background-color: black;
      border: none;
      font-weight: 600;
  }

  .btn.btn-primary:hover .fas {
      transform: translateX(10px);
      transition: transform 0.5s ease
  }


  .fw-900 {
      font-weight: 900;
  }

  ::placeholder {
      font-size: 12px;
  }

  .ps-30 {
      padding-left: 30px;
  }

  .h4 {
      font-family: 'Work Sans', sans-serif !important;
      font-weight: 800 !important;
  }

  .textmuted,
  h5,
  .text-muted {
      font-family: 'Poppins', sans-serif;
  }
</style>    

</head>

<body>
  <div class="container">
        <div class="row m-0">
            <div class="col-lg-7 pb-5 pe-lg-5">
                <div class="row">
                    <div class="col-12 p-5">
                        <img src="{{ asset('storage/'.$data->image) }}"
                            alt="">
                    </div>
                    <div class="row m-0 bg-light">
                        <div class="col-md-4 col-6 ps-30 pe-0 my-4">
                            <p class="text-muted">Capacity</p>
                            <p class="h5">{{$data->kapasitas}}</p>
                        </div>
                        <div class="col-md-4 col-6  ps-30 my-4">
                            <p class="text-muted">Facility</p>
                            <p class="h5 m-0">{{$data->fasilitas}}</p>
                        </div>
                        <div class="col-md-4 col-6 ps-30 my-4">
                            <p class="text-muted">Address</p>
                            <p class="h5 m-0">{{$data->lokasi}}</p>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-5 p-0 ps-lg-4">
                <div class="row m-0">
                    <div class="col-12 px-4">
                        <div class="d-flex align-items-end mt-4 mb-2">
                            <p class="h4 m-0"><span class="pe-1">{{$data->property_name}}</span></p>
                            
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <p class="textmuted">Durasi Sewa</p>
                            <p class="fs-14 fw-bold">{{$total->durasi}}</p>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <p class="textmuted">Harga</p>
                            <p class="fs-14 fw-bold"><span class="fas fa-rupiah-sign pe-1"></span>{{$price}}</p>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <p class="textmuted">Biaya penanganan</p>
                            <p class="fs-14 fw-bold">Free</p>
                        </div>
                        
                        <div class="d-flex justify-content-between mb-3">
                            <p class="textmuted fw-bold">Total</p>
                            <div class="d-flex align-text-top ">
                                <span class="fas fa-rupiah-sign mt-1 pe-1 fs-14 "></span><span class="h4">{{$harga}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 px-0">
                        <div class="row bg-light m-0">
                            <div class="col-12 px-4 my-4">
                                <p class="fw-bold">Payment methods</p>
                            </div>
                            <div class="col-12 px-4">
                                <div class="d-flex  mb-4">
                                <div class="mb-3">
                                  <div class="radio-img">
                                      <input type="radio" name="bank" id="mandiri" value="mandiri">
                                      <label for="mandiri">
                                          <img src="{{ asset('assets/img/mandiri.png') }}" alt="" style="width:100px;">
                                      </label>
                                      <br>
                                  </div>
                                  <br>
                                  
                                  <div class="radio-img">
                                      <input type="radio" name="bank" id="bca" value="bca">
                                      <label for="bca">
                                          <img src="{{ asset('assets/img/bca.png') }}" alt="" style="width:100px;">
                                      </label>
                                      <br>
                                  </div>
                                  <br>
                                  

                                  <div class="radio-img">
                                      <input type="radio" name="bank" id="bri" value="bri">
                                      <label for="bri">
                                          <img src="{{ asset('assets/img/bri.png') }}" alt="" style="width:100px;">
                                      </label>
                                  <br>
                                  </div>
                                  <br>
                                  

                                  <div class="radio-img">
                                      <input type="radio" name="bank" id="bni" value="bni">
                                      <label for="bni">
                                          <img src="{{ asset('assets/img/bni.png') }}" alt="" style="width:100px;">
                                      </label>
                                      <br>
                                  </div>
                                
                              </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="row m-0">
                            <div class="col-12  mb-4 p-0">
                              <form action="/after_payment/{{$total->id}}" method="post">
                                @csrf
                                @method ('post')
                                <div class="mb-3">
                                  <input type="hidden" name="id_reservasi" value="{{$total->id}}">
                                </div>
                                <div class="mb-3">
                                  <input type="hidden" name="id_property" value="{{$data->id}}">
                                <div class="btn btn-primary">
                                  <button class="btn btn-primary">Purchase<span class="fas fa-arrow-right ps-2"></span></button>
                                  Purchase<span class="fas fa-arrow-right ps-2"></span>
                                </div>
                              </form>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

  </body>


</html>

