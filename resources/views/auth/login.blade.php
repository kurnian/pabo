@extends('layouts.auth')

@section('content')
<div class="overlay"></div>
<div class="masthead">
  <div class="masthead-bg"></div>
  <div class="container h-100">
    <div class="row h-100">
      <div class="col-12 my-auto">
        <div class="masthead-content text-white py-5 py-md-0">
          <h1 class="mb-3"><i class="fa fa-adn"></i>SMARTPOND </h1>
          <div class="alert alert-warning" role="alert">
            Mohon maaf layanan autentikasi yang tersedia saat ini menggunakan authentikasi Google.
          </div>
          <form method='post' action="login-process.php">
            <div class="input-group input-group-newsletter" style="padding:10px 0;">
              <input type="text" name="username" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon" required autofocus>
            </div>
            <div class="input-group input-group-newsletter" style="padding:10px 0;">
              <input type="password" name="password" class="form-control" placeholder="Password" aria-label="Username" aria-describedby="basic-addon" required autofocus>
            </div>
            <div class="input-group input-group-newsletter" style="padding:10px 0;">
              <button class="btn btn-secondary btn-block" type="submit" name="login">Login</button>
              <a href="{{ url('auth/google') }}" style="margin-top: 20px;" class="btn btn-lg btn-success btn-block"> <strong>Login With Google</strong></a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
@endsection