@extends('Classroom.app')
@section('title','Files')
@section('content')
<div class="container section-marginmd">
    <div class="row">
        <div class="col-md-12 p-2 mainDiv d-none">
            <div class="app-card">
                <div class="col-md-12 mt-2 ">
                    <div class="table-responsive">
                        <table class="myTable table des-text table-bordered ">
                            <thead>
                            <tr>
                                <th>File Name</th>
                                <th>Download</th>
                            </tr>

                            </thead>
                            <tbody class="tableBody">

                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 loaderDiv">
            <div class="center-screen mt-5">
                <div class="loader"></div>
            </div>
        </div>

        <div class="col-md-12 d-none wrongDiv">
            <div class="center-screen mt-5">
                <h5 class="classroom-count-value">TRY AGAIN</h5>
            </div>
        </div>

    </div>

</div>
@endsection
@section('script')

 <script type="text/javascript">
     $(document).ready(function () {
     getFileList();
     function getFileList() {
         axios.post('/fileList')
             .then(function(response) {
                 $('.loaderDiv').addClass('d-none')
                 $('.wrongDiv').addClass('d-none')
                 $('.mainDiv').removeClass('d-none')
                 if(response.status==200){
                     var jsonData=response.data;
                     $('.myTable').DataTable().destroy();
                     $('.tableBody').empty();
                     $.each(jsonData, function(i, item) {
                         $('<tr>').html(
                             "<td>" + jsonData[i].title+"</td>" +
                             "<td><a href='"+jsonData[i].doc_url+"'><i class='fas fa-download'></i></a></td>"
                         ).appendTo('.tableBody');
                     });
                     $('.myTable').DataTable({"order":false});
                 }
                 else{
                     $('.loaderDiv').addClass('d-none')
                     $('.wrongDiv').removeClass('d-none')
                     $('.mainDiv').addClass('d-none')
                 }
             })
             .catch(function(error) {
                 $('.loaderDiv').addClass('d-none')
                 $('.wrongDiv').removeClass('d-none')
                 $('.mainDiv').addClass('d-none')
             });
     }
     });
 </script>

@endsection
