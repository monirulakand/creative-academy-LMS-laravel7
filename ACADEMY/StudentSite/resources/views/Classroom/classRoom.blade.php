@extends('Classroom.app')
@section('title','Classroom')
@section('content')


    <div class="text-center section-marginTop container-fluid">
        <div class="row">

                @foreach($ClassRoomCourse as $ClassRoomCourse)
                    <div class="col-md-3 p-1">
                        <div class="card text-center">
                            <a target="_blank" class="nav-item my-1 des-text " href="">
                                <div class="card-body">
                                    <img class="item-logo" src="{{$ClassRoomCourse->img}}"><br>
                                    <h5 class="title-text mt-2">{{$ClassRoomCourse->title}}</h5>
                                    <h6 class="card-subtitle text-success mt-2">Course Code: {{$ClassRoomCourse->code}}</h6>
                                    <a href='{{url("courseClass/".$ClassRoomCourse->code)}}'  class="btn btn-sm btn-outline-success mt-2">Class Tutorial</a>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach

        </div>
    </div>




@endsection

@section('script')
    <script>




    </script>
@endsection
