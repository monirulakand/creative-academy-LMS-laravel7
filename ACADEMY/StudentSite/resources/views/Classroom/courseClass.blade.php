@extends('Classroom.app')
@section('title','Course Class')
@section('content')


    <div id="MainDiv" class="container">
        <div class="row">
            <div style="margin-top: 80px;" class="col-md-12">
                <h4 class="mb-3 text-center">Class Videos</h4>

                <table id="SelectTable" class="table table-striped table-bordered" cellspacing="" width="100%">
                    <thead>
                    <tr>
                        <th class="th-sm">topic</th>
                        <th class="th-sm">title</th>
                        <th class="th-sm">source</th>
                        <th class="th-sm">play</th>
                    </tr>
                    </thead>
                    <tbody id="MainTableData">
                                @Foreach($CourseClasses as $CourseClasses)
                                    <tr>
                                    <td>{{$CourseClasses->topic}}</td>
                                    <td>{{$CourseClasses->title}}</td>
                                    <td><a target="_blank" href="{{$CourseClasses->source}}">Source</a></td>
                                    <td><button data-id="{{$CourseClasses->video_link}}" class="btn playVimeo btn-success"><h6 class="text-white">Play</h6></button></td>
                                    </tr>
                                @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@include('Classroom.vimeoModal')

@endsection

@section('script')

    <script type="text/javascript">

// Notice data table js
$('#SelectTable').DataTable();
$('.dataTables_length').addClass('bs-select');
//

        $(document).ready(function () {

            var iframe = $('#vimeo-player')[0];
            var player = $(iframe);

            $('.vimoModal').on('hidden.bs.modal', function (e) {
                player.api('pause');
            })


            $('.playVimeo').click(function (event) {
                let id=$(this).data('id');
                $('.vimoFrame').attr('src',id);
                $('.vimoModal').modal('show');
            })


        });

    </script>

@endsection

