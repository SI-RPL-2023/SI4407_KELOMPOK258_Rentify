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
			<center><h2>Riwayat order</h2></center>
            <br>
		</div>				
    
        <div class="table-wrap">
            <center><table class="table table-responsive table-borderless"></center>
                <thead>
                    
                    <th>Nama Gedung</th>
                    <th>Harga</th>
                    <th>Durasi</th>
                    
                    <th>Tanggal Reservasi</th>
                    <th>Tanggal Check In</th>
                    <th>Total</th>
                    <th>Review</th>

                </thead>
                
                <tbody>
                
                    @foreach ($reservasi as $tampil)
                    <tr class="align-middle alert border-bottom" role="alert">
                        
                        <td>
                            <div>
                                <center><p class="m-0 fw-bold">{{$property->property_name}}</p></center>
                            </div>
                        </td>
                        <td>
                            <center><div class="">{{$formattedPrice}} /jam</div></center>
                        </td>
                        <td>
                            <center><div class="">{{$tampil->durasi}} jam</div></center>
                        </td>
                        <td class="d-">
                            <center><p>{{$tampil->created_at}}</p></center>
                        </td>
                        <td>
                            <center><p>{{$tampil->tanggal_sewa}}</p></center>
                        </td>
                        <td>
                            <center><div class="fw-600">{{'Rp ' .number_format($tampil->total / 1, 2)}}</div></center>
                        </td>
                        <td>
                            <center><div class="graph-star-rating-footer text-center mt-3 mb-3">
                                        <button type="submit" class="btn btn-outline-success btn-lg" name="submit">Review</button>
                                    </div></center>
                        </td>
                    </tr>
                    @endforeach
                
                </tbody>
                
            </table>
        </div>
    </div>
    @include('footer')
</body>