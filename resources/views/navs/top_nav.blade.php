<header id="header" id="home">
    <div class="container">
        <div class="row header-top align-items-center">
            <div class="col-lg-4 col-sm-4 menu-top-left">
                <span>
                    We believe we helps people <br>
                    for happier lives
                </span>
            </div>
            <div class="col-lg-4 menu-top-middle justify-content-center d-flex">
                <a href="index-2.html">
                    <img src="/img/logo1.png" alt="">
                </a>
            </div>
            <div class="col-lg-4 col-sm-4 menu-top-right">
                <a class="tel" href="tel:+880 123 12 658 439">+880 123 12 658 439</a>
                <a href="tel:+880 123 12 658 439"><span class="lnr lnr-phone-handset"></span></a>
            </div>
        </div>
    </div>
    <hr>
    <div class="container">
        <div class="row align-items-center justify-content-center d-flex">
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="/">Home</a></li>

                    @guest()
                        <li><a href="/login">Login</a></li>
                        <li><a href="/register">Register</a></li>
                    @else
                        <li><a href="#offer">Progress</a></li>
                        <li><a href="#top-course">Calculators</a></li>
                        <li><a href="/schedule">Schedule</a></li>
                        <li><a href="/trainers">Personal Trainers</a></li>
                        <li><a href="/exercise">Execise & Plan</a></li>
                       <li><a href="{{ route('user.logout')}}">Logout</a></li>
                    @endguest
                </ul>
            </nav>
        </div>
    </div>
</header>
