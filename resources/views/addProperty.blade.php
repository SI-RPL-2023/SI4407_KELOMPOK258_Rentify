<!DOCTYPE html>
<html lang="en">

<head>
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
            <h3>Add Your Property</h3><p>Tambahkan item baru ke Rentify</p><br><br>
            @if (count($errors) > 0)
    <div class="alert alert-danger">
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </div>
    @endif
            <form action="/add_property" method="post" enctype="multipart/form-data" >
            @csrf
            @method('post')

            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label"> <b>ID Akun (otomatis)</b></label>
              <input type="text" class="form-control" placeholder="..." name="id_pemilik" value="{{Auth::user()->id}}" readonly>
            </div>

            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label"> <b>Property Name</b></label>
              <input type="text" class="form-control" placeholder="Nama gedung" name="property_name">
            </div>

            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label"><b>Category</b></label>
              <select name="category" id="category" class="form-control">
                <option value="Standard">Standard</option>
                <option value="Luxury">Luxury</option>
              </select>
            </div>

            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label"><b>Price</b></label>
              <input type="number" class="form-control" placeholder="1000000" name="price">
            </div>

            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label"><b>Availability</b></label>
              <select name="availability" id="availability" class="form-control">
                <option value="tersedia">Tersedia</option>
                <option value="Penuh">Penuh</option>
              </select>
            </div>

            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label"><b>Kapasitas</b></label>
              <input type="text" class="form-control" placeholder="..." name="kapasitas" id="kapasitas">
            </div>
            
            <div class="col-12">
              <label for="inputAddress" class="form-label"><b>Lokasi</b></label>
              <input type="text" class="form-control" id="lokasi" placeholder="Jl.xxx no.x Bandung" name="lokasi">
            </div>

            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label"><b>Fasilitas</b></label>
              <textarea class="form-control" rows="3" name="fasilitas" id="fasilitas"></textarea>
            </div>
            
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label"><b>Deskripsi</b></label>
              <textarea class="form-control" rows="3" name="description" id="description"></textarea>
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
@include('footer')

  </body>
</html>