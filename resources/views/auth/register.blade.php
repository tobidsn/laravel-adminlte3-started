@extends('_admin.master') 
@section('content')

<body class="hold-transition register-page">
  <div class="register-box">
    <div class="register-logo">
      Laravel
    </div>

    <div class="card">
      <div class="card-body register-card-body">
        <p class="login-box-msg">{{ __('Register') }}</p>

        <form action="{{ route('register') }}" method="post">
          @csrf
          <div class="input-group mb-3">
            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="Enter Your Full Name"
              required autofocus> @if ($errors->has('name'))
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span> @endif
            <div class="input-group-append">
              <span class="fa fa-user input-group-text"></span>
            </div>
          </div>
          <div class="input-group mb-3">
            <input id="email" type="email" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Your E Mail Address">
            <div class="input-group-append">
              <span class="fa fa-envelope input-group-text"></span> @if ($errors->has('email'))
              <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span> @endif
            </div>
          </div>
          <div class="input-group mb-3">
            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>
            <div class="input-group-append">
              <span class="fa fa-lock input-group-text"></span>
            </div>
          </div>
          <div class="input-group mb-3">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirmation Password" required>
            <div class="input-group-append">
              <span class="fa fa-lock input-group-text"></span> @if ($errors->has('password'))
              <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('password') }}</strong>
                  </span> @endif
            </div>
          </div>
          <div class="row">
            <div class="col-6">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
            </div>
            <!-- /.col -->
          </div>
        </form>

        <div class="social-auth-links text-center">
          <p>- OR -</p>
          <a href="#" class="btn btn-block btn-primary">
              <i class="fa fa-facebook-f mr-2"></i>
              Sign up using Facebook
            </a>
          <a href="#" class="btn btn-block btn-danger">
              <i class="fa fa-google-plus mr-2"></i>
              Sign up using Google+
            </a>
        </div>

        <a href="{{route('login')}}" class="text-center">I already have a membership</a>
      </div>
      <!-- /.form-box -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.register-box -->
@endsection