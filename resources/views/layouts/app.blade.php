<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">


    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/css/mdb.min.css" rel="stylesheet">

    <link href="{{ asset('css/main.css') }}" rel="stylesheet" type="text/css">

</head>

<body>

<div class="top-nav bg-grey pt-1 pb-1">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 text-center text-md-left mb-4 mb-md-0">
                    <small>Welcome To Sathi help society</small>
                </div>
                <div class="col-md-6  col-lg-6 text-center text-md-right mb-4 mb-md-0">
                      <!-- Facebook -->
                      <a class="fb-ic">
                        <i class="fab fa-facebook-f  mr-4"> </i>
                      </a>
                      <!-- Twitter -->
                      <a class="tw-ic">
                        <i class="fab fa-twitter  mr-4"> </i>
                      </a>
                      <!-- Google +-->
                      <a class="gplus-ic">
                        <i class="fab fa-google-plus-g  mr-4"> </i>
                      </a>
                      <!--Linkedin -->
                      <a class="li-ic">
                        <i class="fab fa-linkedin-in  mr-4"> </i>
                      </a>
                      <!--Instagram-->
                      <a class="ins-ic">
                        <i class="fab fa-instagram mr-4"> </i>
                      </a>

                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark pt-3 pb-3">
     <div class="container">
         <a class="navbar-brand text-uppercase" href="#">S H S</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item ">
                <a class="nav-link" href="{{ url('/')}}">Home <span class="sr-only">(current)</span></a>
              </li>
        
              <li class="nav-item ">
                <a class="nav-link" href="{{ route('page','about-us')}}">About Us</a>
              </li>
              <!-- <li class="nav-item ">
                <a class="nav-link" href="{{ route('page','products')}}">Products</a>
              </li> -->
              <li class="nav-item ">
                <a class="nav-link" href="{{ route('page','rewards')}}">Rewards</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="{{ route('page','contact-us')}}">
                Contact Us</a>
              </li>

              @guest
               <li class="nav-item ">
                <a class="nav-link" href="{{ route('login') }}">Login</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="{{ route('register') }}">Register</a>
              </li>

              @else
              <li class="nav-item ">
                <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
               </a>
               <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                 @csrf
              </form>
              </li>
              @endif
              
            </ul>
          
          </div>
     </div>
    </nav>

    <!-- <section> -->
         @yield('content')
    <!-- </section> -->


    <!-- Footer -->
            <footer class="page-footer font-small unique-color-dark">

              <div style="background-color: #6351ce;">
                <div class="container">

                  <!-- Grid row-->
                  <div class="row py-4 d-flex align-items-center">

                    <!-- Grid column -->
                    <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                      <h6 class="mb-0">Get connected with us on social networks!</h6>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-6 col-lg-7 text-center text-md-right">

                      <!-- Facebook -->
                      <a class="fb-ic">
                        <i class="fab fa-facebook-f white-text mr-4"> </i>
                      </a>
                      <!-- Twitter -->
                      <a class="tw-ic">
                        <i class="fab fa-twitter white-text mr-4"> </i>
                      </a>
                      <!-- Google +-->
                      <a class="gplus-ic">
                        <i class="fab fa-google-plus-g white-text mr-4"> </i>
                      </a>
                      <!--Linkedin -->
                      <a class="li-ic">
                        <i class="fab fa-linkedin-in white-text mr-4"> </i>
                      </a>
                      <!--Instagram-->
                      <a class="ins-ic">
                        <i class="fab fa-instagram white-text"> </i>
                      </a>

                    </div>
                    <!-- Grid column -->

                  </div>
                  <!-- Grid row-->

                </div>
              </div>

              <!-- Footer Links -->
              <div class="container text-center text-md-left mt-5">

                <!-- Grid row -->
                <div class="row mt-3">

                  <!-- Grid column -->
                  <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

                    <!-- Content -->
                    <h6 class="text-uppercase font-weight-bold">Sathi help society</h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p style="text-align: justify;">Our Organization is an exciting "People Help Group". A Group that has the potential to turn your dreams into reality. As you build your business and life , you will establish lifelong friendships and develop support systems unparalleled in any other business.</p>

                  </div>
                  <!-- Grid column -->

                  <!-- Grid column -->
                  <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

                    

                  </div>
                  <!-- Grid column -->

                  <!-- Grid column -->
                  <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

                    <!-- Links -->
                    <h6 class="text-uppercase font-weight-bold">Useful links</h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                      <a href="{{ url('/')}}">Home </a>
                    </p>
                    <p>
                      <a href="{{ route('page','about-us')}}">About Us</a>
                    </p>
                    <p>
                      <a href="{{ route('dashboard') }}">Dashboard</a>
                    </p>
                  </div>
                  <!-- Grid column -->

                  <!-- Grid column -->
                  <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

                    <!-- Links -->
                    <h6 class="text-uppercase font-weight-bold">Contact</h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                      <i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
                    <p>
                      <i class="fas fa-envelope mr-3"></i> info@example.com</p>
                    <p>
                      <i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                    <p>
                      <i class="fas fa-print mr-3"></i> + 01 234 567 89</p>

                  </div>
                  <!-- Grid column -->

                </div>
                <!-- Grid row -->

              </div>
              <!-- Footer Links -->

              <!-- Copyright -->
              <div class="footer-copyright text-center py-3">&copy; {{ date('Y') }} Copyright
                <a href="{{ url('/') }}">Sathi help society</a>
              </div>
              <!-- Copyright -->

            </footer>
            <!-- Footer -->
   <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/js/mdb.min.js"></script>
    @yield('pagescript')
  </body>
</html>