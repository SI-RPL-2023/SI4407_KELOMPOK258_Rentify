<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pembayaran</title>
    @include('header')
    

</head>
<style>
    .radio-img {
        display: block;
    }
</style>
<body>
    @include('navbar')
    
    @include('modal')

    @include('alert')

    <!-- Form Start-->
    <div class="container">
        <div class="row">
          <div class="col-8">
<br><br>
            <h3>Pembayaran</h3><p>Pilih metode pembayaran</p><br><br>
            <img src="{{ asset('assets/img/success.gif') }}" alt="image error">
            <br><br>
            
            <div class="btn-group">
                <form action="/" method="get">
                    @csrf
                    @method('GET')
                    <button id="hapus" class="btn btn-primary"  style="background-color: #df6f6f; width:100%;">Hapus</button></center>
                </form>
                                
                <form action="/history" method="get">
                    @csrf
                    @method('GET')
                    <button id="edit" class="btn btn-primary" style="background-color: #70bee5; width:100%;">Edit</button></center>
                </form>
            </div>
          </div>

        </div>
      </div>
      <!-- Form End-->
<br>
@include('footer')

  </body>
</html>