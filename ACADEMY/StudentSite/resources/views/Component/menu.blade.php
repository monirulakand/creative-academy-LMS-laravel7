<nav class="navbar shadow-sm  fixed-top navbar-expand-lg navbar-light bg-white">
        <a class="navbar-brand ml-4" href="{{ url('/') }}"><img class="nav-logo" src="{{ asset('images/mainlogo.png') }}"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-4 p-1">
                <li class="nav-item active">
                    <a class="nav-link nav-font" href="{{url('/') }}">HOME</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link nav-font" href="{{url('courses')}}">COURSES</a>
                </li>

                @if(Cookie::has('token')==true or Session::has('token')==true)
                    <li class="nav-item">
                        <a class="btn ml-2 normal-btn" href="{{url('classroom') }}">CLASS ROOM</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link nav-font" href="{{url('registration') }}">REGISTRATION</a>
                    </li>
                @endif


                <li class="nav-item">
                    <a class="nav-link nav-font" href="{{url('AllBlog')}}">BLOG</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link nav-font" href="{{url('AllReview')}}">REVIEW</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link nav-font" href="{{url('about')}}">ABOUT</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link nav-font" href="{{url('contact')}}">CONTACT</a>
                </li>
            </ul>
        </div>

    </nav>

