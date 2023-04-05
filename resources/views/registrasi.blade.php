<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
  <div class="wrapper">
    <header>Registration Form</header>
    @if (count($errors) > 0)
    <div class="alert alert-danger">
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </div>
    @endif
    <form action="#" method="POST">
      @csrf
      @method('POST')
      <div class="field name">
        <div class="input-area">
          <input type="text" id="nama" placeholder="Name" name="nama">
          <i class="icon fas fa-user"></i>
          <i class="error error-icon fas fa-exclamation-circle"></i>
        </div>
        <div class="error error-txt">Name can't be blank</div>
      </div>
      <div class="field phone">
        <div class="input-area">
          <input type="text" id="no_hp" placeholder="Phone" name="no_hp">
          <i class="icon fas fa-phone"></i>
          <i class="error error-icon fas fa-exclamation-circle"></i>
        </div>
        <div class="error error-txt">Phone number can't be blank</div>
      </div>
      <div class="field address">
        <div class="input-area">
          <input type="text" id="alamat" placeholder="Address" name="alamat">
          <i class="icon fas fa-address-card"></i>
          <i class="error error-icon fas fa-exclamation-circle"></i>
        </div>
        <div class="error error-txt">Address can't be blank</div>
      </div>
      <div class="field email">
        <div class="input-area">
          <input type="email" id="email" placeholder="Email Address" name="email">
          <i class="icon fas fa-envelope"></i>
          <i class="error error-icon fas fa-exclamation-circle"></i>
        </div>
        <div class="error error-txt">Email can't be blank</div>
      </div>
      <div class="field password">
        <div class="input-area">
          <input type="password" id="password" placeholder="Password" name="password">
          <i class="icon fas fa-lock"></i>
          <i class="error error-icon fas fa-exclamation-circle"></i>
        </div>
        <div class="error error-txt">Password can't be blank</div>
      </div>
      <div class="field access">
        <div class="input-area">
          <select name="access_type" id="access_type" aria-placeholder="Access Type">
            <option value="Penyewa">Penyewa</option>
            <option value="Pemilik">Pemilik</option>
            <option value="Admin">Admin</option>
            
          </select>
          <i class="icon fas fa-user-alt"></i>
          <i class="error error-icon fas fa-exclamation-circle"></i>
        </div>
        <div class="error error-txt">Access type can't be blank</div>
      </div>
      <input type="submit" value="Login">
    </form>
    <div class="sign-txt">Sudah punya akun? <a href="/login">Login</a></div>
  </div>

  <script src="script.js"></script>

</body>
</html>
