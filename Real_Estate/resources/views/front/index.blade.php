<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>{{ config('app-name','Real-Estate') }}</title>
</head>
<body> 
        <div class="header">
            <header>
                <nav class="navbar navbar-expand-lg py-3">
                    <div class="container-fluid">
                      <a class="navbar-brand" href="#">Real-Estate</a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarScroll">
                        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                          <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="{{ route('agents') }}">Agents</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Sale</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Buy</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="{{ route('proprety') }}">Propreties</a>
                          </li>
                        </ul>
                        <div class="auth d-flex py-0">
                          @auth
                                    @if(auth()->user()->role !='user')
                                          <a class="nav-link"
                                            href="{{ route('admin') }}">
                                            @lang('Administration')
                                          </a>
                                          <div class="col-sm-2 float-right">
                                            <form action="{{ route('logout') }}" method="POST" hidden>
                                              @csrf                                
                                            </form>
                                            <a class="nav-link"
                                               href="{{ route('logout') }}"
                                               onclick="event.preventDefault(); this.previousElementSibling.submit();">
                                               @lang('Logout')
                                            </a>
                                          </div> 
                                     @endif
 
                          @else
                          <a class="nav-link text-dark" href="{{ route('login') }}">@lang('Login')</a>
                          <a class="nav-link text-dark" href="{{ route('register') }}">@lang('Register')</a>
                          @endauth

                        </div>
                      </div>
                    </div>
                  </nav>
            </header>
        </div>

            <div id="carouselExampleControls" class="carousel slide relative" data-bs-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('/images/flat.jpg') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption bg-light text-dark">
                          <h3>You're welcom</h3>
                          <p>The best platform for selling ,renting propreties</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('/images/living.jpg') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption bg-light text-dark">
                          <h3>Hi Custumors</h3>
                          <p>You ti sell or rent a proprety , Your on the right Way</p>
                        </div>
                      </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('/images/villa.jpg') }}" class="d-block w-100" alt="...">
                    </div>
                  </div>
            </div> 
       
        <div class="search-bar container bg-light p-4 m-auto shadow-lg p-3 bg-body rounded">
          <form action="">
            <div class="row g-3">
              <div class="col-lg-3 col-md-4">
                <input type="text" class="form-control" placeholder="Proprety Name" aria-label="First name">
              </div>
              <div class="col-lg-3 col-md-4">
                <select class="form-select" aria-label="Default select example">
                  <option selected>Open this select menu</option>
                    @foreach ($proprety as $proretytype)
                      <option>{{ $proprety->title}}</option>
                    @endforeach
                </select>
              </div>
              <div class="col-lg-1 col-md-2">
                <input type="submit" class="btn btn-primary" placeholder="Last name" aria-label="Last name">
              </div>
            </div>
          </form>
        </div>



      <div class="container p-4">
        @yield('main')
      </div>

        @yield('proprety')


        @yield('agent')

        <!-- Footer -->
        <footer class="text-center text-lg-start bg-light text-muted">
          <!-- Section: Social media -->
          <section
            class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
          >
            <div class="me-5 d-none d-lg-block">
              <span>Get connected with us on social networks:</span>
            </div>
            <!-- Left -->

            <!-- Social media link-->
            <div>
              <a href="" class="m-2">
                <i class="fab fa-facebook-square"></i>
              </a>
              <a href="" class="m-2">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="" class="m-2 ">
                <i class="fab fa-google"></i>
              </a>
              <a href="" class="m-2 ">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="" class="m-2 ">
                <i class="fab fa-linkedin"></i>
              </a>
              <a href="" class="m-2">
                <i class="fab fa-github"></i>
              </a>
            </div>
            <!-- Right -->
          </section>
          <!-- Section: Social media -->

          <section class="">
            <div class="container text-center text-md-start mt-5">
    
              <div class="row mt-3">
            
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                
                  <h6 class="text-uppercase fw-bold mb-4">
                    <i class="fas fa-gem me-3"></i>Company name
                  </h6>
                  <p>
                    Here you can use rows and columns to organize your footer content. Lorem ipsum
                    dolor sit amet, consectetur adipisicing elit.
                  </p>
                </div>
  
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                  <!-- Links -->
                  <h6 class="text-uppercase fw-bold mb-4">
                    Products
                  </h6>
                  <p>
                    <a href="#!" class="text-reset">Laravel</a>
                  </p>
                  <p>
                    <a href="#!" class="text-reset">Php</a>
                  </p>
                  <p>
                    <a href="#!" class="text-reset">Vue</a>
                  </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                  <!-- Links -->
                  <h6 class="text-uppercase fw-bold mb-4">
                    Useful links
                  </h6>
                  <p>
                    <a href="#!" class="text-reset">Pricing</a>
                  </p>
                  <p>
                    <a href="#!" class="text-reset">Settings</a>
                  </p>
                  <p>
                    <a href="#!" class="text-reset">Orders</a>
                  </p>
                  <p>
                    <a href="#!" class="text-reset">Help</a>
                  </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                  <!-- Links -->
                  <h6 class="text-uppercase fw-bold mb-4">
                    Contact
                  </h6>
                  <p><i class="fas fa-home me-3"></i> Youssoufia , 46300</p>
                  <p>
                    <i class="fas fa-envelope me-3"></i>
                    info@example.com
                  </p>
                </div>
                <!-- Grid column -->
              </div>
              <!-- Grid row -->
            </div>
          </section>
        </footer>
        <!-- Footer -->


        
                    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
                    <script>
                      const myCarousel = document.getElementById('myCarousel')
                        myCarousel.addEventListener('slid.bs.carousel', function () {
                        const activeItem = this.querySelector(".active");
                        document.querySelector(".testi-img img").src = activeItem.getAttribute("data-img");
                        document.querySelector(".testi-img .circle").style.backgroundColor = activeItem.getAttribute("data-color");
                      })
                    </script>
</body>
</html>