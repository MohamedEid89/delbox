<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="/backend/assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('/backend/assets/images/favicon.png') }}" type="image/x-icon">
   <title>{{ config('app.name') }} Admin Dashboard</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/backend/assets/css/fontawesome.css') }}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/backend/assets/css/vendors/icofont.css') }}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/backend/assets/css/vendors/themify.css') }}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/backend/assets/css/vendors/flag-icon.css') }}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/backend/assets/css/vendors/feather-icon.css') }}">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/backend/assets/css/vendors/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/backend/assets/css/vendors/slick-theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/backend/assets/css/vendors/scrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/backend/assets/css/vendors/prism.css') }}">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/backend/assets/css/vendors/bootstrap.css') }}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/backend/assets/css/style.css') }}">
    <link id="color" rel="stylesheet" href=".{{ asset('/backend/assets/css/color-1.css') }}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/backend/assets/css/responsive.css') }}">
  </head>
  <body> 
    <!-- loader starts-->
    <div class="loader-wrapper">
      <div class="loader-index"> <span></span></div>
      <svg>
        <defs></defs>
        <filter id="goo">
          <fegaussianblur in="SourceGraphic" stddeviation="11" result="blur"></fegaussianblur>
          <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo"> </fecolormatrix>
        </filter>
      </svg>
    </div>
    <!-- loader ends-->
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
      <div class="page-header">
        <div class="header-wrapper row m-0">
          <form class="form-inline search-full col" action="#" method="get">
            <div class="form-group w-100">
              <div class="Typeahead Typeahead--twitterUsers">
                <div class="u-posRelative">
                  <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text" placeholder="Search Anything Here..." name="q" title="" autofocus>
                  <div class="spinner-border Typeahead-spinner" role="status"><span class="sr-only">Loading...</span></div><i class="close-search" data-feather="x"></i>
                </div>
                <div class="Typeahead-menu"></div>
              </div>
            </div>
          </form>
          <div class="header-logo-wrapper col-auto p-0">
            <div class="logo-wrapper"><a href="index.html"><img class="img-fluid for-light" src="../assets/images/logo/logo.png" alt=""><img class="img-fluid for-dark" src="../assets/images/logo/logo_dark.png" alt=""></a></div>
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i></div>
          </div>
          <div class="left-header col-xxl-5 col-xl-6 col-lg-5 col-md-4 col-sm-3 p-0">
            <div class="notification-slider">
              <div class="d-flex h-100"> <img src="{{ asset('backend/assets/images/giftools.gif')}}" alt="gif">
                <h6 class="mb-0 f-w-400"><span class="font-primary">Registration! </span><span class="f-light"> 3 New Customers Registration.</span></h6><i class="icon-arrow-top-right f-light"></i>
              </div>
              <div class="d-flex h-100"><img src="{{ asset('backend/assets/images/giftools.gif')}}" alt="gif">
                <h6 class="mb-0 f-w-400"><span class="f-light">New sale contact! </span></h6><a class="ms-1" href="https://1.envato.market/3GVzd" target="_blank">See Message !</a>
              </div>
            </div>
          </div>
          <div class="nav-right col-xxl-7 col-xl-6 col-md-7 col-8 pull-right right-header p-0 ms-auto">
            <ul class="nav-menus">
              <li class="language-nav">
                <div class="translate_wrapper">
                  <div class="current_lang">
                    <div class="lang"><i class="flag-icon flag-icon-us"></i><span class="lang-txt">EN                               </span></div>
                  </div>
                  <div class="more_lang">
                    <div class="lang selected" data-value="en"><i class="flag-icon flag-icon-us"></i><span class="lang-txt">English<span> (US)</span></span></div>
                    <div class="lang" data-value="se"><i class="flag-icon flag-icon-se"></i><span class="lang-txt">Svenska<span> (SE)</span></span></div>
                    <div class="lang" data-value="ae"><i class="flag-icon flag-icon-ae"></i><span class="lang-txt">العربية <span> (AR)</span></span></div>
                  </div>
                </div>
              </li>
              <li class="fullscreen-body">                       <span>
                  <svg id="maximize-screen">
                    <use href="/backend/assets/svg/icon-sprite.svg#full-screen"></use>
                  </svg></span></li>
              <li>                         <span class="header-search">
                  <svg>
                    <use href="/backend/assets/svg/icon-sprite.svg#search"></use>
                  </svg></span></li>
              <li class="onhover-dropdown">
                <svg>
                  <use href="/backend/assets/svg/icon-sprite.svg#star"></use>
                </svg>
                <div class="onhover-show-div bookmark-flip">
                  <div class="flip-card">
                    <div class="flip-card-inner">
                      <div class="front">
                        <h6 class="f-18 mb-0 dropdown-title">Bookmark</h6>
                        <ul class="bookmark-dropdown">
                          <li>
                            <div class="row">
                              <div class="col-4 text-center">
                                <div class="bookmark-content">
                                  <div class="bookmark-icon"><i data-feather="file-text"></i></div><span>Forms</span>
                                </div>
                              </div>
                              <div class="col-4 text-center">
                                <div class="bookmark-content">
                                  <div class="bookmark-icon"><i data-feather="user"></i></div><span>Profile</span>
                                </div>
                              </div>
                              <div class="col-4 text-center">
                                <div class="bookmark-content">
                                  <div class="bookmark-icon"><i data-feather="server"></i></div><span>Tables</span>
                                </div>
                              </div>
                            </div>
                          </li>
                          <li class="text-center"><a class="flip-btn f-w-700 btn btn-primary w-100" id="flip-btn" href="#!">Add Bookmark</a></li>
                        </ul>
                      </div>
                      <div class="back">
                        <ul>
                          <li>
                            <div class="bookmark-dropdown flip-back-content">
                              <input type="text" placeholder="Search...">
                            </div>
                          </li>
                          <li><a class="f-w-700 d-block flip-back btn btn-primary w-100" id="flip-back" href="#!">Back</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="mode">
                  <svg>
                    <use href="/backend/assets/svg/icon-sprite.svg#moon"></use>
                  </svg>
                </div>
              </li>
              <li class="cart-nav onhover-dropdown">
                <div class="cart-box">
                  <svg>
                    <use href="/backend/assets/svg/icon-sprite.svg#stroke-ecommerce"></use>
                  </svg><span class="badge rounded-pill badge-danger">2</span>
                </div>
                <div class="cart-dropdown onhover-show-div">
                  <h6 class="f-18 mb-0 dropdown-title">Cart</h6>
                  <ul>
                    <li>
                      <div class="d-flex"><img class="img-fluid b-r-5 me-3 img-60" src="../assets/images/other-images/cart-img.jpg" alt="">
                        <div class="flex-grow-1"><span>Furniture Chair for Home</span>
                          <div class="qty-box">
                            <div class="input-group"><span class="input-group-prepend">
                                <button class="btn quantity-left-minus" type="button" data-type="minus" data-field="">-</button></span>
                              <input class="form-control input-number" type="text" name="quantity" value="1"><span class="input-group-prepend">
                                <button class="btn quantity-right-plus" type="button" data-type="plus" data-field="">+</button></span>
                            </div>
                          </div>
                          <h6 class="font-primary">$12.45</h6>
                        </div>
                        <div class="close-circle"><a class="bg-danger" href="#"><i data-feather="x"></i></a></div>
                      </div>
                    </li>
                    <li>
                      <div class="d-flex"><img class="img-fluid b-r-5 me-3 img-60" src="../assets/images/other-images/cart-img1.jpg" alt="">
                        <div class="flex-grow-1"><span>Rest Well Chair</span>
                          <div class="qty-box">
                            <div class="input-group"><span class="input-group-prepend">
                                <button class="btn quantity-left-minus" type="button" data-type="minus" data-field="">-</button></span>
                              <input class="form-control input-number" type="text" name="quantity" value="1"><span class="input-group-prepend">
                                <button class="btn quantity-right-plus" type="button" data-type="plus" data-field="">+</button></span>
                            </div>
                          </div>
                          <h6 class="font-primary">$49.00</h6>
                        </div>
                        <div class="close-circle"><a class="bg-danger" href="#"><i data-feather="x"></i></a></div>
                      </div>
                    </li>
                    <li class="total">
                      <h6 class="mb-0">Order Total : <span class="f-right">$1000.00</span></h6>
                    </li>
                    <li class="text-center"><a class="d-block view-cart f-w-700 btn btn-primary w-100" href="cart.html">View Cart</a><a class="btn btn-primary view-checkout btn btn-primary w-100 f-w-700" href="checkout.html">Checkout</a></li>
                  </ul>
                </div>
              </li>
              <li class="onhover-dropdown">
                <div class="notification-box">
                  <svg>
                    <use href="/backend/assets/svg/icon-sprite.svg#notification"></use>
                  </svg><span class="badge rounded-pill badge-success">4 </span>
                </div>
                <div class="onhover-show-div notification-dropdown">
                  <h6 class="f-18 mb-0 dropdown-title">Notifications                               </h6>
                  <ul>
                    <li class="b-l-primary border-4 toast default-show-toast align-items-center text-light border-0 fade show" aria-live="assertive" aria-atomic="true" data-bs-autohide="false">
                      <div class="d-flex justify-content-between">
                        <div class="toast-body">
                          <p>Delivery processing</p>
                        </div>
                        <button class="btn-close btn-close-white me-2 m-auto" type="button" data-bs-dismiss="toast" aria-label="Close"></button>
                      </div>
                    </li>
                    <li class="b-l-success border-4 toast default-show-toast align-items-center text-light border-0 fade show" aria-live="assertive" aria-atomic="true" data-bs-autohide="false">
                      <div class="d-flex justify-content-between">
                        <div class="toast-body">
                          <p>Order Complete</p>
                        </div>
                        <button class="btn-close btn-close-white me-2 m-auto" type="button" data-bs-dismiss="toast" aria-label="Close"></button>
                      </div>
                    </li>
                    <li class="b-l-secondary border-4 toast default-show-toast align-items-center text-light border-0 fade show" aria-live="assertive" aria-atomic="true" data-bs-autohide="false">
                      <div class="d-flex justify-content-between">
                        <div class="toast-body">
                          <p>Tickets Generated</p>
                        </div>
                        <button class="btn-close btn-close-white me-2 m-auto" type="button" data-bs-dismiss="toast" aria-label="Close"></button>
                      </div>
                    </li>
                    <li class="b-l-warning border-4 toast default-show-toast align-items-center text-light border-0 fade show" aria-live="assertive" aria-atomic="true" data-bs-autohide="false">
                      <div class="d-flex justify-content-between">
                        <div class="toast-body">
                          <p>Delivery Complete</p>
                        </div>
                        <button class="btn-close btn-close-white me-2 m-auto" type="button" data-bs-dismiss="toast" aria-label="Close"></button>
                      </div>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="profile-nav onhover-dropdown pe-0 py-0">
                <div class="d-flex profile-media"><img class="b-r-10" src="../assets/images/dashboard/profile.png" alt="">
                  <div class="flex-grow-1"><span>Emay Walter</span>
                    <p class="mb-0">Admin <i class="middle fa-solid fa-angle-down"></i></p>
                  </div>
                </div>
                <ul class="profile-dropdown onhover-show-div">
                  <li><a href="../template/sign-up.html"><i data-feather="user"></i><span>Account </span></a></li>
                  <li><a href="../template/mail-box.html"><i data-feather="mail"></i><span>Inbox</span></a></li>
                  <li><a href="../template/task.html"><i data-feather="file-text"></i><span>Taskboard</span></a></li>
                  <li><a href="../template/add-user.html"><i data-feather="settings"></i><span>Settings</span></a></li>
                  <li><a href="{{ route('admin.logout')}}"><i data-feather="log-in"> </i><span>Log out</span></a></li>
                </ul>
              </li>
            </ul>
          </div>
          <script class="result-template" type="text/x-handlebars-template">
            <div class="ProfileCard u-cf">                        
            <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
            <div class="ProfileCard-details">
            <div class="ProfileCard-realName">Name</div>
            </div>
            </div>
          </script>
          <script class="empty-template" type="text/x-handlebars-template"><div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div></script>
        </div>
      </div>
      <!-- Page Header Ends                              -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper horizontal-menu">
        <!-- Page Sidebar Start-->
        <div class="sidebar-wrapper" data-sidebar-layout="stroke-svg">
          <div>
            <div class="logo-wrapper"><a href="index.html"><img class="img-fluid for-light" src="../assets/images/logo/logo.png" alt=""><img class="img-fluid for-dark" src="../assets/images/logo/logo_dark.png" alt=""></a>
              <div class="back-btn"><i class="fa-solid fa-angle-left"></i></div>
              <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
            </div>
            <div class="logo-icon-wrapper"><a href="index.html"><img class="img-fluid" src="../assets/images/logo/logo-icon.png" alt=""></a></div>
            <nav class="sidebar-main">
              <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
              <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                  <li class="back-btn">
                    <div class="mobile-back text-end"><span>Back</span><i class="fa-solid fa-angle-right ps-2" aria-hidden="true"></i></div>
                  </li>
                  <li class="pin-title sidebar-main-title">
                    <div> 
                      <h6>Pinned</h6>
                    </div>
                  </li>
                  <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a class="sidebar-link sidebar-title link-nav" href="../template/index.html" target="_blank">
                      <svg class="stroke-icon">
                        <use href="/backend/assets/svg/icon-sprite.svg#stroke-home"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="/backend/assets/svg/icon-sprite.svg#fill-home"></use>
                      </svg><span>Dashboard</span></a></li>
                  <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a class="sidebar-link sidebar-title" href="#">
                      <svg class="stroke-icon">
                        <use href="/backend/assets/svg/icon-sprite.svg#stroke-starter-kit"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="/backend/assets/svg/icon-sprite.svg#fill-starter-kit"></use>
                      </svg><span>Website Pages</span></a>
                    <ul class="sidebar-submenu">
                      <li><a class="submenu-title" href="#">Home Page<span class="sub-arrow"><i class="fa-solid fa-angle-right"></i></span></a>
                        <ul class="sidebar-submenu submenu-content">
                          <li><a href="index.html">Slider</a></li>
                          <li><a href="layout-dark.html">Content</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a class="sidebar-link sidebar-title link-nav" href="https://support.pixelstrap.com/" target="_blank">
                      <svg class="stroke-icon">
                        <use href="/backend/assets/svg/icon-sprite.svg#stroke-social"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="/backend/assets/svg/icon-sprite.svg#fill-social"></use>
                      </svg><span>Show Website</span></a></li>

                </ul>
              </div>
              <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
            </nav>
          </div>
        </div>
        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-sm-6">
                  <h3>Welcome Admin!</h3>
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">                                       
                        <svg class="stroke-icon">
                          <use href="/backend/assets/svg/icon-sprite.svg#stroke-home"></use>
                        </svg></a></li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row starter-main">
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-header">
                    <h5>Notifications</h5>
                    <div class="card-header-right">
                      <ul class="list-unstyled card-option">
                        <li><i class="fa-solid fa-gear fa-spin"></i></li>
                        <li><i class="icofont icofont-maximize full-card"></i></li>
                        <li><i class="icofont icofont-minus minimize-card"></i></li>
                        <li><i class="icofont icofont-refresh reload-card"></i></li>
                        <li><i class="icofont icofont-error close-card"></i></li>
                      </ul>
                    </div>
                  </div>
                  <div class="card-body">
                    <p>Getting start with your project custom requirements using a ready template which is quite difficult and time taking process, Cuba Admin provides useful features to kick start your project development with no efforts !</p>
                    <ul>
                      <li>
                        <p>Jskraft Admin provides you getting start pages with different layouts, use the layout as per your custom requirements and just change the branding, menu & content.</p>
                      </li>
                    </ul>
                    <div class="code-box-copy">
                      <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
        <footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12 footer-copyright text-center">
                <p class="mb-0">Copyright <span class="year-update"> </span> © Cuba Theme By Pixelstrap  </p>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- latest jquery-->
    <script src="{{ asset('/backend/assets/js/jquery.min.js') }}"></script>
    <!-- Bootstrap js-->
    <script src="{{ asset('/backend/assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <!-- feather icon js-->
    <script src="{{ asset('/backend/assets/js/icons/feather-icon/feather.min.js') }}"></script>
    <script src="{{ asset('/backend/assets/js/icons/feather-icon/feather-icon.js') }}"></script>
    <!-- scrollbar js-->
    <script src="{{ asset('/backend/assets/js/scrollbar/simplebar.min.js') }}"></script>
    <script src="{{ asset('/backend/assets/js/scrollbar/custom.js') }}"></script>
    <!-- Sidebar jquery-->
    <script src="{{ asset('/backend/assets/js/config.js') }}"></script>
    <!-- Plugins JS start-->
    <script src="{{ asset('/backend/assets/js/sidebar-menu.js') }}"></script>
    <script src="{{ asset('/backend/assets/js/sidebar-pin.js') }}"></script>
    <script src="{{ asset('/backend/assets/js/slick/slick.min.js') }}"></script>
    <script src="{{ asset('/backend/assets/js/slick/slick.js') }}"></script>
    <script src="{{ asset('/backend/assets/js/header-slick.js') }}"></script>
    <script src="{{ asset('/backend/assets/js/prism/prism.min.js') }}"></script>
    <script src="{{ asset('/backend/assets/js/clipboard/clipboard.min.js') }}"></script>
    <script src="{{ asset('/backend/assets/js/custom-card/custom-card.js') }}"></script>
    <script src="{{ asset('/backend/assets/js/typeahead/handlebars.js') }}"></script>
    <script src="{{ asset('/backend/assets/js/typeahead/typeahead.bundle.js') }}"></script>
    <script src="{{ asset('/backend/assets/js/typeahead/typeahead.custom.js') }}"></script>
    <script src="{{ asset('/backend/assets/js/typeahead-search/handlebars.js') }}"></script>
    <script src="{{ asset('/backend/assets/js/typeahead-search/typeahead-custom.js') }}"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="{{ asset('/backend/assets/js/script.js') }}"></script>
    <script src="{{ asset('/backend/assets/js/script1.js') }}"></script>
    <script src="{{ asset('/backend/assets/js/theme-customizer/customizer.js') }}"></script>
  </body>
</html>