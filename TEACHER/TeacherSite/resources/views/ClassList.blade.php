@extends('Layout.app')
@section('title','Class List')
@section('content')


    <div id="MainDiv" class="container d-none">
        <div class="row">
            <div class="col-md-12 p-5">
                <h3 class="text-center">Class List</h3>
                <button id="addNewBtnId" class="btn my-3 btn-sm btn-color">Add New</button>

                <table id="SelectTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th class="th-sm">Serial No</th>
                        <th class="th-sm">Topic</th>
                        <th class="th-sm">Title</th>
                        <th class="th-sm">Video Link</th>
                        <th class="th-sm">Course Code</th>
                        <th class="th-sm">Edit</th>
                        <th class="th-sm">Delete</th>
                    </tr>
                    </thead>
                    <tbody id="MainTableData">


                    </tbody>
                </table>
            </div>
        </div>
    </div>


    @include('Component.loader')
    @include('Component.wrong')


    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body text-center p-3">
                    <h5 class="mt-4">Do You Want To Delete?</h5>
                    <h5 id="DeleteId" class="mt-4 d-none"></h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">No</button>
                    <button id="DeleteConfirmBtn" type="button" class="btn btn-sm btn-danger">Yes</button>
                </div>
            </div>
        </div>
    </div>




    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title w-100 mx-4" id="myModalLabel">Class List Update</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body text-center p-5">
                    <h5 id="EditId" class="mt-3 mb-3 d-none"></h5>
                    <div id="EditForm" class="d-none w-100">

                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" id="ClassListSerialEditId" class="form-control mb-4" placeholder="Class Serial">
                                <input type="text" id="ClassListTopicEditId" class="form-control mb-4" placeholder="Class Topic">
                                <input type="text" id="ClassListTitleEditId" class="form-control mb-4" placeholder="Class Title">
                            </div>
                            <div class="col-md-6">
                                <input type="text" id="ClassListSourceEditId" class="form-control mb-4" placeholder="Class Source">
                                <input type="text" id="ClassListVideoEditId" class="form-control mb-4" placeholder="Class Video">
                                <input type="text" id="ClassCodeEditId" class="form-control mb-4" placeholder="Course Code">
                            </div>
                        </div>
                    </div>

                    @include('Component.editSectionLoader')
                    @include('Component.editSectionWrong')

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Cancel</button>
                    <button id="editConfirmBtn" type="button" class="btn btn-sm btn-danger">Save</button>
                </div>
            </div>
        </div>
    </div>



    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body p-5 text-center">
                    <div id="AddForm" class=" w-100">
                        <h5 class="mb-4">Add Class List</h5>

                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" id="ClassListSerialAddId" class="form-control mb-4" placeholder="Class Serial">
                                <input type="text" id="ClassListTopicAddId" class="form-control mb-4" placeholder="Class Topic">
                                <input type="text" id="ClassListTitleAddId" class="form-control mb-4" placeholder="Class Title">
                            </div>
                            <div class="col-md-6">
                                <input type="text" id="ClassListSourceAddId" class="form-control mb-4" placeholder="Class Source">
                                <input type="text" id="ClassListVideoAddId" class="form-control mb-4" placeholder="Class Video">
                                <input type="text" id="ClassCodeAddId" class="form-control mb-4" placeholder="Course Code">
                            </div>
                        </div>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Cancel</button>
                    <button  id="AddConfirmBtn" type="button" class="btn  btn-sm  btn-danger">Save</button>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('script')
    <script type="text/javascript">

        getClassListData();

        function getClassListData(){
            axios.get('/getClassListData')
                .then(function (response){

                    if(response.status==200){

                        $('#MainDiv').removeClass('d-none');
                        $('#loaderDiv').addClass('d-none');

                        $('#SelectTable').DataTable().destroy();
                        $('#MainTableData').empty();

                        let jsonData=response.data;
                        $.each(jsonData, function (i, item){

                            $('<tr>').html(
                                "<td>" + jsonData[i].serial_no + "</td>" +
                                "<td>" + jsonData[i].topic +"</td>" +
                                "<td>" + jsonData[i].title + "</td>" +
                                "<td>" + jsonData[i].video_link +"</td>" +
                                "<td>" + jsonData[i].code +"</td>" +
                                "<td><a class='EditBtn' data-id=" + jsonData[i].id + " ><i class='fas fa-edit btn-outline-success edit-btn-color'></i></a></td>" +
                                "<td><a class='DeleteBtn' data-id=" + jsonData[i].id + " ><i class='fas fa-trash-alt btn-outline-danger delete-btn-color'></i></a></td>"
                            ).appendTo('#MainTableData');
                        });

                        // Class List Table Delete Icon Click
                        $('.DeleteBtn').click(function (){
                            let id=$(this).data('id');
                            $('#DeleteId').html(id);
                            $('#deleteModal').modal('show');
                        });


                        // Class List Table Edit Icon Click
                        $('.EditBtn').click(function (){
                            let id=$(this).data('id');
                            $('#EditId').html(id);
                            ClassListEdit(id);
                            $('#editModal').modal('show');
                        });



                        // Class List data table js
                        $('#SelectTable').DataTable();
                        $('.dataTables_length').addClass('bs-select');
                        //
                    }
                    else{
                        $('#loaderDiv').addClass('d-none');
                        $('#wrongDiv').removeClass('d-none');
                    }

                })
                .catch(function (error){
                    $('#loaderDiv').addClass('d-none');
                    $('#wrongDiv').removeClass('d-none');
                })
        }

        // Class List Delete Confirm Btn
        $('#DeleteConfirmBtn').click(function (){
            let id=$('#DeleteId').html();
            ClassListDelete(id);
        });

        // Class List Delete Method
        function ClassListDelete(DeleteId){

            $('#DeleteConfirmBtn').html("<div class='spinner-border spinner-border-sm' role='status'></div>") //Animation.......

            axios.post('/ClassListDelete',{
                id:DeleteId
            })
                .then(function (response){
                    $('#DeleteConfirmBtn').html("Yes");

                    if (response.status==200 && response.data==1){
                        $('#deleteModal').modal('hide');
                        toastr.success('Delete Success');
                        getClassListData();
                    }
                    else{
                        $('#deleteModal').modal('hide');
                        toastr.error('Delete Fail');
                    }
                })
                .catch(function (error){
                    $('#deleteModal').modal('hide');
                    toastr.error('Delete Fail');
                })
        }





        // Each Class List Edit Details
        function  ClassListEdit(EditId){
            axios.post('/getClassListDetails',{
                id:EditId
            })
                .then(function (response){
                    if (response.status==200){
                        $('#EditForm').removeClass('d-none');
                        $('#EditLoader').addClass('d-none');

                        let id= $('#EditId').html();

                        let jsonData=response.data;
                        $('#ClassListSerialEditId').val(jsonData[0].serial_no);
                        $('#ClassListTopicEditId').val(jsonData[0].topic);
                        $('#ClassListTitleEditId').val(jsonData[0].title);
                        $('#ClassListSourceEditId').val(jsonData[0].source);
                        $('#ClassListVideoEditId').val(jsonData[0].video_link);
                        $('#ClassCodeEditId').val(jsonData[0].code);
                    }
                    else{
                        $('#EditLoader').addClass('d-none');
                        $('#EditWrong').removeClass('d-none');
                    }

                })
                .catch(function (error){
                    $('#EditLoader').addClass('d-none');
                    $('#EditWrong').removeClass('d-none');
                })
        }

        //
        $('#editConfirmBtn').click(function (){
            let id= $('#EditId').html();
            let serial_no=$('#ClassListSerialEditId').val();
            let topic=$('#ClassListTopicEditId').val();
            let title=$('#ClassListTitleEditId').val();
            let source=$('#ClassListSourceEditId').val();
            let video_link=$('#ClassListVideoEditId').val();
            let code=$('#ClassCodeEditId').val();

            ClassListUpdate(id,serial_no,topic,title,source,video_link,code);
        })

        //Class List Update Method
        function ClassListUpdate(id,serial_no,topic,title,source,video_link,code){

            if (serial_no.length==0){
                toastr.error('Serial No is Required !');
            }
            else if (topic.length==0){
                toastr.error('Class Topic is Required !');
            }
            else if (title.length==0){
                toastr.error('Class List Title is Required !');
            }
            else if (source.length==0){
                toastr.error('CLass Source is Required !');
            }
            else if (video_link.length==0){
                toastr.error('Video Link is Required !');
            }
            else if (code.length==0){
                toastr.error('Course Code is Required !');
            }
            else{

                $('#editConfirmBtn').html("<div class='spinner-border spinner-border-sm' role='status'></div>"); //Animation.......

                axios.post('/ClassListUpdate',{
                    id:id,
                    serial_no:serial_no,
                    topic:topic,
                    title:title,
                    source:source,
                    video_link:video_link,
                    code:code,
                })
                    .then(function (response){
                        $('#editConfirmBtn').html("Save");

                        if (response.status==200 && response.data==1){
                            $('#editModal').modal('hide');
                            toastr.success('Update Success');
                            getClassListData();
                        }
                        else{
                            $('#editModal').modal('hide');
                            toastr.error('Update Fail !');
                        }
                    })
                    .catch(function (error){
                        $('#editModal').modal('hide');
                        toastr.error('Something Went Wrong !');
                    })
            }

        }



        // Class List New btn Click
        $('#addNewBtnId').click(function(){
            $('#addModal').modal('show');
        });

        // Class List Modal Save Btn
        $('#AddConfirmBtn').click(function() {

            let serial_no=$('#ClassListSerialAddId').val();
            let topic=$('#ClassListTopicAddId').val();
            let title=$('#ClassListTitleAddId').val();
            let source=$('#ClassListSourceAddId').val();
            let video_link=$('#ClassListVideoAddId').val();
            let code=$('#ClassCodeAddId').val();

            ClassListAdd(serial_no,topic,title,source,video_link,code);
        })
        // Class List Add Method
        function ClassListAdd(serial_no,topic,title,source,video_link,code) {

            if (serial_no.length==0){
                toastr.error('Serial No is Required !');
            }
            else if (topic.length==0){
                toastr.error('Class Topic is Required !');
            }
            else if (title.length==0){
                toastr.error('Class List Title is Required !');
            }
            else if (source.length==0){
                toastr.error('CLass Source is Required !');
            }
            else if (video_link.length==0){
                toastr.error('Video Link is Required !');
            }
            else if (code.length==0){
                toastr.error('Course Code is Required !');
            }
            else{

                $('#AddConfirmBtn').html("<div class='spinner-border spinner-border-sm' role='status'></div>") //Animation....

                axios.post('/ClassListAdd', {
                    serial_no:serial_no,
                    topic:topic,
                    title:title,
                    source:source,
                    video_link:video_link,
                    code:code,
                })
                    .then(function(response) {
                        $('#AddConfirmBtn').html("Save");
                        if(response.status==200){
                            if (response.data == 1) {
                                $('#addModal').modal('hide');
                                toastr.success('Add Success');
                                getClassListData();

                                $('#ClassListSerialAddId').val('');
                                $('#ClassListTopicAddId').val('');
                                $('#ClassListTitleAddId').val('');
                                $('#ClassListSourceAddId').val('');
                                $('#ClassListVideoAddId').val('');
                                $('#ClassCodeAddId').val('');

                            } else {
                                $('#addModal').modal('hide');
                                toastr.error('Add Fail');
                                getClassListData();
                            }
                        }
                        else{
                            $('#addModal').modal('hide');
                            toastr.error('Something Went Wrong !');
                        }
                    })
                    .catch(function(error) {
                        $('#addModal').modal('hide');
                        toastr.error('Something Went Wrong !');
                    });
            }

        }

    </script>
@endsection


