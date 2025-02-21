<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{ asset('backend/assets/images/favicon.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.png')}}" type="image/x-icon">
    <title>{{ config('app.name') }} Store Registration</title>
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
  </head>
  <body>
    <!-- login page start-->
    <div class="container-fluid">
      <div class="row">         
        <div class="col-12 p-0">
          <div>
            <div class="theme-form">                     
              <div class="wizard-4" id="wizard">                       
                <ul>
                  <li><a class="logo text-start ps-0" href="index.html"><img class="img-fluid for-light" src="../assets/images/logo/logo.png" alt="looginpage"><img class="img-fluid for-dark" src="../assets/images/logo/logo_dark.png" alt="looginpage"></a></li>
                  <li><a href="#step-1">
                      <h4>1</h4>
                      <h5>personal</h5><small>Add personal details</small></a></li>
                  <li><a href="#step-2">
                      <h4>2</h4>
                      <h5>Address</h5><small>Add additional info</small></a></li>
                  <li><a href="#step-3">
                      <h4>3</h4>
                      <h5>Message</h5><small>Add message(optional)</small></a></li>
                  <li class="pb-0"><a href="#step-4">
                      <h4>4</h4>
                      <h5> Done <i class="fa fa-thumbs-o-up"></i></h5><small>Complete.. !</small></a></li>
                  <li>                           <img src="../assets/images/login/icon.png" alt="looginpage"></li>
                </ul>
                <div id="step-1">
                  <div class="wizard-title">
                    <h2>Sign up to account</h2>
                    <h5 class="text-muted mb-4">Enter your email & password to login</h5>
                  </div>
                  <div class="login-main">
                    <div class="theme-form">
                      <div class="form-group mb-3">
                        <label for="name">First Name</label>
                        <input class="form-control" id="name" type="text" placeholder="Johan" required="required">
                      </div>
                      <div class="form-group mb-3">
                        <label for="lname">Last Name</label>
                        <input class="form-control" id="lname" type="text" placeholder="Deo">
                      </div>
                      <div class="form-group mb-3">
                        <label for="contact">Contact No.</label>
                        <input class="form-control" id="contact" type="number" placeholder="123456789">
                      </div>
                    </div>
                  </div>
                </div>
                <div id="step-2">
                  <div class="wizard-title">
                    <h2>Sign up to account</h2>
                    <h5 class="text-muted mb-4">Enter your email & password to login</h5>
                  </div>
                  <div class="login-main">
                    <div class="theme-form">
                      <div class="form-group mb-3 m-t-15">
                        <label for="exampleFormControlInput1">Email address</label>
                        <input class="form-control" id="exampleFormControlInput1" type="email" placeholder="name@example.com">
                      </div>
                      <div class="form-group mb-3">
                        <label for="exampleInputPassword1">Password</label>
                        <input class="form-control" id="exampleInputPassword1" type="password" placeholder="Password">
                      </div>
                      <div class="form-group mb-3">
                        <label for="exampleInputPassword1">Confirm Password</label>
                        <input class="form-control" id="exampleInputcPassword1" type="password" placeholder="Enter again">
                      </div>
                    </div>
                  </div>
                </div>
                <div id="step-3">
                  <div class="wizard-title">
                    <h2>Sign up to account</h2>
                    <h5 class="text-muted mb-4">Enter your email & password to login</h5>
                  </div>
                  <div class="login-main">
                    <div class="theme-form">
                      <div class="form-group mb-3">
                        <label for="exampleFormControlInput1">Birthday:</label>
                        <input class="form-control" type="date">
                      </div>
                      <div class="form-group mb-3">
                        <label class="control-label">Age</label>
                        <input class="form-control" placeholder="Age" type="text">
                      </div>
                      <div class="form-group mb-3">
                        <label class="control-label">Have Passport</label>
                        <input class="form-control" placeholder="Yes/No" type="text">
                      </div>
                    </div>
                  </div>
                </div>
                <div id="step-4">
                  <div class="wizard-title">
                    <h2>Sign up to account</h2>
                    <h5 class="text-muted mb-4">Enter your email & password to login</h5>
                  </div>
                  <div class="login-main">
                    <div class="theme-form">
                      <div class="form-group mb-3">
                        <label class="control-label">Country</label>
                        <input class="form-control mt-1" type="text" placeholder="Country" required="required">
                      </div>
                      <div class="form-group mb-3">
                        <label class="control-label">State</label>
                        <input class="form-control mt-1" type="text" placeholder="State" required="required">
                      </div>
                      <div class="form-group mb-3">
                        <label class="control-label">City</label>
                        <input class="form-control mt-1" type="text" placeholder="City" required="required">
                        <!-- Smart Wizard Ends-->
                      </div>
                    </div>
                  </div>
                </div>
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
      <script src="{{ asset('backend/assets/js/theme-customizer/customizer.js')}}"></script>
    </div>
  </body>
</html>