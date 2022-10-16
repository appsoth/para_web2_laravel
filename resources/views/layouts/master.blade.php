
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

@include('layouts.header')
</head>
<body>
    <div class="homepage">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="menu-bar container-fluid">
                <a class="logo-link navbar-brand" href="#">
                    <img src="{{asset('/assests/')}}//images/majorcineplex.png" alt="Major Cineplex" />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="menu-contents collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav nav nav-pills me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="./index.html">
                                <span class="iconify" data-icon="fa-solid:home"></span>
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./pages/Cinema.html">
                                <span class="iconify" data-icon="maki:cinema"></span>
                                Cinemas
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./pages/Promotions.html">
                                <span class="iconify" data-icon="bxs:discount"></span>
                                Promotions
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./pages/New_activity.html">
                                <span class="iconify" data-icon="fluent:news-16-filled"></span>
                                News & Activity
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./pages/Contact.html">
                                <span class="iconify" data-icon="bxs:contact"></span>
                                Contact
                            </a>
                        </li>
                    </ul>
                    <form class="search-bar d-flex">
                        <input class="search-input form-control me-2" type="search-movie" placeholder="Search" aria-label="Search">
                        <button class="search-btn btn btn-outline-success" type="submit">
                            <span class="iconify" data-icon="bx:search-alt-2"></span>
                        </button>
                    </form>
                    <div class="lang" style="color: white;">
                        <div class="btn-group">
                            <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="iconify" data-icon="jam:world"></span>
                                EN
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item active" href="#">English</a></li>
                                <li><a class="dropdown-item" href="#">Khmer (ខ្មែរ)</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

    <!-- Only Login -->
    @auth
    <span style="color:white;width:100px"> Hello {{Auth::user()->name}} </span>

      <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">

        <span class="menu-icon">
          <i class="mdi mdi-speedometer"></i>
        </span>
        <span class="menu-title">Logout</span>
    </a>
    <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
    @endauth

    <!-- Without Login as Guest -->
    @guest
    <a class="nav-link" href="{{url('login')}}">

        <span class="menu-icon">
          <i class="mdi mdi-speedometer"></i>
        </span>
        <span class="menu-title">Login</span>
    </a>
    @endguest

        </nav>

        <div class="slider-page carousel slide carousel-fade" id="carouselExampleFade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('/assests/')}}//images/thebatman.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('/assests/')}}//images/Jailangkun 1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('/assests/')}}//images/thelostcity.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="main-contents">
            <div class="filter-bar">
                <div class="dropdown">
                    <a class="btn text-white dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="iconify" data-icon="icons8:filter"></span>
                        Filter
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                      <li><a class="dropdown-item active" href="#">NOW SHOWING</a></li>
                      <li><a class="dropdown-item" href="#">COMING SOON</a></li>
                      <li><a class="dropdown-item" href="#">4DX</a></li>
                      <li><a class="dropdown-item" href="#">KIDS CINEMA</a></li>
                    </ul>
                </div>
            </div>
            <div class="movie-contents">
                <div class="row-movie">


                <!-- ROW -->
                @yield("content")


                </div><!-- /ROW -->
            </div>
        </div>

        <div class="footer">
            @include('layouts.footer')
        </div>
    </div>






    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>



</body>
</html>

