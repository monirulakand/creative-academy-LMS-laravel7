@extends('Layout.app')
@section('title', 'Registration')
@section('content')
    <div class="container section-marginbg">
        <div class="row ">
            <div class="container">
                <div class="row justify-content-center">

                    <div class="col-md-6 card p-5 col-sm-6">
                        <div class="card-body p-5">
                            <h5 class="title-text my-3">REGISTRATION FOR STUDENT</h5>
                            <form action="" class="regForm">
                            <div class="form-group">
                                <input required="" name="name" type="text" class="form-control" placeholder="Your Name">
                            </div>
                            <div class="form-group">
                                <input  required="" name="email" type="email" class="form-control" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <input required=""  name="mobile" type="text" class="form-control" placeholder="Mobile No">
                            </div>
                            <div class="form-group">
                                <input required="" name="password" type="password" class="form-control" placeholder="Password">
                            </div>
                                <button name="submit" type="submit" value="Submit" class="btn regBtn btn-block normal-btn">Submit</button>
                            </form>

                        </div>

                        <div id="snackbar"></div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
