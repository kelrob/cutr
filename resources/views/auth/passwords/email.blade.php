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
            <h2>Forgot Password?</h2>
            <p>Enter your email below to recover your password</p>

            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <form method="POST" action="{{ route('password.email') }}">
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
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <p class="user-signup">Existing User?<span><a href="{{ route('login') }}">Login</a></span></p>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection
