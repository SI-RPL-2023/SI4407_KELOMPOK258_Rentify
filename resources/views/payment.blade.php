<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pembayaran</title>
    @include('header')
    

</head>
<style>
    .radio-img {
        display: block;
    }
</style>
<body>
    @include('navbar')
    
    @include('modal')

    @include('alert')

    <!-- Form Start-->
    <div class="container">
        <div class="row">
          <div class="col-8">
<br><br>
            <h3>Pembayaran</h3><p>Pilih metode pembayaran</p><br><br>
            @if (count($errors) > 0)
            <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </div>
            @endif
            <form action="/after_payment/{{$data->id}}" method="POST" enctype="multipart/form-data" >
            @csrf
            @method('POST')

            <input type="hidden" name="id_property" value="{{$data->id}}">
              <input type="hidden" name="id_reservasi" value="{{$total->id}}">
            
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
            <br>
            <br>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label"> <b>Detail reservasi</b></label>
              <p>Nama Gedung                    : {{$data->property_name}}</p>
              <p>alamat                         : {{$data->lokasi}}</p>
              <b><h4>Total yang harus dibayar    : {{'Rp ' .number_format($total->total / 1, 2)}}</h4></b>
            </div>

            

            

          <button type="submit" name="Selesai" class="btn btn-primary">Selesai</button>
          </form>
          </div>

        </div>
      </div>
      <!-- Form End-->
<br>
@include('footer')

  </body>
</html>