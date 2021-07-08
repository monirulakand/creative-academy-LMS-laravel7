@extends('Layout.app')
@section('title','Blog Details Page')
@section('content')

    <div class="container section-marginTop text-center">
        <div class="row text-center">

            @foreach($blogDetails as $blogDetails)
                <div class="col-md-2">
                </div>
                <div class="col-md-8  p-2 mb-5">
                    <div class="card text-center">
                        <div class="p-4">
                            <h5 class="blog-card-title text-justify  mt-2">{{$blogDetails->title}}</h5>
                            <h6 class="blog-card-subtitle text-justify p-0 ">{{$blogDetails->des}}</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                </div>
            @endforeach

        </div>
    </div>


@endsection



