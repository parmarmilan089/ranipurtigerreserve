  <!DOCTYPE html>
  <html lang="en">

  <!-- Mirrored from azim.commonsupport.com/Weldlfe/index-rtl.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Jan 2025 13:44:04 GMT -->
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

  <title>Ranipur’s Big five: Bear, Deer, Ground Pangolin, Tiger and Leopards with other unique species.</title>

  <link rel="icon" href="{{ asset('assets/images/icons/icon-1.png') }}" type="image/x-icon">


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">

  <!-- Stylesheets -->
  <!-- Stylesheets -->
  <link href="{{ asset('assets/css/font-awesome-all.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/flaticon.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/owl.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/jquery.fancybox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/color.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/rtl.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">

  </head>


  <!-- page wrapper -->
  <body>

      <div class="boxed_wrapper">
          <!-- main header -->
          <header class="main-header header-flex" id="myHeader">            
              <nav class="navbar navbar-expand-lg navbar-light bg-light">
                  <div class="container-fluid">
                      <a class="navbar-brand" href="{{ route('home') }}">
                          <div class="logo-area">
                          <div class="logo-img">
                              <img src="{{ asset('assets/images/logo.png') }}" alt="" />
                          </div>
                          </div>
                      </a>
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                    
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                          <li class="nav-item active">
                            <a class="nav-link" href="#about">About</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Hotels & Resorts</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="#attractions">Attractions</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="#reach">How to Reach</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link request-btn" href="#">Book Here</a>
                          </li>
                          <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Dropdown
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="#">Action</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                          </li> -->                        
                        </ul>                  
                      </div>
                  </div>
                </nav> 
          </header>
          <!-- main-header end -->


          @yield('content')
      </div>


      <script src="{{ asset('assets/js/jquery.js') }}"></script>
  <script src="{{ asset('assets/js/parallax.js') }}"></script>
  <script src="{{ asset('assets/js/popper.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/js/owl.js') }}"></script>
  <script src="{{ asset('assets/js/wow.js') }}"></script>
  <script src="{{ asset('assets/js/validation.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.fancybox.js') }}"></script>
  <script src="{{ asset('assets/js/appear.js') }}"></script>
  <script src="{{ asset('assets/js/scrollbar.js') }}"></script>

  <!-- main-js -->
  <script src="{{ asset('assets/js/script.js') }}"></script>

  </body><!-- End of .page_wrapper -->
  <style>
  /*    .safari__cart figure img {*/
  /*    height: 270px;*/
  /*    object-fit: cover;*/
  /*}*/

  .gallery-block-one img {
      height: 240px;
      object-fit: cover;
  }
  section#about {}

  section#about .image_block_one .image-box .icon-box {
      /* padding: 10px; */
  }

  section#about .image_block_one .image-box .icon-box img {
      border-radius: 50%;
      width: 110px;
  }
  .overlay-content {
      display: none;
  }
  </style>
  <!-- Mirrored from azim.commonsupport.com/Weldlfe/index-rtl.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Jan 2025 13:44:04 GMT -->
  </html>
