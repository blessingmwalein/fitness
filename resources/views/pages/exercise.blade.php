@extends('app')

@section('content')
    @include('components.banner')

    <section class="schedule-area section-gap" id="schedule">
        <div class="container">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab"
                        aria-controls="nav-home" aria-selected="true">Exercises List</a>
                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab"
                        aria-controls="nav-profile" aria-selected="false">My Exercises </a>
                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab"
                        aria-controls="nav-contact" aria-selected="false">Contact</a>
                </div>
            </nav>
            @if (session()->has('message'))
                <div class="alert alert-danger" role="alert">
                    {{ session()->get('message') }}
                </div>
            @endif
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <section class="top-course-area section-gap" id="top-course">
                        <div class="container">
                            <div class="row d-flex justify-content-center">
                                <div class="menu-content pb-70 col-lg-9">
                                    <div class="title text-center">
                                        <h1 class="mb-10">Top Courses That are open for Students</h1>
                                        <p>Who are in extremely love with eco friendly system.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                @foreach ($exercises as $exercise)
                                    <div class="col-lg-4 col-md-6">
                                        <div class="single-course">
                                            <div class="thumb">
                                                <img class="img-fluid" src="{{ asset('/uploads/' . $exercise->image) }}"
                                                    alt="">
                                            </div>
                                            <span class="course-status">{{ $exercise->name }}</span>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </section>
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div class="section-top-border">
                        <h3 class="mb-30">My Exercises </h3>
                        <a href="#" class="genric-btn primary radius" data-toggle="modal" data-target="#exampleModal">New
                            Exercise</a>
                        <div class="progress-table-wrap">
                            <div class="progress-table">
                                <div class="table-head">
                                    <div class="serial">#</div>
                                    <div class="country">Name</div>
                                    <div class="visit">Notes</div>
                                    <div class="percentage">Duration</div>
                                </div>
                                @foreach ($user_exercises as $exercise)
                                    <div class="table-row">
                                        <div class="serial">{{$exercise->id}}</div>
                                        <div class="country"> <img height="50" width="50" src="{{ asset('/uploads/' . $exercise->exercise->image) }}"
                                                alt="flag">{{$exercise->exercise->name}}</div>
                                        <div class="visit">{{$exercise->notes}}</div>
                                        <div class="visit">
                                            <div class="visit">{{$exercise->exercise->duration}} minutes</div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
            </div>
        </div>
        <!-- Button trigger modal -->

        <!-- Modal -->
    </section>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('exercise.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Exercise</label>
                            <select class="form-control" name="exercise_id">
                                @foreach ($exercises as $exercise)
                                    <option value="{{ $exercise->id }}">{{ $exercise->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Notes</label>
                            <textarea name="notes" id="" class="form-control" rows="4"></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
