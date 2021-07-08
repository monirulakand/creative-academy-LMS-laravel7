@extends('Layout.app')
@section('title','Blog')
@section('content')

    <div class="container section-marginTop text-center">
        <div class="row">

            @foreach($blogView as $blogView)
            <div class="col-md-4  p-2 ">
                <div class="card">
                    <div class="w-100 p-4">
                        <h5 style="color: #0E9A00" class="blog-card-title text-justify  mt-2">{{$blogView->title}}</h5>
                        <p class="blog-card-subtitle text-justify p-0 ">{{ Str::limit($blogView->des,100) }}</p>
                        <h6 class="blog-card-date text-justify "> <i class="far fa-clock"></i>{{$blogView->date}}</h6>
                        <a style="color: red" target="_blank" href='{{url("BlogDetails/".$blogView->id)}}' class="normal-btn-outline float-left mt-2 btn">Read More</a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>


@endsection


