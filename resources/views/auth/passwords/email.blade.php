
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Reset Password</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ asset('ors/assets/css/login.css') }}">
</head>
<body>
  <main>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6 login-section-wrapper">
          <div class="">
            <img class="img-fluid" src="{{ asset('ors/assets/image/ors-logo.jpg') }}" alt="logo" class="logo">
          </div>
          <div class="login-wrapper my-auto">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <h1 class="login-title">Reset Password</h1>
            <form action="{{ route('password.email') }}" method="POST">
                @csrf
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" value="{{ old('email') }}" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="email@example.com">
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
              <input id="login" class="btn btn-block login-btn" type="submit" value="Send Link">
            </form>
            {{-- <a href="{{ route('password.request') }}" class="forgot-password-link">Forgot password?</a>
            <p class="login-wrapper-footer-text">Don't have an account? <a href="{{ route('register') }}" class="text-reset">Register here</a></p> --}}
          </div>
        </div>
        <div class="col-sm-6 px-0 d-none d-sm-block">
          <img src="{{ asset('ors/assets/image/login.jpg') }}" alt="login image" class="login-img">
        </div>
      </div>
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>

