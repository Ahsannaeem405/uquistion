<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- fonts awosome -->
    <script src="https://kit.fontawesome.com/9838783293.js" crossorigin="anonymous"></script>
    <!--link css  -->
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
        <link rel="stylesheet" href="{{asset('css/fonts/stylesheet.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

        <!-- Aos Animation -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        <!-- Animation.style -->
        <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
      />

    <title>Uquistion</title>
</head>

<body>
    <section class="dark-navbar">

            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="{{url('/')}}">
                    <img src="{{asset('upload/logo/'.$logo->image)}}" alt="site-logo" class="img-fluid logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="fa fa-bars" aria-hidden="true"></i>

                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="{{url('/about')}}">About<span class="sr-only">(current)</span></a>
                        </li>
                        <!-- <li class="nav-item ">
                            <a class="nav-link" href="#">Growth Services<span class="sr-only">(current)</span></a>
                        </li> -->
                        <li class="nav-item nav-btn px-4 py-0">
                            <a class="nav-link" href="#contact-form">Contact us <span class="sr-only">(current)</span></a>
                        </li>
                    </ul>
                </div>
            </nav>
    </section>

    @yield('content')

    <section class="footer">
        <img src="{{asset('img/buttom-bg.svg')}}" alt="" class="w-100 divi-img">
        <div class="container-fluid con_5">
        <div class="container mt-5">
            <div class="row py-4">
                <div class="col-md-4 col-12">
                    <img src="./img/logo12.png" alt="" class="img-fluid">
                    <p>Our Growth Services team provides strategic consulting and full-stack operational marketing to
                        your growing mobile or web3 gaming business.</p>
                </div>
                <div class="col-md-4 col-6">

                    <ul>
                        <li>
                            <a href="#" class="active">Home</a>
                        </li>
                        <li>
                            <a href="#">About</a>
                        </li>
                        {{-- <li>
                            <a href="#">Growth Services</a>
                        </li> --}}
                    </ul>
                </div>
                <div class="col-md-4 col-6">
                    <ul>
                        <li>
                            <a href="#" class="active">Growth Marketing</a>
                        </li>
                        <li>
                            <a href="#">User Acquisition </a>
                        </li>
                        <li>
                            <a href="#">Analytics & Data </a>
                        </li>
                    </ul>
                </div>
            </div>
            <hr>
            <div class="row footer-copy-right">
                <div class="col-md-6 col-12">
                    <div class="d-flex">
                        <img src="./img/footer-icon.svg" alt="">
                        <p class="px-3">Copyright © 2022 Uquisition Inc. All rights reserved.</p>
                    </div>
                </div>
                <div class="col-md-6 col-12 text-center">
                    <a href="#" class="float-md-right ">Privacy Policy | Terms of Use</a>
                </div>
            </div>
        </div>
        </div>

    </section>
    <!-- bootstrap script -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
        <!-- Aos animation script -->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

            <link rel="stylesheet" type="text/css"
            href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">


           <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
            <!-- END: Custom CSS-->

            <script>
                @if(Session::has('success'))
                toastr.options =
                {
                  "closeButton" : true,
                  "progressBar" : true
                }
                    toastr.success("{{ session('success') }}");
                @endif

                @if(Session::has('error'))
                toastr.options =
                {
                  "closeButton" : true,
                  "progressBar" : true
                }
                    toastr.error("{{ session('error') }}");
                @endif

                @if(Session::has('info'))
                toastr.options =
                {
                  "closeButton" : true,
                  "progressBar" : true
                }
                    toastr.info("{{ session('info') }}");
                @endif

                @if(Session::has('warning'))
                toastr.options =
                {
                  "closeButton" : true,
                  "progressBar" : true
                }
                    toastr.warning("{{ session('warning') }}");
                @endif
              </script>
</body>

</html>

