@extends('app')
@section('content')
    @include('components.banner')
    <section class="offer-area section-gap" id="offer">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h1 class=" mb-10">Login</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <form class="col-md-6 " method="POST" action="{{route('user.login')}}">
                    @csrf
                    @if(session()->has('message'))
                        <div class="alert alert-danger" role="alert">
                             {{session()->get('message')}}
                        </div>
                    @endif
                    <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter email">
                    @if ($errors->has('email'))
                    <small id="emailHelp" style="color: red" class="form-text text-muted">{{$errors->first('email')}}</small>
                    @endif
                    </div>
                    <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    @if ($errors->has('password'))
                     <small id="emailHelp" style="color: red" class="form-text text-muted">{{$errors->first('password')}}</small>
                    @endif
                    </div>
                    <div class="form-group" style="margin-top: 10px">
                        <button type="submit" class="genric-btn primary radius">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
