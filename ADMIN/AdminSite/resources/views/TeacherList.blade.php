@extends('Layout.app')
@section('title','Teacher')
@section('content')

    <div id="MainDiv" class="container d-none">
        <div class="row">
            <div class="col-md-12 p-5">
                <h3 class="text-center">All Teacher List</h3>
                <button id="addNewBtnId" class="btn my-3 btn-sm btn-color">Add New</button>

                <table id="SelectTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th class="th-sm">Teacher Name</th>
                        <th class="th-sm">Teacher Specialist</th>
                        <th class="th-sm">Teacher Email</th>
                        <th class="th-sm">Teacher Phone</th>
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
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title w-100 mx-4" id="myModalLabel">Teacher Update Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body text-center p-5">
                    <h5 id="EditId" class="mt-3 mb-3 d-none"></h5>
                    <div id="EditForm" class="d-none w-100">

                        <div class="row">

                            <input type="text" id="TeacherNameEditId" class="form-control mb-4" placeholder="Teacher Name">
                            <input type="text" id="TeacherDetailsEditId" class="form-control mb-4" placeholder="Teacher Specialist">
                            <input type="text" id="TeacherEmailEditId" class="form-control mb-4" placeholder="Teacher Email">
                            <input type="text" id="TeacherPhoneEditId" class="form-control mb-4" placeholder="Teacher Phone">

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
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-body p-5 text-center">
                    <div id="AddForm" class=" w-100">
                        <h5 class="mb-4">Add Teacher</h5>

                        <div class="row">

                            <input type="text" id="TeacherNameAddId" class="form-control mb-4" placeholder="Teacher Name">
                            <input type="text" id="TeacherDetailsAddId" class="form-control mb-4" placeholder="Teacher Specialist">
                            <input type="email" id="TeacherEmailAddId" class="form-control mb-4" placeholder="Teacher Email">
                            <input type="text" id="TeacherPhoneAddId" class="form-control mb-4" placeholder="Teacher Phone">
                            <input type="password" id="TeacherPasswordAddId" class="form-control mb-4" placeholder="Teacher Password">

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

        getTeacherData();

        function getTeacherData(){
            axios.get('/getTeacherData')
                .then(function (response){

                    if(response.status==200){

                        $('#MainDiv').removeClass('d-none');
                        $('#loaderDiv').addClass('d-none');

                        $('#SelectTable').DataTable().destroy();
                        $('#MainTableData').empty();

                        let jsonData=response.data;
                        $.each(jsonData, function (i, item){

                            $('<tr>').html(
                                "<td>" + jsonData[i].Teacher_Name + "</td>" +
                                "<td>" + jsonData[i].Teacher_Details +"</td>" +
                                "<td>" + jsonData[i].Teacher_Email +"</td>" +
                                "<td>" + jsonData[i].Teacher_Phone +"</td>" +
                                "<td><a class='EditBtn' data-id=" + jsonData[i].Teacher_Id + " ><i class='fas fa-edit edit-btn-color'></i></a></td>" +
                                "<td><a class='DeleteBtn' data-id=" + jsonData[i].Teacher_Id + " ><i class='fas fa-trash-alt delete-btn-color'></i></a></td>"
                            ).appendTo('#MainTableData');
                        });

                        // Course Table Delete Icon Click
                        $('.DeleteBtn').click(function (){
                            let Teacher_Id=$(this).data('id');
                            $('#DeleteId').html(Teacher_Id);
                            $('#deleteModal').modal('show');
                        });


                        // Course Table Edit Icon Click
                        $('.EditBtn').click(function (){
                            let Teacher_Id=$(this).data('id');
                            $('#EditId').html(Teacher_Id);
                            TeacherEdit(Teacher_Id);
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
            let Teacher_Id=$('#DeleteId').html();
            TeacherDelete(Teacher_Id);
        });

        // Course Delete Method
        function TeacherDelete(Teacher_Id){

            $('#DeleteConfirmBtn').html("<div class='spinner-border spinner-border-sm' role='status'></div>") //Animation.......

            axios.post('/TeacherDelete',{
                Teacher_Id:Teacher_Id
            })
                .then(function (response){
                    $('#DeleteConfirmBtn').html("Yes");

                    if (response.status==200 && response.data==1){
                        $('#deleteModal').modal('hide');
                        toastr.success('Delete Success');
                        getTeacherData();
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
        function TeacherEdit(Teacher_Id){
            axios.post('/getTeacherDetails',{
                Teacher_Id:Teacher_Id
            })
                .then(function (response){
                    if (response.status==200){
                        $('#EditForm').removeClass('d-none');
                        $('#EditLoader').addClass('d-none');

                        let Teacher_Id= $('#EditId').html();

                        let jsonData=response.data;

                        $('#TeacherNameEditId').val(jsonData[0].Teacher_Name);
                        $('#TeacherDetailsEditId').val(jsonData[0].Teacher_Details);
                        $('#TeacherEmailEditId').val(jsonData[0].Teacher_Email);
                        $('#TeacherPhoneEditId').val(jsonData[0].Teacher_Phone);

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

            let Teacher_Id= $('#EditId').html();
            let Teacher_Name=$('#TeacherNameEditId').val();
            let Teacher_Details=$('#TeacherDetailsEditId').val();
            let Teacher_Email=$('#TeacherEmailEditId').val();
            let Teacher_Phone=$('#TeacherPhoneEditId').val();

            TeacherUpdate(Teacher_Id,Teacher_Name,Teacher_Details,Teacher_Email,Teacher_Phone);
        })

        //Course Update Method
        function TeacherUpdate(Teacher_Id,Teacher_Name,Teacher_Details,Teacher_Email,Teacher_Phone){

            if (Teacher_Name.length==0){
                toastr.error('Teacher Name is Required !');
            }
            else if (Teacher_Details.length==0){
                toastr.error('Teacher Specialist is Required !');
            }
            else if (Teacher_Email.length==0){
                toastr.error('Teacher Email is Required !');
            }
            else if (Teacher_Phone.length==0){
                toastr.error('Teacher Phone is Required !');
            }
            else{

                $('#editConfirmBtn').html("<div class='spinner-border spinner-border-sm' role='status'></div>"); //Animation.......

                axios.post('/TeacherUpdate',{
                    Teacher_Id:Teacher_Id,
                    Teacher_Name:Teacher_Name,
                    Teacher_Details:Teacher_Details,
                    Teacher_Email:Teacher_Email,
                    Teacher_Phone:Teacher_Phone
                })
                    .then(function (response){
                        $('#editConfirmBtn').html("Save");

                        if (response.status==200 && response.data==1){
                            $('#editModal').modal('hide');
                            toastr.success('Update Success');
                            getTeacherData();
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



        // Teacher Add New btn Click
        $('#addNewBtnId').click(function(){
            $('#addModal').modal('show');
        });

        // Teacher Add Modal Save Btn
        $('#AddConfirmBtn').click(function() {
            let Teacher_Name = $('#TeacherNameAddId').val();
            let Teacher_Details = $('#TeacherDetailsAddId').val();
            let Teacher_Email  = $('#TeacherEmailAddId').val();
            let Teacher_Phone = $('#TeacherPhoneAddId').val();
            let password = $('#TeacherPasswordAddId').val();

            TeacherAdd(Teacher_Name,Teacher_Details,Teacher_Email,Teacher_Phone,password);
        })

        // Teacher Add Method
        function TeacherAdd(Teacher_Name,Teacher_Details,Teacher_Email,Teacher_Phone,password) {
            let EmailRegx=/\S+@\S+\.\S+/;
            if (Teacher_Name.length==0){
                toastr.error('Teacher Name is Required !');
            }
            else if (Teacher_Details.length==0){
                toastr.error('Teacher Specialist is Required !');
            }
            else if (Teacher_Email.length==0){
                toastr.error('Teacher Email is Required !');
            }
            else if(!EmailRegx.test(Teacher_Email)){
                toastr.error("Email Invalid");
            }
            else if (Teacher_Phone.length==0){
                toastr.error('Teacher Phone is Required !');
            }
            else{
                $('#AddConfirmBtn').html("<div class='spinner-border spinner-border-sm' role='status'></div>"); //Animation....
                axios.post('/TeacherAdd', {
                    Teacher_Name:Teacher_Name,
                    Teacher_Details:Teacher_Details,
                    Teacher_Email:Teacher_Email,
                    Teacher_Phone:Teacher_Phone,
                    password:password
                })
                    .then(function(response) {
                        $('#AddConfirmBtn').html("Save");
                        if(response.status==200 && response.data == 1){
                            $('#addModal').modal('hide');
                            toastr.success('Add Success');
                            getTeacherData();

                            $('#TeacherNameAddId').val('');
                            $('#TeacherDetailsAddId').val('');
                            $('#TeacherEmailAddId').val('');
                            $('#TeacherPhoneAddId').val('');
                            $('#TeacherPasswordAddId').val('');
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

