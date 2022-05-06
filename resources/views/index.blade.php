@extends('layout.layout')
@section('content')
    <section class="hero-section">

        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6">
                    <div class="hero-text pt-4">
                        <h2 class="">Scale and</h2>
                        <h1 class="">Maa Profits!</h1>
                        <p >Our Growth Services team provides strategic consulting and full-stack operational marketing
                            to your growing mobile or web3 gaming business.</p>

                        <div class="hero-btn">
                             <a href="#getInTouch">
                                 <!-- <button class="theme-btn dark"  data-aos="zoom-in" data-aos-duration="2000">reach us</button>  -->
                                <button class="theme-btn dark">reach us</button>
                            </a>
                            <a href="#whyAreWe">
                                <!-- <button class="theme-btn light mx-3" data-aos="zoom-in" data-aos-duration="2000">more info</button>  -->
                                <button class="theme-btn light mx-3">more info</button>

                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <!-- <div class="hero-img" data-aos="fade-left" data-aos-duration="3000">
                        <img src="./img/hero-img.png" alt="" class="img-fluid">
                    </div> -->
                    <img src="{{asset('img/hero-img.png')}}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <section class="ourClient">
        <img src="./img/top-bg.svg" alt="" class="w-100 divi-img">
        <div class="container-fluid con1">
        <div class="container ">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6 col-12 mt-5" >
                    <div>
                        <h3>Our Clients</h3>
                        <p class="py-2">Our Growth Services team provides strategic consulting and full-stack
                            operational marketing
                            to your growing mobile or web3 gaming business.</p>
                        <button>explore more</button>
                    </div>
                </div>
                <div class="col-lg-6 col-12 mt-5">
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-6 mt-3 mt-md-0" >
                            <div class="social-link d-flex align-items-center">
                                <a href="">
                                    <img src="{{asset('img/Facebook_white.png')}}" alt="" class="img-fluid">
                                </a>
                                <h6>Facebook</h6>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center py-0 py-md-5">
                        <div class="col-12 col-md-6 mt-3 mt-md-0">
                            <div class="social-link d-flex align-items-center">
                                <a href="">
                                    <img src="{{asset('img/Snapchat.png')}}" alt="" class="img-fluid">
                                </a>
                                <h6>Snapchat</h6>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 mt-3 mt-md-0">
                            <div class="social-link d-flex align-items-center">
                                <a href="">
                                    <img src="{{asset('img/Subtract.png')}}" alt="" class="img-fluid">
                                </a>
                                <h6>Adwords</h6>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-6 mt-3 mt-md-0">
                            <div class="social-link d-flex align-items-center ">
                                <a href="">
                                    <img src="{{asset('img/tiktok.svg')}}" alt="" class="img-fluid">
                                </a>
                                <h6>TikTok</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>


    </section>
    <section class="growth">
        <img src="./img/buttom-bg.svg" alt="" class="w-100 divi-img">
        <div class="container-fluid con2">
        <div class="container py-5">
            <div class="row">
                <div class="col-12 text-center" data-aos="zoom-in" data-aos-duration="1000">
                    <h3>Growth Services</h3>
                    <p>Our Growth Services team provides strategic consulting and operational marketing to your
                        business. Our unique approach to scale your business consists of an operational strategy that works.</p>
                </div>
            </div>
            <div class="row justify-content-center my-5 gap-4">
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="grown-type py-4">
                        <img src="{{asset('img/programmer 1.png')}}" alt="" class="img-fluid">
                        <h5>User Acquisition</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12" >
                    <div class="grown-type py-4" >
                        <img src="{{asset('img/analytics 1.png')}}" alt="" class="img-fluid">
                        <h5>User Acquisition</h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <p class="font-16 lh-40" data-aos="zoom-in" data-aos-duration="1000">
                        By following our approach and continuously doing data research, we are up-to-date on every
                            channel’s changes to ensure we are strategizing your business needs to optimize in a way to
                            grow your business while maximizing profit.
                        <br>
                        Traditional agencies convince you to spend as much money as possible. But our methods are
                        different.
                    </p>
                </div>
            </div>
        </div>
        </div>


    </section>
    <section class="why-weAre">
        <img src="{{asset('img/top-bg.svg')}}" alt="" class="w-100 divi-img">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-6 col-12">
                    <div class="why-we-img">
                        <img src="{{asset('img/Business.png')}}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-6 col-12" id="whyAreWe">
                    <h3 data-aos="flip-left" data-aos-duration="1000">Why are we different? </h3>
                    <ul class="list-group">

                        <li class="list-group-item d-flex  gap-4 mt-lg-3" data-aos="fade-up" data-aos-duration="1000">
                            <img src="{{asset('img/arrow.png')}}" alt="">
                            We do Market and data research so you don’t have to.
                        </li>
                        <li class="list-group-item d-flex  gap-4 mt-lg-3" data-aos="fade-up" data-aos-duration="1000">
                            <img src="{{asset('img/arrow.png')}}" alt="">
                            We ensure your money is being spend properly on advertising to take the stress off your
                            shoulders.
                        </li>
                        <li class="list-group-item d-flex  gap-4 mt-lg-3" data-aos="fade-up" data-aos-duration="1000">
                            <img src="{{asset('img/arrow.png')}}" alt="">
                            We have our custom-built data analysis to look into each Ad Performance and dive deep into
                            optimizations
                        </li>
                        <li class="list-group-item d-flex  gap-4 mt-lg-3" data-aos="fade-up" data-aos-duration="1000">
                            <img src="{{asset('img/arrow.png')}}" alt="">
                            Advanced ASO solution – having the right indexation, discoverable content, and diving deep
                            into the Ad channel ranking algorithms
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="just-startNow" id="getInTouch">
        <img src="{{asset('img/buttom-bg.svg')}}" alt="" class="w-100 divi-img">
        <div class="container-fluid con3">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-6  mt-3">
                    <h3>Our key foundations
                        are just the start. </h3>
                    <p class="pt-2">With years of experience, tools, and contacts, we will help you reach your business
                        goals.
                    </p>
                </div>
                <div class="col-12 col-lg-6 mt-3 d-flex justify-content-center">
                    <div class="our-quality">
                        <div class="quality-card d-flex align-items-center" >
                            <div class="img">
                                <img src="{{asset('img/optimize.svg')}}" alt="" class="img-fluid">
                            </div>
                            <p class="ml-4">Optimizations </p>
                        </div>
                        <div class="quality-card d-flex align-items-center mt-4">
                            <div class="img">
                                <img src="{{asset('img/msg.svg')}}" alt="" class="img-fluid">
                            </div>

                            <p class="ml-4">Strategic Growth Consulting</p>
                        </div>
                        <div class="quality-card d-flex align-items-center mt-4">
                            <div class="img">
                                <img src="{{asset('img/relation.svg')}}" alt="" class="img-fluid">
                            </div>
                            <p class="ml-4">Ad Network relationship Management</p>
                        </div>

                    </div>

                </div>
                <div class="col-12 mt-5">
                    <div class="text-center">
                        <h2>Want to Learn More?</h2>
                    </div>
                </div>

                <div class="col-lg-8 col-md-10 col-12 mt-3">
                    <form class="p-5" method="POST" action="{{url('/submit_form')}}">
                        @csrf
                    <div class="contact-form text-center" id="contact-form">
                        <h4>Get In Touch</h4>
                        <div class="row justify-content-center">
                            <div class="col-6 ">
                                <input type="text" class="form-control mt-4" name="fname" placeholder="First Name" required>
                            </div>
                            <div class="col-6 ">
                                <input type="text" class="form-control mt-4" name="lname" placeholder="Last Name" required>
                            </div>
                            <div class="col-12 ">
                                <input type="text" class="form-control mt-4" name="company" placeholder="Company Name" required>
                            </div>
                            <div class="col-12 ">
                                <input type="text" class="form-control mt-4" name="promoting" placeholder="What app’s are you promoting?">
                            </div>
                            <div class="col-12 ">
                                <input type="text" class="form-control mt-4" name="industry" placeholder="Industry (ecommerce, gaming, etc)" required>
                            </div>
                            <div class="col-12 ">
                                <input type="number" class="form-control mt-4" name="budget" placeholder="Monthly ad budge" required>
                            </div>

                            <div class="col-12 mt-4">
                                <p class="check-out-label">Product Interest</p>
                                <div class="form-check  d-md-flex algin-items-center justify-content-between mt-3">
                                    <div class="d-flex align-items-center">
                                        <input type="checkbox" class="form-check-input" name="services">
                                        <label class="form-check-label">Ucquisition Growth Services</label>
                                    </div>
                                    <div class="d-flex align-items-center mt-3 mt-md-0">
                                        <input type="checkbox" class="form-check-input" name="app">
                                        <label class="form-check-label">Ucquisition App Store Optimization</label>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12 mt-5">
                                <button type="submit" class="w-100">Submit</button>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        </div>


    </section>
    <section class="Learn-more">
        <img src="./img/top-bg.svg" alt="" class="img-fluid divi-img">
        <div class="container py-5">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-up"
                data-aos-duration="1000">
                    <h3>Learn More </h3>
                    <p>Our Growth Services team provides strategic consulting and full-stack operational marketing to
                        your growing mobile or web3 gaming business.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 mt-3" >
                    <div class="learn-card text-center py-4">
                        <img src="./img/service.svg" class="img-fluid" alt="services">
                        <h6>Growth Services</h6>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-3">
                    <div class="learn-card text-center py-4" >
                        <img src="./img/graph.svg" class="img-fluid" alt="">
                        <h6 class="pt-0">Data Analysis</h6>
                    </div>
                </div>
            </div>
        </div>

    </section>
    @endsection
