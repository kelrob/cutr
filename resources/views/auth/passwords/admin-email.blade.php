<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <!-- <link rel="icon" type="image/png" sizes="16x16" href="{{ url('img/admin_files/favicon.png') }}"> -->
    <title>Admin Login</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{ url('css/admin_files/lib/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ url('css/admin_files/helper.css') }}" rel="stylesheet">
    <link href="{{ url('css/admin_files/style.css') }}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">

      <div class="unix-login">
          <div class="container-fluid">
              <div class="row justify-content-center">
                  <div class="col-lg-4">
                      <div class="login-content card">
                          <div class="login-form">
                              <h4>Reset Password</h4>
                                @if (session('status'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        {{ session('status') }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif
                              <form class="form-valide" method="POST" action="{{ route('admin.password.email') }}">
                                @csrf
                                  <div class="form-group">
                                    <label>Email address</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                  </div>
                                  <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Send Password Reset Link</button>
                                  <!-- <div class="register-link m-t-15 text-center">
                                      <p>Don't have account ? <a href="#"> Sign Up Here</a></p>
                                  </div> -->
                              </form>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="{{ url('js/admin_files/lib/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ url('js/admin_files/lib/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ url('js/admin_files/lib/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ url('js/admin_files/jquery.slimscroll.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ url('js/admin_files/sidebarmenu.js') }}"></script>
    <!--stickey kit -->
    <script src="{{ url('js/admin_files/lib/sticky-kit-master/dist/sticky-kit.min.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ url('js/admin_files/custom.min.js') }}"></script>

</body>

</html>