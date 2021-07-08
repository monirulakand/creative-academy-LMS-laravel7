@extends('Layout.app')
@section('title','Course')
@section('content')


    <div id="MainDiv" class="container d-none">
        <div class="row">
            <div class="col-md-12 p-5">
                <h3 class="text-center">Course List</h3>
                <button id="addNewBtnId" class="btn my-3 btn-sm btn-color">Add New</button>

                <table id="SelectTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th class="th-sm">Course Title</th>
                        <th class="th-sm">Course Code</th>
                        <th class="th-sm">Course Fee</th>
                        <th class="th-sm">Total Class</th>
                        <th class="th-sm">Total Student</th>
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
                    <h5 class="modal-title w-100 mx-4" id="myModalLabel">Course Update</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body text-center p-5">
                    <h5 id="EditId" class="mt-3 mb-3 d-none"></h5>
                    <div id="EditForm" class="d-none w-100">

                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" id="CourseTitleEditId" class="form-control mb-4" placeholder="Course Title">
                                <textarea type="text"class="form-control mb-4" id="CourseDesEditId" placeholder="Course Description" rows="3"></textarea>
                                <input type="text" id="CourseCodeEditId" class="form-control mb-4" placeholder="Course Code">
                            </div>
                            <div class="col-md-6">
                                <input type="text" id="CourseFeeEditId" class="form-control mb-4" placeholder="Course Fee">
                                <input type="text" id="CourseTotalClassEditId" class="form-control mb-4" placeholder="Course Total Class">
                                <input type="text" id="CourseTotalStudentEditId" class="form-control mb-4" placeholder="Course Total Student">
                                <input type="text" id="CourseImageEditId" class="form-control mb-4" placeholder="Course Image">
                            </div>
                        </div>
                    </div>

                    @include('Component.editSectionLoader')
                    @include('Component.editSectionWrong')

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Cancle</button>
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
                        <h5 class="mb-4">Add Course</h5>

                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" id="CourseTitleAddId" class="form-control mb-4" placeholder="Course Title">
                                <textarea type="text"class="form-control mb-4" id="CourseDesAddId" placeholder="Course Description" rows="3"></textarea>
                                <input type="text" id="CourseCodeAddId" class="form-control mb-4" placeholder="Course Code">
                            </div>
                            <div class="col-md-6">
                                <input type="text" id="CourseFeeAddId" class="form-control mb-4" placeholder="Course Fee">
                                <input type="text" id="CourseTotalClassAddId" class="form-control mb-4" placeholder="Course Total Class">
                                <input type="text" id="CourseTotalStudentAddId" class="form-control mb-4" placeholder="Course Total Student">
                                <input type="file" id="CourseImageAddId" class="form-control mb-4" placeholder="Course Image">
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

        getCourseData();

        function getCourseData(){
            axios.get('/getCourseData')
                .then(function (response){

                    if(response.status==200){

                        $('#MainDiv').removeClass('d-none');
                        $('#loaderDiv').addClass('d-none');

                        $('#SelectTable').DataTable().destroy();
                        $('#MainTableData').empty();

                        let jsonData=response.data;
                        $.each(jsonData, function (i, item){

                            $('<tr>').html(
                                "<td>" + jsonData[i].title + "</td>" +
                                "<td>" + jsonData[i].code +"</td>" +
                                "<td>" + jsonData[i].fee +"</td>" +
                                "<td>" + jsonData[i].totalClass +"</td>" +
                                "<td>" + jsonData[i].totalStudent +"</td>" +
                                "<td><a class='EditBtn' data-id=" + jsonData[i].id + " ><i class='fas fa-edit edit-btn-color'></i></a></td>" +
                                "<td><a class='DeleteBtn' data-id=" + jsonData[i].id + " ><i class='fas fa-trash-alt delete-btn-color'></i></a></td>"
                            ).appendTo('#MainTableData');
                        });

                        // Course Table Delete Icon Click
                        $('.DeleteBtn').click(function (){
                            let id=$(this).data('id');
                            $('#DeleteId').html(id);
                            $('#deleteModal').modal('show');
                        });


                        // Course Table Edit Icon Click
                        $('.EditBtn').click(function (){
                            let id=$(this).data('id');
                            $('#EditId').html(id);
                            CourseEdit(id);
                            $('#editModal').modal('show');
                        });



                        // Course data table js
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

        // Course Delete Confirm Btn
        $('#DeleteConfirmBtn').click(function (){
            let id=$('#DeleteId').html();
            CourseDelete(id);
        });

        // Course Delete Method
        function CourseDelete(DeleteId){

            $('#DeleteConfirmBtn').html("<div class='spinner-border spinner-border-sm' role='status'></div>") //Animation.......

            axios.post('/CourseDelete',{
                id:DeleteId
            })
                .then(function (response){
                    $('#DeleteConfirmBtn').html("Yes");

                    if (response.status==200 && response.data==1){
                        $('#deleteModal').modal('hide');
                        toastr.success('Delete Success');
                        getCourseData();
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





        // Each Course Edit Details
        function CourseEdit(EditId){
            axios.post('/getCourseDetails',{
                id:EditId
            })
                .then(function (response){
                    if (response.status==200){
                        $('#EditForm').removeClass('d-none');
                        $('#EditLoader').addClass('d-none');

                        let id= $('#EditId').html();

                        let jsonData=response.data;
                        $('#CourseTitleEditId').val(jsonData[0].title);
                        $('#CourseDesEditId').val(jsonData[0].des);
                        $('#CourseCodeEditId').val(jsonData[0].code);
                        $('#CourseFeeEditId').val(jsonData[0].fee);
                        $('#CourseTotalClassEditId').val(jsonData[0].totalClass);
                        $('#CourseTotalStudentEditId').val(jsonData[0].totalStudent);
                        $('#CourseImageEditId').val(jsonData[0].img);
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
            let title=$('#CourseTitleEditId').val();
            let des=$('#CourseDesEditId').val();
            let code=$('#CourseCodeEditId').val();
            let fee=$('#CourseFeeEditId').val();
            let totalClass=$('#CourseTotalClassEditId').val();
            let totalStudent=$('#CourseTotalStudentEditId').val();
            let img=$('#CourseImageEditId').val();

            CourseUpdate(id,title,des,code,fee,totalClass,totalStudent,img);
        })

        //Course Update Method
        function CourseUpdate(id,title,des,code,fee,totalClass,totalStudent,img){

            if (title.length==0){
                toastr.error('Course Title is Required !');
            }
            else if (des.length==0){
                toastr.error('Course Description is Required !');
            }
            else if (code.length==0){
                toastr.error('Course Code is Required !');
            }
            else if (fee.length==0){
                toastr.error('Course Fee is Required !');
            }
            else if (totalClass.length==0){
                toastr.error('Course Total Class is Required !');
            }
            else if (totalStudent.length==0){
                toastr.error('Course Total Student is Required !');
            }
            else if (img.length==0){
                toastr.error('Course Image is Required !');
            }
            else{

                $('#editConfirmBtn').html("<div class='spinner-border spinner-border-sm' role='status'></div>"); //Animation.......

                axios.post('/courseUpdate',{
                    id:id,
                    title:title,
                    des:des,
                    code:code,
                    fee:fee,
                    totalClass:totalClass,
                    totalStudent:totalStudent,
                    img:img
                })
                    .then(function (response){
                        $('#editConfirmBtn').html("Save");

                        if (response.status==200 && response.data==1){
                            $('#editModal').modal('hide');
                            toastr.success('Update Success');
                            getCourseData();
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



        // Course Add New btn Click
        $('#addNewBtnId').click(function(){
            $('#addModal').modal('show');
        });

        // Course Add Modal Save Btn
        $('#AddConfirmBtn').click(function() {
            let title = $('#CourseTitleAddId').val();
            let des = $('#CourseDesAddId').val();
            let code = $('#CourseCodeAddId').val();
            let fee = $('#CourseFeeAddId').val();
            let totalClass = $('#CourseTotalClassAddId').val();
            let totalStudent = $('#CourseTotalStudentAddId').val();
            let img = $('#CourseImageAddId').prop('files')[0];


            if (title.length==0){
                toastr.error('Course Title is Required !');
            }
            else if (des.length==0){
                toastr.error('Course Description is Required !');
            }
            else if (code.length==0){
                toastr.error('Course Code is Required !');
            }
            else if (fee.length==0){
                toastr.error('Course Fee is Required !');
            }
            else if (totalClass.length==0){
                toastr.error('Course Total Class is Required !');
            }
            else if (totalStudent.length==0){
                toastr.error('Course Total Student is Required !');
            }
            else if (img.length==0){
                toastr.error('Course Image is Required !');
            }
            else{
                let MyFormData=new FormData();
                MyFormData.append('title',title);
                MyFormData.append('des',des);
                MyFormData.append('code',code);
                MyFormData.append('fee',fee);
                MyFormData.append('totalClass',totalClass);
                MyFormData.append('totalStudent',totalStudent);
                MyFormData.append('img',img);

                $('#AddConfirmBtn').html("<div class='spinner-border spinner-border-sm' role='status'></div>"); //Animation....
                axios.post('/CourseAdd',MyFormData)
                    .then(function(response) {
                        $('#AddConfirmBtn').html("Save");
                        if(response.status==200 && response.data == 1){
                                $('#addModal').modal('hide');
                                toastr.success('Add Success');
                                getCourseData();

                                $('#CourseTitleAddId').val('');
                                $('#CourseDesAddId').val('');
                                $('#CourseCodeAddId').val('');
                                $('#CourseFeeAddId').val('');
                                $('#CourseTotalClassAddId').val('');
                                $('#CourseTotalStudentAddId').val('');
                                $('#CourseImageAddId').val('');
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
        })

    </script>
@endsection
