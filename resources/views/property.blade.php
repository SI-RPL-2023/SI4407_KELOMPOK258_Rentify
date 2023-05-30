<!DOCTYPE html>
<html lang="en">

<head>
    <title>Properties</title>
    @include('header')
    

</head>

<body>
    @include('navbar')
    
    @include('modal')

    @include('alert')
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
            
                
    <section >
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">List of Properties</h1>
                </div>
            </div>
            <div class="row">
            @foreach ($data as $tampil)
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="/detail/{{ $tampil->id}}">
                            <img src="{{ asset('storage/'.$tampil->image) }}" class="card-img-top" alt="..." style="height: 250px;">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                @if ($tampil->rating == 5)
                                
                                <a href="#"><i class="fa fa-star text-warning"></i></a>
                                <a href="#"><i class="fa fa-star text-warning"></i></a>
                                <a href="#"><i class="fa fa-star text-warning"></i></a>
                                <a href="#"><i class="fa fa-star text-warning"></i></a>
                                <a href="#"><i class="fa fa-star text-warning"></i></a>
                            @elseif ($tampil->rating >= 4)
                                
                                <a href="#"><i class="fa fa-star text-warning"></i></a>
                                <a href="#"><i class="fa fa-star text-warning"></i></a>
                                <a href="#"><i class="fa fa-star text-warning"></i></a>
                                <a href="#"><i class="fa fa-star text-warning"></i></a>
                                <a href="#"><i class="fa fa-star text-secondary"></i></a>
                                
                            @elseif ($tampil->rating >= 3)
                            
                                <a href="#"><i class="fa fa-star text-warning"></i></a>
                                <a href="#"><i class="fa fa-star text-warning"></i></a>
                                <a href="#"><i class="fa fa-star text-warning"></i></a>
                                <a href="#"><i class="fa fa-star text-secondary"></i></a>
                                <a href="#"><i class="fa fa-star text-secondary"></i></a>
                                
                            @elseif ($tampil->rating >= 2)
                                
                                <a href="#"><i class="fa fa-star text-warning"></i></a>
                                <a href="#"><i class="fa fa-star text-warning"></i></a>
                                <a href="#"><i class="fa fa-star text-secondary"></i></a>
                                <a href="#"><i class="fa fa-star text-secondary"></i></a>
                                <a href="#"><i class="fa fa-star text-secondary"></i></a>
                                
                            @elseif ($tampil->rating >= 1)
                                
                                <a href="#"><i class="fa fa-star text-warning"></i></a>
                                <a href="#"><i class="fa fa-star text-secondary"></i></a>
                                <a href="#"><i class="fa fa-star text-secondary"></i></a>
                                <a href="#"><i class="fa fa-star text-secondary"></i></a>
                                <a href="#"><i class="fa fa-star text-secondary"></i></a>
                                
                            @else
                                
                                <a href="#"><i class="fa fa-star text-secondary"></i></a>
                                <a href="#"><i class="fa fa-star text-secondary"></i></a>
                                <a href="#"><i class="fa fa-star text-secondary"></i></a>
                                <a href="#"><i class="fa fa-star text-secondary"></i></a>
                                <a href="#"><i class="fa fa-star text-secondary"></i></a>
                                
                            @endif
                                </li>
                                
                                <li class="text-warning text-right">{{'Rp ' .number_format($tampil->price / 1, 2)}} /jam</li>
                            </ul>
                            <a href="/detail/{{ $tampil->id}}" class="h2 text-decoration-none text-dark">{{ $tampil->property_name}}</a>
                            <p>{{ $tampil->lokasi}}</p>
                            <p class="text-muted" style="vertical-align: bottom;">Reviews ({{ $tampil->jumlah}})</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
                
                @else
                   <center><p>No data found.</p></center> 
                @endif
                
                
                
            

            @if (is_countable($data) && count($data) > 0)
            <br>
            <p>Menampilkan {{count($data)}} Property</p>
            @endif
            </div>
            </div>
            
                
            @include('footer')
</body>

</html>