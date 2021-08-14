<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>@lang('Administration')</title>
</head>
<body>
       
           <div class="container-fluid">
              <div class="row">
                  <div class="col-2 side_bar">
                       <div class="row text-center text-light  p-3">
                        <a href="" class="nav-link text-light">Profile</a>
                       </div>
                       <div class="row">
                           <nav class="">
                               <ul class="navbar-nav">
                                   <li class="nav-item">
                                       <a href="{{ route('admin')}}" class="nav-link text-white">Dashboard</a>
                                   </li>
                                   <li class="nav-item">
                                       <a href="nav-link" class="nav-link text-white">Proprety type</a>
                                   </li>
                                   <li class="nav-item">
                                       <a href="{{ route('propreties')}}" class="nav-link text-white">Propreties</a>
                                   </li>
                                   @auth
                                       @if (auth()->user()->role !=='Buyer')
                                        <li class="nav-item">
                                            <a href="{{ route('city')}}" class="nav-link text-white">Cities</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('inquiries')}}" class="nav-link text-white">Inquiries</a>
                                        </li>
                                       @endif
                                    @endauth
                               </ul>
                           </nav>
                       </div>
                  </div>
                  <div class="col-10">
                      <div class="row bg-light shadow-sm p-3 mb-5">
                           <div class="col-sm-10">
                               Real-Estate-Management-System 
                           </div>
                           <div class="col-sm-2">
                                 <a class="nav-link text-dark text-center" href="{{ route('home')}}"> View home</a>
                           </div>
                      </div>
                      <div class="row p-2">
                        @yield('main')
                      </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</body>
</html>