@extends('layouts.app')

@section('content')
   
    
    <section id="cb-auth">
      <div class="">
        <div class="row">
          <div class="col-lg-6 auth-lhs">

          </div>
          <div class="col-lg-6 auth-rhs">
            <div class="auth-wrap">
              <h3><img src="{{url('/public/img/icons/back-icon.svg')}}"><a href="{{ url()->previous() }}">Go Back</a></h3>
              <h2>Login</h2>
              <p>Welcome back, please login to your account</p>
              <form method="POST" action="{{ route('login') }}">
                @csrf
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
              </div>
              <div class="form-group form-check">
                <input class="form-check-input checkbox" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label checkbox-lb" for="exampleCheck1">Remember me</label>
                <p class="pwd-mgt"> <a href="{{ route('password.request') }}">Forgot Password ?</a> </p>
              </div>
              <button type="submit" class="btn btn-primary">Login</button>
            </form>
            <p class="user-signup">New User?<span><a href="{{ route('register') }}">Signup</a></span></p>
            </div>
          </div>
        </div>
      </div>
    </section>



@endsection
