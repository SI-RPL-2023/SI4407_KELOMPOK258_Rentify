<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pembayaran</title>
    @include('header')
    

</head>
<style>
    .btn-group button {
        
        padding: 10px 24px; /* Some padding */
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
    .radio-img {
        display: block;
    }
</style>
<body>
    @include('navbar')
    
    @include('modal')

    @include('alert')

    <!-- Form Start-->
    <center><div class="container">
        
          
<br><br>
            <h3>Pembayaran</h3><p>Pembayaran berhasil</p><br><br>
            <img src="{{ asset('assets/img/success.gif') }}" alt="image error" style="width: 200px;">
            <br><br>
            
            <div class="btn-group">
                <form action="/" method="get">
                    @csrf
                    @method('GET')
                    <button id="hapus" class="btn btn-success-outline btn-lg" style="border-right=none;">Kembali ke beranda</button>
                </form>
                                
                <form action="/history" method="get">
                    @csrf
                    @method('GET')
                    <button id="edit" class="btn btn-success-outline btn-lg" style="border-left:none;">Riwayat</button>
                </form>
            </div>
          

        </div>
      </div></center>
      <!-- Form End-->
<br>
@include('footer')

  </body>
</html>