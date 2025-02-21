<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="../assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon">
    <title>{{ config('app.name') }} Login</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/font-awesome.css')}}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/vendors/icofont.css')}}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/vendors/themify.css')}}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/vendors/flag-icon.css')}}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/vendors/feather-icon.css')}}">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/vendors/animate.css')}}">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/vendors/bootstrap.css')}}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/style.css')}}">
    <link id="color" rel="stylesheet" href="../assets/css/color-1.css')}}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/responsive.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">


  </head>
  <body>
    <!-- login page start-->
    <div class="container-fluid p-0 ">
      <div class="row m-0 ">
        <div class="col-12 p-0 ">    
          <div class="login-card ">
            <div>
              <div class="login-dark d-flex justify-content-center align-items-center"><a class="logo "  style="width: 300px ; height:auto;" href="{{route('login')}}"><img class="img-fluid for-light" src="{{ asset('images/logo.svg') }}" alt="looginpage"><img class="img-fluid for-dark" style="width: 300px ; height:auto;"  src="{{ asset('images/logo-dark.svg') }}" alt="looginpage" ></a></div>
              <div class="login-main "> 
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="text-white">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form class="theme-form"  method="POST" action="{{ route('login') }}">
                  @csrf
                  <h4>Sign in to account</h4>
                  <p>Enter your email & password to login</p>
                  <div class="form-group">
                    <label class="col-form-label" for="email">{{ __('Email') }}</label>
                    <input class="form-control" id="email" type="email" name="email"  required autofocus autocomplete="username"  value="{{ old('email') }}" required=""  placeholder="email@gmail.com">
                    @if ($errors->has('email'))
                    <div class="text-danger mt-2">
                        {{ $errors->first('email') }}
                    </div>
                      @endif
                  </div>
                  
                  <div class="form-group">
                    <label class="col-form-label" for="password">{{ __('Password') }}</label>
                    <div class="form-input position-relative">
                      <input class="form-control" type="password" name="password" id="password" value="{{ old(__('password'))}}" required="" placeholder="*********">
                      @if ($errors->has('password'))
                      <div class="text-danger mt-2">
                          {{ $errors->first('password') }}
                      </div>
                        @endif
    <!-- Eye Icon for Show/Hide -->
    <div class="show-hide" onclick="togglePassword()">
      <i id="eye-icon" class="fas fa-eye"></i> <!-- Font Awesome Eye Icon -->
  </div>                    </div>
                  </div>
                  
                  <div class="form-group mb-0">
                    <div class="checkbox p-0">
                      <input id="remember_me" type="checkbox" name="remember">
                      <label class="text-muted"for="remember_me" >{{ __('Remember me') }}</label>
                      @if (Route::has('password.request'))
                        </div><a class="link" href="{{ route('password.request') }}"> {{ __('Forgot your password?') }}</a>
                      @endif
                    <div class="text-end mt-3">
                      <button class="btn btn-primary btn-block w-100 p-2 fw-bold" type="submit"> {{ __('Log in') }}</button>
                    </div>
                  </div>
                  <h6 class="text-muted mt-4 or">Or Sign in with</h6>
                  <div class="social mt-4">
                    <div class="btn-showcase">
                      <a class="btn btn-light btn-sm" href="https://www.linkedin.com/login" target="_blank">
                          <i class="txt-linkedin" data-feather="linkedin"></i> LinkedIn
                      </a>
                      <a class="btn btn-light btn-sm" href="https://twitter.com/login?lang=en" target="_blank">
                          <i class="txt-twitter" data-feather="twitter"></i> Twitter
                      </a>
                      <a class="btn btn-light btn-sm" href="https://www.facebook.com/" target="_blank">
                          <i class="txt-fb" data-feather="facebook"></i> Facebook
                      </a>
                  </div>                  </div>
                  <p class="mt-4 mb-0 text-center">Don't have account?<a class="ms-2" href="{{route('register')}}">Create Account</a></p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- latest jquery-->
      <script src="{{ asset('backend/assets/js/jquery.min.js')}}"></script>
      <!-- Bootstrap js-->
      <script src="{{ asset('backend/assets/js/bootstrap/bootstrap.bundle.min.js')}}"></script>
      <!-- feather icon js-->
      <script src="{{ asset('backend/assets/js/icons/feather-icon/feather.min.js')}}"></script>
      <script src="{{ asset('backend/assets/js/icons/feather-icon/feather-icon.js')}}"></script>
      <!-- scrollbar js-->
      <!-- Sidebar jquery-->
      <script src="{{ asset('backend/assets/js/config.js')}}"></script>
      <!-- Plugins JS start-->
      <script src="{{ asset('backend/assets/js/form-wizard/form-wizard-five.js')}}"></script>
      <script src="{{ asset('backend/assets/js/tooltip-init.js')}}"></script>
      <!-- Plugins JS Ends-->
      <!-- Theme js-->
      <script src="{{ asset('backend/assets/js/script.js')}}"></script>
      <script>
        function togglePassword() {
            var passwordField = document.getElementById("password");
            var eyeIcon = document.getElementById("eye-icon");
    
            // Check if the password field type is 'password' (hidden)
            if (passwordField.type === "password") {
                passwordField.type = "text";  // Change it to 'text' to show password
                eyeIcon.classList.remove("fa-eye");  // Remove the "eye" icon
                eyeIcon.classList.add("fa-eye-slash");  // Add the "eye-slash" icon to indicate password is shown
            } else {
                passwordField.type = "password";  // Change it back to 'password' to hide password
                eyeIcon.classList.remove("fa-eye-slash");  // Remove the "eye-slash" icon
                eyeIcon.classList.add("fa-eye");  // Add the "eye" icon to indicate password is hidden
            }
        }
    </script>
    
    </div>
  </body>
</html>