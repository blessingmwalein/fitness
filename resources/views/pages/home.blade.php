@extends('app')
@section('content')
    @include('components.banner')

    <section class="offer-area section-gap" id="offer">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h1 class=" mb-10">We care about what we offer</h1>
                        <p>Who are in extremely love with eco friendly system.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-offer">
                        <img class="img-fluid" src="img/o1.png" alt="">
                        <h4>Regular Exercise</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-offer">
                        <img class="img-fluid" src="img/o2.png" alt="">
                        <h4>Training on the go</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-offer">
                        <img class="img-fluid" src="img/o3.png" alt="">
                        <h4>Body Building Packages</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="convert-area" id="convert">
        <div class="container">
            <div class="convert-wrap">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content pb-70 col-lg-8">
                        <div class="title text-center">
                            <h1 class="text-white mb-10">Calclulate Your Body Mass Index</h1>
                            <p class="text-white">Who are in extremely love with eco friendly system.</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center align-items-start">
                    <div class="col-lg-3 col-md-6 cols-img">
                        <input type="text" name="feet" placeholder="Your Height (inches)" class="form-control mb-20">
                    </div>
                    <div class="col-lg-3 col-md-6 cols">
                        <input type="text" name="pounds" placeholder="Your Weight (ibs)" class="form-control mb-20">
                    </div>
                    <div class="col-lg-3 col-md-6 cols">
                        <a href="#" class="primary-btn header-btn text-uppercase">Calculate Your BMI</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="feature-area">
        <div class="container-fluid">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-3 feat-img no-padding">
                    <img class="img-fluid" src="img/f1.jpg" alt="">
                </div>
                <div class="col-lg-3 no-padding feat-txt">
                    <h6 class="text-uppercase text-white">Basic & Common Repairs</h6>
                    <h1>Basic Revolutions</h1>
                    <p>
                        Computer users and programmers have become so accustomed to using Windows, even for the changing
                        capabilities and the appearances of the graphical.
                    </p>
                </div>
                <div class="col-lg-3 feat-img no-padding">
                    <img class="img-fluid" src="img/f2.jpg" alt="">
                </div>
                <div class="col-lg-3 no-padding feat-txt">
                    <h6 class="text-uppercase text-white">Basic & Common Repairs</h6>
                    <h1>Basic Revolutions</h1>
                    <p>
                        Computer users and programmers have become so accustomed to using Windows, even for the changing
                        capabilities and the appearances of the graphical.
                    </p>
                </div>
            </div>
        </div>
    </section>


    <section class="team-area section-gap" id="trainer">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Our Experienced Trainers</h1>
                        <p>Who are in extremely love with eco friendly system.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center d-flex align-items-center">
                <div class="col-md-3 single-team">
                    <div class="thumb">
                        <img class="img-fluid" src="img/t1.jpg" alt="">
                        <div class="align-items-center justify-content-center d-flex">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="meta-text mt-30 text-center">
                        <h4>Ethel Davis</h4>
                        <p>Managing Director (Sales)</p>
                    </div>
                </div>
                <div class="col-md-3 single-team">
                    <div class="thumb">
                        <img class="img-fluid" src="img/t2.jpg" alt="">
                        <div class="align-items-center justify-content-center d-flex">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="meta-text mt-30 text-center">
                        <h4>Rodney Cooper</h4>
                        <p>Creative Art Director (Project)</p>
                    </div>
                </div>
                <div class="col-md-3 single-team">
                    <div class="thumb">
                        <img class="img-fluid" src="img/t3.jpg" alt="">
                        <div class="align-items-center justify-content-center d-flex">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="meta-text mt-30 text-center">
                        <h4>Dora Walker</h4>
                        <p>Senior Core Developer</p>
                    </div>
                </div>
                <div class="col-md-3 single-team">
                    <div class="thumb">
                        <img class="img-fluid" src="img/t4.jpg" alt="">
                        <div class="align-items-center justify-content-center d-flex">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="meta-text mt-30 text-center">
                        <h4>Lena Keller</h4>
                        <p>Creative Content Developer</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="price-area pt-100" id="plan">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-60 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Choose the Perfect Plan for you</h1>
                        <p>Who are in extremely love with eco friendly system.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-price">
                        <div class="top-sec d-flex justify-content-between">
                            <div class="top-left">
                                <h4>Standard</h4>
                                <p>For the <br>individuals</p>
                            </div>
                            <div class="top-right">
                                <h1>£199</h1>
                            </div>
                        </div>
                        <div class="bottom-sec">
                            <p>
                                “Few would argue that, despite the advancements
                            </p>
                        </div>
                        <div class="end-sec">
                            <ul>
                                <li>2.5 GB Free Photos</li>
                                <li>Secure Online Transfer Indeed</li>
                                <li>Unlimited Styles for interface</li>
                                <li>Reliable Customer Service</li>
                                <li>Manual Backup Provided</li>
                            </ul>
                            <button class="primary-btn price-btn mt-20">Purchase Plan<span
                                    class="lnr lnr-arrow-right"></span></button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-price">
                        <div class="top-sec d-flex justify-content-between">
                            <div class="top-left">
                                <h4>Business</h4>
                                <p>For the <br>small Company</p>
                            </div>
                            <div class="top-right">
                                <h1>£399</h1>
                            </div>
                        </div>
                        <div class="bottom-sec">
                            <p>
                                “Few would argue that, despite the advancements
                            </p>
                        </div>
                        <div class="end-sec">
                            <ul>
                                <li>2.5 GB Free Photos</li>
                                <li>Secure Online Transfer Indeed</li>
                                <li>Unlimited Styles for interface</li>
                                <li>Reliable Customer Service</li>
                                <li>Manual Backup Provided</li>
                            </ul>
                            <button class="primary-btn price-btn mt-20">Purchase Plan<span
                                    class="lnr lnr-arrow-right"></span></button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-price">
                        <div class="top-sec d-flex justify-content-between">
                            <div class="top-left">
                                <h4>Ultimate</h4>
                                <p>For the <br>large Company</p>
                            </div>
                            <div class="top-right">
                                <h1>£499</h1>
                            </div>
                        </div>
                        <div class="bottom-sec">
                            <p>
                                “Few would argue that, despite the advancements
                            </p>
                        </div>
                        <div class="end-sec">
                            <ul>
                                <li>2.5 GB Free Photos</li>
                                <li>Secure Online Transfer Indeed</li>
                                <li>Unlimited Styles for interface</li>
                                <li>Reliable Customer Service</li>
                                <li>Manual Backup Provided</li>
                            </ul>
                            <button class="primary-btn price-btn mt-20">Purchase Plan<span
                                    class="lnr lnr-arrow-right"></span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="brand-area section-gap">
        <div class="container">
            <div class="row logo-wrap">
                <a class="col single-img" href="#">
                    <img class="d-block mx-auto" src="img/l1.png" alt="">
                </a>
                <a class="col single-img" href="#">
                    <img class="d-block mx-auto" src="img/l2.png" alt="">
                </a>
                <a class="col single-img" href="#">
                    <img class="d-block mx-auto" src="img/l3.png" alt="">
                </a>
                <a class="col single-img" href="#">
                    <img class="d-block mx-auto" src="img/l4.png" alt="">
                </a>
                <a class="col single-img" href="#">
                    <img class="d-block mx-auto" src="img/l5.png" alt="">
                </a>
            </div>
        </div>
    </section>


    <section class="callto-area section-gap relative">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <h1 class="text-white">Huge Transaction in last Week</h1>
                    <p class="text-white pt-20 pb-20">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore <br> magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                    </p>
                    <a class="primary-btn" href="#">Become a Member</a>
                </div>
            </div>
        </div>
    </section>


@endsection
