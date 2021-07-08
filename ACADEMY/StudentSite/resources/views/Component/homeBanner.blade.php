<div class="parallax">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6 top-div text-center col-sm-12">
                <div>
                    <p class="m-0 mt-5 top-title">Creative Academy</p>
                    <p class=" m-0 top-subtitle"></p>
                    @if(Cookie::has('token')==true or Session::has('token')==true)
                        <a class="btn login-btn m-2"  href="{{ url('logout') }}">LOGOUT</a>
                    @else
                        <a class="btn login-btn m-2"  href="{{ url('login') }}">LOGIN</a>
                    @endif
                </div>
            </div>

        </div>
    </div>
</div>
