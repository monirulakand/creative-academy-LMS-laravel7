@extends('Layout.app')
@section('title','Courses')
@section('content')
    <div class="text-center section-marginTop container-fluid">
        <h5 class="title-text mt-2"><b>Creative Academy Courses</b></h5>
        <p class="des-text"></p>
        <div class="row">
            @foreach($courses as $courses)
                <div class="col-md-3 p-1">
                    <div class="card text-center">

                            <div class="card-body">
                                <img class="item-logo" src="{{$courses->img}}"><br>
                                <h5 class="title-text mt-2">{{$courses->title}}</h5>
                                <h6 class="card-subtitle text-success mt-2">Course Fee: {{$courses->fee}}</h6>
                                <h5 class="des-text mt-2">{{$courses->des}}</h5>
                                <a href='{{url("CourseEnrollPage/".$courses->id)}}'  class="btn btn-sm btn-outline-success">Enroll Now</a>
                            </div>

                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection









