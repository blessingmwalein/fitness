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
                            <h5 class="text-white" id="bmi"><h5>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center align-items-start">
                    <div class="col-lg-3 col-md-6 cols-img">
                        <input type="text" name="feet" id="bmiHeight" placeholder="Your Height (inches)" class="form-control mb-20">
                    </div>
                    <div class="col-lg-3 col-md-6 cols">
                        <input type="text" id="bmiWeight" name="pounds" placeholder="Your Weight (ibs)" class="form-control mb-20">
                    </div>
                    <div class="col-lg-3 col-md-6 cols">
                        <button id="bmiButton" class="primary-btn header-btn text-uppercase">Calculate Your BMI</button>
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
                @foreach ($trainers as $trainer)
                    <div class="col-md-3 single-team">
                        <div class="thumb">
                            <img class="img-fluid" src="{{ asset('/storage/image/' . $trainer->image) }}" alt="">
                            <div class="align-items-center justify-content-center d-flex">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#" class="genric-btn info radius">Book (${{$trainer->price}})</a>
                            </div>
                        </div>
                        <div class="meta-text mt-30 text-center">
                            <h4>{{ $trainer->name }}</h4>
                            <p>{{ $trainer->email }}</p>
                        </div>
                    </div>
                @endforeach
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
