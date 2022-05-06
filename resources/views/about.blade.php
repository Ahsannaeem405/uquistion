@extends('layout.layout')
<link rel="stylesheet" href="{{asset('css/about.css')}}">
@section('content')

    <section class="about-hero">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 p-0">
                    <div class="hero-img">
                        <img src="{{asset('img/herobg.png')}}" alt="" class="w-100">
                    </div>
                </div>
            </div>

            <div class=" align-items-center about-hero-details">
                <div class="">
                    <div class="hero-text">
                        <h2>About <span>Us</span> </h2>
                        <p class="mt-ld-4 mt-md-2 mt-0">Our Growth Services team provides strategic consulting and full-stack
                            operational marketing
                            to your growing mobile or web3 gaming business.</p>

                        <div class="hero-btn">
                            <a href="#getInTouch">
                                 <button class="theme-btn dark">Reach us</button>
                            </a>
                          <a href="#">
                                <button class="theme-btn light mx-3">More Info</button>
                          </a>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">

                </div>
            </div>
        </div>
    </section>

    <section class="growth about">
        <div class="container-fluid con_a1">
        <div class="container py-5">
            <div class="row">
                <div class="col-12 text-center" data-aos="zoom-in" data-aos-duration="1000">
                    <h3>Growth Services</h3>
                    <p>Our Growth Services team provides strategic consulting and full-stack operational marketing to
                        your growing mobile or web3 gaming business.</p>
                </div>
            </div>
            <div class="row justify-content-center my-5 gap-4">
                <div class="col-lg-4 col-md-6 col-12 mt-3">
                    <div class="grown-type">
                        <img src="{{asset('img/programmer 1.png')}}" alt="" class="img-fluid">
                        <h5>User Acquisition</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mt-3">
                    <div class="grown-type">
                        <img src="{{asset('img/analytics 1.png')}}" alt="" class="img-fluid">
                        <h5>User Acquisition</h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <p data-aos="zoom-in" data-aos-duration="1000">
                        By following these approach and continuously doing data research, we are up-to-date on every
                        channel’s changes to ensure we are strategizing your business needs to optimizing in a way to
                        grow your business while maximizing your profit.
                        <br>
                        Traditional agencies convince you to spend as much money as possible. But our approach is
                        different.
                    </p>
                </div>
            </div>
        </div>
        </div>

    </section>

    <section class="section-1">
        <img src="{{asset('img/buttom-bg.svg')}}" alt="" class="w-100 divi-img">
        <div class="container-fluid con_a2">
        <div class="container pt-5">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-6 col-12" data-aos="zoom-in" data-aos-duration="1000">
                    <h3 class="section-heading">User Acquisition</h3>
                    <p class="section-para pt-3">By taking a comprehensive & latest approach, we use a combination of
                        strategic thinking and
                        latest marketing research. By being up-to-date on latest trends, knowing what works and what
                        doesn’t. Our focus is on channels that maximize profitability and provide the highest ROI.</p>
                </div>
                <div class="col-md-6 col-12">
                    <div class="section-img">
                        <img src="{{asset('img/Web-search.png')}}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
        </div>

    </section>

    <section class="section-2">
        <img src="{{asset('img/top-bg.svg')}}" alt="" class="w-100 divi-img">
        <div class="container pt-5">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-6 col-12">
                    <div class="section-img p-4">
                        <img src="{{asset('img/section2.png')}}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-6 col-12" data-aos="zoom-in" data-aos-duration="1000">
                    <h3 class="section-heading">Analytics & Data </h3>
                    <p class="section-para pt-4">Our custom-built data analysis provides the understanding of each
                        specific ad data. We know when to scale up and when to do proper optimizations. By knowing which
                        ad channel to invest money in, this will help to scale up spend. </p>
                </div>

            </div>
        </div>
    </section>

    <section class="just-startNow" id="getInTouch">
        <img src="{{asset('img/buttom-bg.svg')}}" alt="" class="w-100 divi-img">
        <div class="container-fluid con_a3">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-12 my-lg-5 my-md-4 my-2 ">
                    <div class="text-center">
                        <h2>Want to Learn More?</h2>
                    </div>
                </div>
                <div class="col-lg-8 col-md-10 col-12 mt-3">
                    <form class="p-5" method="POST" action="{{url('/submit_form')}}">
                        @csrf
                    <div class="contact-form text-center" id="contact-form" mt-4 data-aos="zoom-in" data-aos-duration="1000">
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
        <img src="{{asset('img/top-bg.svg')}}" alt="" class="w-100 divi-img">
        <div class="container py-5">
            <div class="row">
                <div class="col-12 text-center"  data-aos="fade-up"
                data-aos-duration="1000">
                    <h3>Learn More </h3>
                    <p>Our Growth Services team provides strategic consulting and full-stack operational marketing to
                        your growing mobile or web3 gaming business.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 mt-3">
                    <div class="learn-card text-center py-3" >
                        <img src="{{asset('img/service.svg')}}" alt="services">
                        <h6>Growth Services</h6>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-3">
                    <div class="learn-card text-center py-3">
                        <img src="{{asset('img/graph.svg')}}" alt="">
                        <h6 class="pt-0">Data Analysis</h6>
                    </div>
                </div>
            </div>
        </div>

    </section>
  @endsection
