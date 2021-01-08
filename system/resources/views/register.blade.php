<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Register</title>
  <link rel="stylesheet" href="{{url('public')}}/dist/css/login.css">
</head>
<body>
  <form action="{{url('login')}}" class="box" method="post">
    <h1>Register</h1>
    <p>Register a new membership</p>
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Full Name">
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-user"></span>
          </div>
        </div>
      </div>
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Username">
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-user"></span>
          </div>
        </div>
      </div>
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Email">
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-user"></span>
          </div>
        </div>
      </div>
      <div class="input-group mb-3">
        <input type="password" class="form-control" placeholder="Password">
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-user"></span>
          </div>
        </div>
      </div>
    <input type="submit" name="" value="Register">
    <p class="forget">Sudah Punya Akun<a href="{{url('login')}}" target="_blank"> Klik Disini</a></p>
  </form> 
</body>
</html>