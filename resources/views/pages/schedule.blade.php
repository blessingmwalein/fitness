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
        <div class="row">
            <div class="table-wrap col-lg-12">
                <table class="schdule-table table table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th class="head" scope="col">Course name</th>
                            <th class="head" scope="col">mon</th>
                            <th class="head" scope="col">tue</th>
                            <th class="head" scope="col">wed</th>
                            <th class="head" scope="col">thu</th>
                            <th class="head" scope="col">fri</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th class="name" scope="row">Fitness Aero</th>
                            <td>10.00 <br> 02.00</td>
                            <td>10.00 <br> 02.00</td>
                            <td>10.00 <br> 02.00</td>
                            <td>10.00 <br> 02.00</td>
                            <td>10.00 <br> 02.00</td>
                        </tr>
                        <tr>
                            <th class="name" scope="row">Senior Fitness</th>
                            <td>10.00 <br> 02.00</td>
                            <td>10.00 <br> 02.00</td>
                            <td>10.00 <br> 02.00</td>
                            <td>10.00 <br> 02.00</td>
                            <td>10.00 <br> 02.00</td>
                        </tr>
                        <tr>
                            <th class="name" scope="row">Fitness Aero</th>
                            <td>10.00 <br> 02.00</td>
                            <td>10.00 <br> 02.00</td>
                            <td>10.00 <br> 02.00</td>
                            <td>10.00 <br> 02.00</td>
                            <td>10.00 <br> 02.00</td>
                        </tr>
                        <tr>
                            <th class="name" scope="row">Senior Fitness</th>
                            <td>10.00 <br> 02.00</td>
                            <td>10.00 <br> 02.00</td>
                            <td>10.00 <br> 02.00</td>
                            <td>10.00 <br> 02.00</td>
                            <td>10.00 <br> 02.00</td>
                        </tr>
                        <tr>
                            <th class="name" scope="row">Senior Fitness</th>
                            <td>10.00 <br> 02.00</td>
                            <td>10.00 <br> 02.00</td>
                            <td>10.00 <br> 02.00</td>
                            <td>10.00 <br> 02.00</td>
                            <td>10.00 <br> 02.00</td>
                        </tr>
                        <tr>
                            <th class="name" scope="row">Senior Fitness</th>
                            <td>10.00 <br> 02.00</td>
                            <td>10.00 <br> 02.00</td>
                            <td>10.00 <br> 02.00</td>
                            <td>10.00 <br> 02.00</td>
                            <td>10.00 <br> 02.00</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection
