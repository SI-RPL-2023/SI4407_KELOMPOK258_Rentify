<!DOCTYPE html>
<html lang="en">

<head>
    @include('header')
    

</head>

<body>
    @include('navbar')
    
    @include('modal')
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
                
            @include('footer')
</body>

</html>