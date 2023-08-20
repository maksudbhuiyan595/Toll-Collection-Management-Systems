<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Toll Colllection Management Systems</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Poppins:wght@600;700&display=swap"
      rel="stylesheet"
    />

    <!-- Icon Font Stylesheet -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />

    <!-- Libraries Stylesheet -->
    <link href="{{url('frontend/lib/animate/animate.min.css')}}" rel="stylesheet" />
    <link href="{{url('frontend/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{url('/frontend/css/bootstrap.min.css')}}" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="{{url('/frontend/css/style.css')}}" rel="stylesheet" />
  </head>

  <style>
  body{
    background-color: #e2e8f0; 
  }
  </style>

  <body>
    <!-- Spinner Start -->
    <div
      id="spinner"
      class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
    >
      <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    
    <!-- Navbar Start -->
    <nav
      class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0"
    >
      <a href="{{route('home')}}" class="navbar-brand d-flex align-items-center">
        <h1 class="m-0">
          <i class=""></i> <img style="width: 60px;height:60px;" src="/frontend/img/toll.png" class="img-fluid rounded-pill" alt="">
        </h1>
      </a>
      <button
        type="button"
        class="navbar-toggler"
        data-bs-toggle="collapse"
        data-bs-target="#navbarCollapse"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-3 py-lg-0">
            
          <a href="{{route('home')}}" class="nav-item nav-link ">Home</a>
          <a href="{{route('home.tollChart')}}" class="nav-item nav-link ">Toll Charts</a>
          <a href="{{route('admin.login')}}" class="nav-item nav-link">Admin</a>
       
        
        </div>
      </div>
    </nav>
    <!-- Navbar End -->

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
      <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="w-100" src="/frontend/img/bg-1.jpg" alt="Image" />
            <div class="carousel-caption">
              <div class="container">
                <div class="row justify-content-center">
                  <div class="col-12 col-lg-10">
                    <h5
                      class="text-light text-uppercase mb-3 animated slideInDown"
                    >
                      Welcome for Toll Plaza
                    </h5>
                    <h1 class="display-2 text-light mb-3 animated slideInDown">
                      Toll Collection management Systems
                    </h1>
                   
                    <a href="{{route('admin.login')}}" class="btn btn-primary py-3 px-5">Get Started</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="w-100" src="/frontend/img/bg-2.jpg" alt="Image" />
            <div class="carousel-caption">
              <div class="container">
                <div class="row justify-content-center">
                  <div class="col-12 col-lg-10">
                    <h5
                      class="text-light text-uppercase mb-3 animated slideInDown"
                    >
                      Welcome for Toll Plaza
                    </h5>
                    <h1 class="display-2 text-light mb-3 animated slideInDown">
                      Toll Collection Management Systems
                    </h1>
                   
                    <a href="{{route('admin.login')}}" class="btn btn-primary py-3 px-5"
                      >Get Started</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#header-carousel"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#header-carousel"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <!-- Carousel End -->


  @yield('content')

    <!-- Footer Start -->
    <div
      class="container-fluid bg-dark footer mt-5 pt-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
      <div class="container py-5">
        <div class="row g-5">
          <div class="col-lg-7 col-md-6">
            <h1 class="text-white mb-4">
              <i class="fa fa-building text-primary me-3"></i>Toll Collection Management Systems
            </h1>
            <p>
            Tolls were levied on travellers, carts and horses in order to recoup the money spent on maintenance of roads. The system has continued throughout ages and is still followed all over the world. Vehicles have to pay tolls depending on their axle loads.
            </p>
            <div class="d-flex pt-2">
              <a class="btn btn-square btn-outline-primary me-1" href=""
                ><i class="fab fa-twitter"></i
              ></a>
              <a class="btn btn-square btn-outline-primary me-1" href=""
                ><i class="fab fa-facebook-f"></i
              ></a>
              <a class="btn btn-square btn-outline-primary me-1" href=""
                ><i class="fab fa-youtube"></i
              ></a>
              <a class="btn btn-square btn-outline-primary me-0" href=""
                ><i class="fab fa-linkedin-in"></i
              ></a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <h4 class="text-light mb-4">Address</h4>
            <p>
              <i class="fa fa-map-marker-alt me-3"></i>Uttara, Dhaka, Bangladesh
            </p>
            <p><i class="fa fa-phone-alt me-3"></i>+08817345 67890</p>
            <p><i class="fa fa-envelope me-3"></i>uttaraplaza@gmail.com</p>
          </div>
          <div class="col-lg-2 col-md-6">
            <h4 class="text-light mb-4">Quick Links</h4>
            <a class="btn btn-link" href="">Home</a>
            <a class="btn btn-link" href="">Toll Charts</a>
        <!--     <a class="btn btn-link" href="">Our Services</a>
            <a class="btn btn-link" href="">Terms & Condition</a>
            <a class="btn btn-link" href="">Support</a> -->
          </div>
        
        </div>
      </div>
      <div class="container-fluid copyright">
        <div class="container">
          <div class="row">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
              &copy; <a href="{{route('home')}}">Toll Collecitn Management Systems</a>
            </div>
            <div class="col-md-6 text-center text-md-end">
             
              Designed By <a href="{{route('home')}}">Maksud Bhuiyan</a>
              <br />Distributed By:
              <a href="{{route('home')}}" target="_blank">
              The Ministry of Road Transport and Bridges fixed the toll rate for a car at TK 180; pickup van at Tk200; microbus at Tk300; minibus (up to 31 seats) at Tk250 and Big bus (32 seats or more) at Tk350 and motorcycle at TK90.</a>
                        
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"
      ><i class="bi bi-arrow-up"></i
    ></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{url('frontend/lib/wow/wow.min.js')}}}"></script>
    <script src="{{url('frontend/lib/easing/easing.min.js')}}"></script>
    <script src="{{url('frontend/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{url('frontend/lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{url('frontend/js/main.js')}}"></script>
  </body>
</html>
