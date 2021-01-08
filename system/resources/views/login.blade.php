<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="{{url('public')}}/dist/css/login.css">
  <link rel="stylesheet" href="{{url('public')}}/plugins/fontawesome-free/css/all.min.css">

</head>
<body>
  <form action="{{url('login')}}" class="box" method="post">
    @csrf
    <h1>Login</h1>
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <input type="submit" name="" value="Login">
    @include('admin.template.utils.notif')
    <p class="forget">Forget Password ? <a href="#" target="_blank">Klik Disini</a></p>
    <p class="forget">Register / Buat Akun Baru <a href="{{url('register')}}" target="_blank">Klik Disini</a></p>
  </form> 
</body>
</html>