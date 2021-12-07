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
                        <h2>Welcome</h2>
                        <p>Create an account to get started</p>
                        <form method="POST" action="{{ route('register') }}">
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
                                <label for="exampleInputEmail1">Email address</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Confirm Password</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                            <button type="submit" class="btn btn-primary">Signup</button>
                        </form>
                    <p class="user-signup">Existing User?<span><a href="{{ route('login') }}">Login</a></span></p>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
