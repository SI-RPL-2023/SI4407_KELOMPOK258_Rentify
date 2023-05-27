<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{Auth::user()->nama}}'s Property</title>
    @include('header')
    

</head>
<style>
    
    .btn-group button {
    
        padding: 10px 66px; /* Some padding */
        cursor: pointer; /* Pointer/hand icon */
        float: left; /* Float the buttons side by side */
        
    }

    /* Clear floats (clearfix hack) */
    .btn-group:after {
        content: "";
        clear: both;
        display: table;
    }

    .btn-group button:not(:last-child) {
        border-right: none; /* Prevent double borders */
    }

    /* Add a background color on hover */
    .btn-group button:hover {
        background-color: #3e8e41;
    }
</style>


<body>
    @include('navbar')
    
    @include('modal')

    @include('alert')

    
    <div class="container py-5">
        <br><br>
        <center><h2>Menampilkan Property {{Auth::user()->nama}}</h2></center>
        <br><br>
        <div class="row">

            
            @if (is_countable($data) && count($data) > 0)
            <div class="row">
            <div class="row row-cols-1 row-cols-md-2">
                @foreach ($data as $tampil)
                <div class="col-12 col-md-4 mb-4">

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
                                <li class="text-warning text-right">{{'Rp ' .number_format($tampil->price / 1, 2)}} /jam</li>
                            </ul>
                            <a href="/detail/{{ $tampil->id}}" class="h2 text-decoration-none text-dark">{{ $tampil->property_name}}</a>
                            <p>{{ $tampil->alamat}}</p>
                            </div>
                            <div class="btn-group">
                                <form action="/delete_property/{{ $tampil->id}}" method="get">
                                    @csrf
                                    @method('GET')
                                <button id="hapus" class="btn btn-outline-danger"  >Hapus</button></center>
                                </form>
                                
                                <form action="/edit_property/{{ $tampil->id}}" method="get">
                                    @csrf
                                    @method('GET')
                                <button id="edit" class="btn btn-outline-success" >Edit</button></center>
                                </form>
                            </div>
                            <form action="/history_gedung/{{ $tampil->id}}" method="get">
                                    @csrf
                                    @method('GET')
                                <button id="hapus" class="btn btn-success btn-lg"  style="width:100%;">Riwayat Penyewaan</button></center>
                            </form>
                            
                    </div>
                    
                
                </div>
                @endforeach
                </div>
                </div>
            
            @else
                <center><p>No results found.</p></center>
            @endif
            @if (Auth::user())
                @if (Auth::check() && Auth::user()->access_type == 'Pemilik')
                    <br>
                    <br>
                    <form action="/add_property" method="get">
                        @csrf
                        @method('GET')
                        <div class="col d-grid">
                            <center><button type="submit" style="width:100%;" class="btn btn-outline-success btn-lg" name="submit">Tambahkan Property</button></center>
                        </div>
                    </form>
                    <br>
                    <br>
                @endif
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