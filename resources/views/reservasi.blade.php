<!DOCTYPE html>
<html lang="en">

<head>
  <title>Reservasi </title>
    @include('header')
    

</head>

<body>
    @include('navbar')
    
    @include('modal')

    @include('alert')
    <!-- Form Start-->
    <div class="container">
        <div class="row">
          <div class="col-8">
<br><br>
            <h3>Sewa Gedung</h3><p>Sewa Gedung Melalui Rentify</p><br><br>
            @if (count($errors) > 0)
    <div class="alert alert-danger">
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </div>
    @endif
            <form action="/reservasi" method="post" enctype="multipart/form-data" >
            @csrf
            @method('post')

            

            <div class="mb-3">
              
              <input type="hidden" class="form-control"  name="id_property" value="{{$data->id}}" readonly>
            </div>

            <div class="mb-3">
              
              <img src="{{ asset('storage/'.$data->image) }}" style="width: 300px;" alt="">
            </div>
            <div class="mb-3">
              
              <h2>{{$data->property_name}}</h2>
            </div>

            <div class="mb-3">
              
              <input type="hidden" class="form-control"  name="id_property" value="{{$data->id}}">
            </div>

            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label"> <b>Tanggal Sewa</b></label>
              <input type="date" class="form-control"  name="tanggal_sewa">
            </div>

            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label"> <b>Durasi Sewa (Jam)</b></label>
              <input type="number" class="form-control"  name="durasi">
            </div>

            

          <button type="submit" name="Selesai" class="btn btn-primary">Lanjut ke Pembayaran</button>
          </form>
          </div>

        </div>
      </div>
      <!-- Form End-->
<br>
@include('footer')

  </body>
</html>