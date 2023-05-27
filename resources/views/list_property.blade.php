<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{Auth::user()->nama}}'s Property</title>
    @include('header')
    

</head>
<style>
    
    .panel{
        font-family: 'Raleway', sans-serif;
        padding: 0;
        border: none;
        box-shadow: 0 0 10px rgba(0,0,0,0.08);
    }
    .panel .panel-heading{
        background: #535353;
        padding: 15px;
        border-radius: 0;
    }
    .panel .panel-heading .btn{
        color: #fff;
        background-color: #000;
        font-size: 14px;
        font-weight: 600;
        padding: 7px 15px;
        border: none;
        border-radius: 0;
        transition: all 0.3s ease 0s;
    }
    .panel .panel-heading .btn:hover{ box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); }
    .panel .panel-heading .form-horizontal .form-group{ margin: 0; }
    .panel .panel-heading .form-horizontal label{
        color: #fff;
        margin-right: 10px;
    }
    .panel .panel-heading .form-horizontal .form-control{
        display: inline-block;
        width: 80px;
        border: none;
        border-radius: 0;
    }
    .panel .panel-heading .form-horizontal .form-control:focus{
        box-shadow: none;
        border: none;
    }
    .panel .panel-body{
        padding: 0;
        border-radius: 0;
    }
    .panel .panel-body .table thead tr th{
        color: #fff;
        background: #8D8D8D;
        font-size: 17px;
        font-weight: 700;
        padding: 12px;
        border-bottom: none;
    }
    .panel .panel-body .table thead tr th:nth-of-type(1){ width: 120px; }
    .panel .panel-body .table thead tr th:nth-of-type(3){ width: 50%; }
    .panel .panel-body .table tbody tr td{
        color: #555;
        background: #fff;
        font-size: 15px;
        font-weight: 500;
        padding: 13px;
        vertical-align: middle;
        border-color: #e7e7e7;
    }
    .panel .panel-body .table tbody tr:nth-child(odd) td{ background: #f5f5f5; }
    .panel .panel-body .table tbody .action-list{
        padding: 0;
        margin: 0;
        list-style: none;
    }
    .panel .panel-body .table tbody .action-list li{ display: inline-block; }
    .panel .panel-body .table tbody .action-list li a{
        color: #fff;
        font-size: 13px;
        line-height: 28px;
        height: 28px;
        width: 33px;
        padding: 0;
        border-radius: 0;
        transition: all 0.3s ease 0s;
    }
    .panel .panel-body .table tbody .action-list li a:hover{ box-shadow: 0 0 5px #ddd; }
    .panel .panel-footer{
        color: #fff;
        background: #535353;
        font-size: 16px;
        line-height: 33px;
        padding: 25px 15px;
        border-radius: 0;
    }
    .pagination{ margin: 0; }
    .pagination li a{
        color: #fff;
        background-color: rgba(0,0,0,0.3);
        font-size: 15px;
        font-weight: 700;
        margin: 0 2px;
        border: none;
        border-radius: 0;
        transition: all 0.3s ease 0s;
    }
    .pagination li a:hover,
    .pagination li a:focus,
    .pagination li.active a{
        color: #fff;
        background-color: #000;
        box-shadow: 0 0 5px rgba(0,0,0,0.4);
    }
</style>


<body>
    @include('navbar')
    
    

    @include('alert')

    <br><br>
    <div class="container" style="width:100%;">
        <div class="row">
            <div>
                <div class="panel">
                    
                    <div class="panel-body table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Action</th>
                                    
                                    <th>Nama</th>
                                    <th>Kategori</th>
                                    <th>Harga</th>
                                    <th>Alamat</th>
                                    <th>Kapasitas</th>
                                    <th>Fasilitas</th>
                                    <th>Ketersediaan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $data)
                                <tr>
                                    <td>
                                        <ul class="action-list">
                                            <li><a href="/hapus_akun/{{$data->id}}" class="btn btn-primary"><i class="fa fa-pencil-alt"></i></a></li>
                                            <li><a href="#" class="btn btn-danger"><i class="fa fa-times"></i></a></li>
                                        </ul>
                                    </td>
                                    <td>{{$data->property_name}}</td>
                                    <td>{{$data->category}}</td>
                                    <td>{{$data->price}}</td>
                                    <td>{{$data->lokasi}}</td>
                                    <td>{{$data->kapasitas}}</td>
                                    <td>{{$data->fasilitas}}</td>
                                    <td>{{$data->availability}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="panel-footer">
                        <div class="row">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<br><br>
            
                

            @include('footer')
</body>

</html>