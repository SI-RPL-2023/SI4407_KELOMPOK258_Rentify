<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{$data->property_name}}</title>
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
                            <h1 class="h2">{{$data->property_name}}</h1>
                            <p class="h3 py-2">{{$price}} /jam</p>
                            <p class="py-2">
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-secondary"></i>
                                <span class="list-inline-item text-dark">Rating 4.8 | 36 Comments</span>
                            </p>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <h6>Lokasi:</h6>
                                </li>
                                <li class="list-inline-item">
                                    <p class="text-muted"><strong>{{$data->lokasi}}</strong></p>
                                </li>
                            </ul>

                            <h6>Deskripsi:</h6>
                            <p>{{$data->description}}</p>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <h6>Kapasitas:</h6>
                                </li>
                                <li class="list-inline-item">
                                    <p class="text-muted"><strong>{{$data->kapasitas}}</strong></p>
                                </li>
                            </ul>

                            <h6>Fasilitas:</h6>
                            <p class="text-muted"><strong>{{$data->fasilitas}}</strong></p>

                            <form action="/reservasi/{{$data->id}}" method="GET">
                                @csrf
                                @method('GET')
                                
                                <div class="row pb-3">
                                    <div class="col d-grid">
                                        <button type="submit" class="btn btn-success btn-lg" >Sewa</button>
                                    </div>
                                    
                                </div>
                            </form>
                            <form action="/favorite" method="post">
                            @csrf
                            @method('POST')
                                
                            <div class="col d-grid">
                            <input type="hidden" name="id_property" value="{{ $data->id }}">
                            <input type="hidden" name="id_user" value="{{ Auth::user()->id }}">
                                        <button class="btn btn-success btn-lg" name="submit">Tambah ke Favorite</button>
                                    </div>
                            </form>

                        </div>
                    </div>
                </div>
           
    </section>
    <!-- Close Content -->

    

    @include('footer')

</body>

</html>