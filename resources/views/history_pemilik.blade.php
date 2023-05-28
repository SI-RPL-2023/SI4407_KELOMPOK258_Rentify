<!DOCTYPE html>
<head>
    <title>Riwayat</title>
    @include('header')
    <link rel="stylesheet" href="{{ asset('assets/css/history.css')}}">
</head>
<body>
    @include('navbar')
    
    @include('modal')

    @include('alert')
    
		<div class="section-title text-center">
            <br>
            <br>
			<center><h2>Riwayat Penyewaan Gedung {{$property2->property_name}}</h2></center>
            <br>
		</div>				
        @if ($data != null)
        <div class="table-wrap">
            <center><table class="table table-responsive table-borderless"></center>
                <thead>
                    <th>Foto Gedung</th>
                    <th>Nama Penyewa</th>
                    <th>Nama Gedung</th>
                    <th>Tanggal Reservasi</th>
                    <th>Tanggal Check In</th>
                    <th>Durasi</th>

                </thead>
                
                <tbody>
                
                    @foreach ($data as $tampil)
                    <tr class="align-middle alert border-bottom" role="alert">
                        <td class="text-center">
                            <img class="pic"
                                src="{{ asset('storage/'.$tampil->property->image) }}" class="img-fluid" alt="">
                                
                        </td>
                    <td class="text-center">
                            
                                <div class="col-md-8"><p class="m-0 fw-bold">{{$tampil->user->nama}}</p></div>
                        </td>
                        <td>
                            <div>
                                <a href="/detail/{{$tampil->property->id}}">{{$tampil->property->property_name}}</a>
                            </div>
                        </td>
                        <td class="d-">
                            <p>{{$tampil->reservasi->created_at}}</p>
                        </td>
                        <td>
                            <p>{{$tampil->reservasi->tanggal_sewa}}</p>
                        </td>
                        <td>
                            <div class="fw-600">{{$tampil->reservasi->durasi}} Jam</div>
                        </td>
                    </tr>
                    @endforeach
                
                </tbody>
                
            </table>
        </div>
    </div>
    
    @include('footer')
    @else
    <center><p>No results found.</p></center>
    @endif
</body>
