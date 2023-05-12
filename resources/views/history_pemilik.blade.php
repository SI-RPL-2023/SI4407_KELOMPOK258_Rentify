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
			<center><h2>Riwayat Penyewaan Gedung {{$property->property_name}}</h2></center>
            <br>
		</div>				
        @if ($property != null)
        <div class="table-wrap">
            <center><table class="table table-responsive table-borderless"></center>
                <thead>
                    
                    <th>Nama Penyewa</th>
                    <th>Nama Gedung</th>
                    <th>Tanggal Reservasi</th>
                    <th>Tanggal Check In</th>
                    <th>Durasi</th>

                </thead>
                
                <tbody>
                
                    @foreach ($reservasi as $tampil)
                    <tr class="align-middle alert border-bottom" role="alert">
                        
                    <td class="text-center">
                            
                                <div class="col-md-8"><p class="m-0 fw-bold">{{$user->nama}}</p></div>
                        </td>
                        <td>
                            <div>
                                <center><a href="/detail/{{$property->id}}">{{$property->property_name}}</a></center>
                            </div>
                        </td>
                        <td class="d-">
                            <center><p>{{$tampil->created_at}}</p></center>
                        </td>
                        <td>
                            <center><p>{{$tampil->tanggal_sewa}}</p></center>
                        </td>
                        <td>
                            <center><div class="fw-600">{{$tampil->durasi}} Jam</div></center>
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
