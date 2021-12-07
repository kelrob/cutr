@extends('layouts.public-template')
@section('main-content')


<section id="auth">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="auth-box shadow-lg">
                    <div class="lhs">
                        <div class="bg-oval"></div>
                        <div class="bg-oval2"></div>
                        <h2>Admin Register</h2>
                        <p>Enter details to get started.</p>
                        <p class="foot-note">If you already have an account,<span><a href="{{ url('login') }}"> Login.</a></span> <br/> By clicking Signup, you agree to allour <span><a href="login.html">Terms and Conditions</a></span></p>
                    </div>
                    <div class="rhs">
                        <form class="" method="POST" action="{{ route('admin.register.submit') }}">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Full name</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email Address</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Enter Password</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- <div class="form-group">
                                <label for="exampleInputEmail1">Enter Password</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div> -->
                            <button type="submit" class="btn btn-primary">Signup</button>
                            <p class="mobile-foot-note">If you already have an account,<span><a href="{{ url('login') }}"> Login.</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
