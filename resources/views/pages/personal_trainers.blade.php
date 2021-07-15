@extends('app')
@section('content')
    @include('components.banner')

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
@endsection
