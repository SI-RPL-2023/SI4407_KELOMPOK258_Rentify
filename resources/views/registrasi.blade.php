<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration</title>
  <link rel="apple-touch-icon" href="assets/img/logo.png">
      <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo.ico">

  <link rel="stylesheet" href="assets/css/login.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>

<body>
@include('alert')
  <div class="wrapper">
  <img src="assets/img/logo.png" alt="" width="100px">
    <header>Registration Form</header>
    @if (count($errors) > 0)
    <div class="alert alert-danger">
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </div>
    @endif
    <form action="/register" method="POST">
      @csrf
      @method('POST')
      
        
      <i class="icon fas fa-user"></i>
            <input type="text" id="nama" placeholder="Name" name="nama" style="height: 50px;
  width: 100%;
  position: relative;">
            
            
        
      
      
        
        <i class="icon fas fa-phone"></i>
            <input type="text" id="no_hp" placeholder="Phone" name="no_hp" style="height: 50px;
  width: 100%;
  position: relative;">
            
            
        
      
        
        <i class="icon fas fa-address-card"></i>
            <input type="text" id="alamat" placeholder="Address" name="alamat" style="height: 50px;
  width: 100%;
  position: relative;">
            
            
        
      
        
        <i class="icon fas fa-envelope"></i>
            <input type="email" id="email" placeholder="Email Address" name="email" style="height: 50px;
  width: 100%;
  position: relative;">
            
            
        
      
        
        <i class="icon fas fa-lock"></i>
            <input type="password" id="password" placeholder="Password" name="password" style="height: 50px;
  width: 100%;
  position: relative;">
            
            
        
      
        
        <i class="icon fas fa-user-alt"></i>
            <select name="access_type" id="access_type" aria-placeholder="Access Type" style="height: 50px;
  width: 100%;
  position: relative;">
              <option value="Penyewa">Penyewa</option>
              <option value="Pemilik">Pemilik</option>
              <option value="Admin">Admin</option>
              
            </select>
            
            
        
      
      <input type="submit" value="Register">
      
      
    </form>
    <div class="sign-txt">Sudah punya akun? <a href="/login">Login</a></div>
  </div>

  <script src="assets/js/script.js"></script>

</body>
</html>
