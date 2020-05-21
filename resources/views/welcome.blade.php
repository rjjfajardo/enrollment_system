<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>University of San Carlos</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

        <link href="{{ asset('css/about.css') }}" rel="stylesheet">

    </head>
    <body>
        
        {{-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-success">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-success">Register</a>
                        @endif
                    @endauth
                </div>
            @endif --}}

            <main class="site-main">
                <!-- Start Banner Area -->
                <section class="site-banner" style="background-image: linear-gradient(120deg, #dfe6e9, #b2bec3); min-height: 100vh;">
                    <div class="container">
                        <img src="img/usc.png" style="height: auto; width: 250px;"> 
                        <div class="banner-content">
                            <div class="row">
                                <div class="col-12 col-lg-6 site-title align-self-center">
                                    <h1 class="title-text">SIR PATRICK GWAPO</h1>
                                    <a class="btn btn-outline-success" href="{{ route('login') }}">Get Started</a>
                                </div>
                                    <div class="col-12 col-lg-6 banner-image align-self-center">
                                    <img src="img/team.svg" alt="banner-img" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Banner Area -->
                <!-- Team Area -->
                <section class="site-team">
                    <div class="container align-items-center text-center justify-content-center">
                        <div class="team-content">
                            <div class="col-lg-12 team-title">
                                <span class="label text-uppercase">Our Team</span>
                                <h2>The People Behind The Company</h2>
                                <p>We have something that unites us all. It is our company. <br>We are its heart. We are not
                                    just a team, we are a family.</p>
                            </div>
                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-8">
                                                <div class="team text-center">
                                                    <img class="team-img" src="img/bruce.png" width="120" height="120">
                                                    <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod.
                                                        Nullam id dolor
                                                        id
                                                        nibh
                                                        ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac,
                                                        vestibulum
                                                        at
                                                        eros.
                                                        Praesent commodo cursus magna.</p>
                                                    <h6 class="team-name">Bruce Alturas</h6>
                                                    <h6 class="team-pos">Font-End Dev and UI/UX Developer</h6>
                                                </div>
                                            </div><!-- /.col-md-6 -->
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-8">
                                                <div class="team text-center">
                                                    <img class="team-img" src="img/rj.png" width="120" height="120">
                                                    <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod.
                                                        Nullam id dolor
                                                        id
                                                        nibh
                                                        ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac,
                                                        vestibulum
                                                        at
                                                        eros.
                                                        Praesent commodo cursus magna.</p>
                                                    <h6 class="team-name">Rj Fajardo</h6>
                                                    <h6 class="team-pos">Back-End Dev and UI/UX Developer</h6>
                                                </div>
                                            </div><!-- /.col-md-6 -->
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-8">
                                                <div class="team text-center">
                                                    <img class="team-img" src="img/bruce.png" width="120" height="120">
                                                    <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod.
                                                        Nullam id dolor
                                                        id
                                                        nibh
                                                        ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac,
                                                        vestibulum
                                                        at
                                                        eros.
                                                        Praesent commodo cursus magna.</p>
                                                    <h6 class="team-name">Bruce Alturas</h6>
                                                    <h6 class="team-pos">CEO</h6>
                                                </div>
                                            </div><!-- /.col-md-6 -->
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-8">
                                                <div class="team text-center">
                                                    <img class="team-img" src="img/rj.png" width="120" height="120">
                                                    <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod.
                                                        Nullam id dolor
                                                        id
                                                        nibh
                                                        ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac,
                                                        vestibulum
                                                        at
                                                        eros.
                                                        Praesent commodo cursus magna.</p>
                                                    <h6 class="team-name">Rj Fajardo</h6>
                                                    <h6 class="team-pos">CEO</h6>
                                                </div>
                                            </div><!-- /.col-md-6 -->
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Team Area -->
                <!------------------------->
                <!-- Footer -->
                <footer class="page-footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-5 text-center text-md-left">
                                <a href="index.html"><img src="img/usc.png" height="50px" alt=""></a>
                            </div>
                            <div class="col-12 col-lg-7">
                                <div class="social-link text-center text-lg-right">
                                    <a href=""><img src="img/fb.svg" width="24px"></a>
                                    <a href=""><img src="img/Twitter.svg" width="24px"></a>
                                    <a href=""><img src="img/Instagram.svg" width="24px"></a>
                                    <a href=""><img src="img/Linkedin.svg" width="24px"></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-6 text-center text-md-left">
                                <p>Gov. M. Cuenco Ave, Cebu City, <br>Philippines 6000</p>
                            </div>
                            <div class="col-12 col-lg-6 text-center text-md-right align-self-end">
                                <p>© 2019 Swift. All Rights Reserved.</p>
                            </div>
                        </div>
                    </div>
        
                </footer>
                <!-- End of Footer -->
            </main>
            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
            <!-- Custom JavaScript files -->
           



            
    </body>
</html>
