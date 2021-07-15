@extends('app')

@section('content')
    @include('components.banner')


    <section class="schedule-area section-gap" id="schedule">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Schedule your Fitness Process</h1>
                        <p>Who are in extremely love with eco friendly system.</p>
                    </div>
                </div>
            </div>
            <a href="#" class="genric-btn primary radius" data-toggle="modal" data-target="#exampleModal">Add New
                Schedule</a>
            @if (session()->has('message'))
                <div class="alert alert-danger" role="alert">
                    {{ session()->get('message') }}
                </div>
            @endif
            <div class="row">
                <div class="table-wrap col-lg-12">
                    <table class="schdule-table table table-bordered">
                        <thead class="thead-light">
                            <tr>
                                <th class="head" scope="col">Trainer</th>
                                <th class="head" scope="col">Day Of Week</th>
                                <th class="head" scope="col">Start Time</th>
                                <th class="head" scope="col">End Time</th>
                                <th class="head" scope="col">Notes</th>
                                <th class="head" scope="col">Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($schedules as $schedule)
                            <tr>
                                <th class="name" scope="row">{{$schedule->trainer->name}}</th>
                                <td>{{$schedule->day_of_week}}</td>
                                <td>{{$schedule->time}}</td>
                                <td>{{$schedule->end_time}}</td>
                                <td>{{$schedule->notes}}</td>
                                <td>${{$schedule->trainer->price}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
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
                    <form method="POST" action="{{ route('schedule.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Pick a Trainer</label>
                            <select class="form-control" name="trainer_id">
                                @foreach ($trainers as $trainer)
                                    <option value="{{ $trainer->id }}">{{ $trainer->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Day</label>
                            <select class="form-control" name="day_of_week">
                                <option value="Sunday">Sunday</option>
                                <option value="Monday">Monday</option>
                                <option value="Tuesday">Tuesday</option>
                                <option value="Wednesday">Wednesday</option>
                                <option value="Thursday">Thursday</option>
                                <option value="Friday">Friday</option>
                                <option value="Saturday">Saturday</option>
                            </select>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Start Time</label>
                                    <input type="time" class="form-control" name="time">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">End Time</label>
                                    <input type="time" class="form-control" name="end_time">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Notes</label>
                            <textarea name="notes" id="" class="form-control" rows="4"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Date</label>
                            <input type="date" name="date_of_book" class="form-control">
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
