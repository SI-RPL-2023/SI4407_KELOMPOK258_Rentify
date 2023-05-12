<!DOCTYPE html>
<html lang="en">

<head>
    {{-- <title>{{$data->property_name}}</title> ->belum buat rute --}}
    <title>Edit</title>
    @include('header')
    

</head>

<body>
    @include('navbar')
    
    @include('modal')

    @include('alert')

    <!-- Open Content -->
    
    @if (count($errors) > 0)
    <div class="alert alert-danger">
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </div>
    @endif
    <section class="bg-light">
        <div class="container pb-5">
            <div class="row">
            
                <div class="col-lg-5 mt-5">
                
                    <div class="card mb-3 justify-content-center align-items-center">
                         <img id="product-detail" class="card-img img-fluid" src='{{ asset('storage/'.$data->image) }}' alt='No Image' > 
                    </div>
                    </div>
                    
            
                       
                        
                <!-- col end -->
                <div class="col-lg-7 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <form action="/edit_property/{{$data->id}}" method="post" enctype="multipart/form-data" >
                                @csrf
                                @method('post')
                    
                                <div class="mb-3">
                                  
                                  <input type="hidden" class="form-control" placeholder="..." name="id_pemilik" value="{{Auth::user()->id}}" readonly>
                                </div>
                    
                                <div class="mb-3">
                                  <label for="exampleFormControlInput1" class="form-label"> <b>Property Name</b></label>
                                  <input type="text" class="form-control" placeholder="{{$data->property_name}}" name="property_name">
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
                                  <input type="number" class="form-control" placeholder="{{$data->price}}" name="price">
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
                                  <input type="text" class="form-control" placeholder="{{$data->kapasitas}}" name="kapasitas" id="kapasitas">
                                </div>
                                
                                <div class="col-12">
                                  <label for="inputAddress" class="form-label"><b>Lokasi</b></label>
                                  <input type="text" class="form-control" id="lokasi" placeholder="{{$data->lokasi}}" name="lokasi">
                                </div>
                    
                                <div class="mb-3">
                                  <label for="exampleFormControlTextarea1" class="form-label"><b>Fasilitas</b></label>
                                  <textarea class="form-control" rows="3" name="fasilitas" id="fasilitas" placeholder="{{$data->fasilitas}}"></textarea>
                                </div>
                                
                                <div class="mb-3">
                                  <label for="exampleFormControlTextarea1" class="form-label"><b>Deskripsi</b></label>
                                  <textarea class="form-control" rows="3" name="description" id="description" placeholder="{{$data->description}}"></textarea>
                                </div>
                                
                                <div><label for="foto" class="form-label"><b>Image</b></label>
                                  <input class="form-control" type="file" id="image" name="image"><br></div>
                    
                              <button type="submit" name="Selesai" class="btn btn-primary">Selesai</button>
                              
                              </form>
                              <form action="/my_property{{Auth::id()}}" method="get">
                                <button type="button" name="Cancel"class="btn btn-secondary">Cancel</button>
                              </form>
                        </div>
                    </div>
                </div>
           
    </section>
    <!-- Close Content -->

    

    @include('footer')

</body>

</html>