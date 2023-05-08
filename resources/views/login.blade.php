<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>

      <link rel="apple-touch-icon" href="assets/img/logo.png">
      <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo.ico">

  <link rel="stylesheet" href="assets/css/login.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>

<body>
@include('alert')
  <div class="wrapper">
    <img src="assets/img/logo.png" alt="" width="100px">
    <header>Login Form</header>
    @if (count($errors) > 0)
    <div class="alert alert-danger">
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </div>
    @endif
    <form action="/login" method="POST">
      @csrf
      @method('POST')
      <div class="field nama">
        <div class="input-area">
          <input type="text" placeholder="Username" name="nama" id="nama">
          <i class="icon fas fa-user"></i>
          <i class="error error-icon fas fa-exclamation-circle"></i>
        </div>
        <div class="error error-txt">Username can't be blank</div>
      </div>
      <div class="field password">
        <div class="input-area">
          <input type="password" placeholder="Password" name="password" id="password">
          <i class="icon fas fa-lock"></i>
          <i class="error error-icon fas fa-exclamation-circle"></i>
        </div>
        <div class="error error-txt">Password can't be blank</div>
      </div>
      <div class="pass-txt"><a href="#">Forgot password?</a></div>
      <input type="submit" value="Login">
    </form>
    <div class="sign-txt">Not yet member? <a href="/registrasi">Signup</a></div>
  </div>

  <script src="assets/js/script.js"></script>

</body>
</html>
