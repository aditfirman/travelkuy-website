<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top shadow-sm">
    <div class="container">
    <a class="navbar-brand" href="{{route('home')}}"><img src="{{url('frontend/images/logo.svg')}}" alt=""></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto mr-0">
                <li class="nav-item">
                    <a class="nav-link active mr-4" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mr-4" href="{{route('home')}}#exclusivepackage">Paket Travel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mr-4" href="{{route('home')}}#testimoni">Testimoni</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mr-4" href="{{route('about')}}">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mr-4" href="{{route('faq')}}">FAQ</a>
                </li>
            </ul>
            @guest
            <form class="form-inline d-sm-block d-md-none">
            <button class="btn btn-login my-2 my-sm-0" type="button" onclick="event.preventDefault(); location.href='{{url('login')}}'">
                    Login
                </button>
            </form>
            <!-- Desktop Button -->
            <form class="form-inline my-2 my-lg-0 d-none d-md-block">
                <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="button" onclick="event.preventDefault(); location.href='{{url('login')}}'">
                    Login
                </button>
            </form>
            @endguest

            @auth
                <form class="form-inline d-sm-block d-md-none" action="{{url('logout')}}" method="POST">
                    @csrf
                    <button class="btn btn-login my-2 my-sm-0" type="submit">
                      Logout  
                    </button>
                </form>
                <!-- Desktop Button -->
                <form class="form-inline my-2 my-lg-0 d-none d-md-block" action="{{url('logout')}}" method="POST">
                @csrf
                    <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="submit">
                        Logout
                    </button>
                </form>
            @endauth
        </div>
    </div>
</nav>
<!-- akhir navbar -->