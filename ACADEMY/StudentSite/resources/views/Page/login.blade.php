@extends('Layout.app')
@section('title', 'Login')
@section('content')

        <div class="container section-marginbg">
            <div class="row ">
                <div class="container  p-lg-5">
                    <div class="row ">
                        <div class="col-md-3 text-center col-sm-12">

                        </div>
                            <div class="col-md-6 card p-5 col-sm-12">
                                <div class="card-body p-5">
                                <h5 class="title-text mt-3">STUDENT LOGIN</h5>
                                 <form action=" " class="loginForm">
                                <input id="mobile" required="" name="mobile" value="" type="text" class="form-control my-3 " placeholder="Mobile No">
                                <input id="password" required="" name="password" value="" type="password" class="form-control my-3 " placeholder="Password">
                                <button type="submit" name="submit" id="logBtn" class="btn loginBtn btn-block normal-btn">Login</button>
                                 </form>
                                <a href="" data-toggle="modal" data-target="#passResetModal"  class="nav-font">Password Reset</a>
                                <a href="" data-toggle="modal" data-target="#quickModal" class="nav-font ml-3">Forget Password</a>
                                </div>

                                <div id="snackbar"></div>
                        </div>

                        <div class="col-md-3  text-center col-sm-12">

                        </div>

            </div>
        </div>
            </div>
        </div>

    @include('Component.pass_reset')
    @include('Component.pass_recover')
@endsection


