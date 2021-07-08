@extends('Layout.app')
@section('title','Review')
@section('content')

    <div class="container section-marginTop text-center">
        <div class="row">

            @foreach($Review as $Review)
            <div class="col-md-1">
            </div>
            <div class="col-md-10  p-0">
                <div class="card mb-3">
                    <div class="w-100 p-2">
                        <h5 style="color: #0E9A00" class="blog-card-title text-justify ml-5 mr-5  mt-2">{{$Review->name}}</h5>
                        <p class="blog-card-subtitle text-justify p-0 ml-5 mr-5">{{$Review->des}}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-1">
            </div>
            @endforeach

        </div>
    </div>


@endsection