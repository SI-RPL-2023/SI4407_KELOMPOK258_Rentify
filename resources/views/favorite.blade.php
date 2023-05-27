<!DOCTYPE html>
<html lang="en">

<head>
    <title>Favorites</title>
    @include('header')
    

</head>

<body>
    @include('navbar')
    
    @include('modal')

    @include('alert')
    <!-- Start Content -->
    <br>
    <br>
    <center><h1>My Favorite(s)</h1></center>
    <div class="container py-5">
        <div class="row">

            
                
            @if (is_countable($data) && count($data) > 0)
            <div class="container py-5">
            
            
            @foreach ($data as $tampil)
                <div class="row col-12 col-md-4 mb-4">
                
                <div class="card h-100">
                        <a href="/detail/{{ $tampil->id}}">
                            <img class="card-img-top" src='{{ asset('storage/'.$tampil->image) }}' alt='No Image'/>
                        </a>
                        <div class="card-body">
                            
                            <a href="/detail/{{ $tampil->id}}" class="h2 text-decoration-none text-dark">{{ $tampil->property_name}}</a>
                            <p>{{ $tampil->lokasi}}</p>

                            <form action="/favorite_delete/{{ $tampil->id}}" method="get">
                            @csrf
                            @method('get')
                                
                            <div class="col d-grid">
                            
                                        <button class="btn btn-danger btn-lg" name="submit">Hapus</button>
                                    </div>
                            </form>
                        </div>
                        
                    </div>
                    
                
                </div>
                @endforeach
                </div>
                
                </div>
                
                @else
                   <center><p>No data found.</p></center> 
                @endif
                
                
                
            

            @if (is_countable($data) && count($data) > 0)
            <br>
            <p>Menampilkan {{count($data)}} Property</p>
            @endif
            </div>
            </div>
            
                
            
</body>

</html>