@extends('Classroom.app')
@section('title','Review')
@section('content')
    

            <div class="col-md-12 p-5">
            <button id="addNewBtnId" class="btn mt-5 btn-sm btn-success">Add Review </button>
            </div>

<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body p-5 text-center">


          <div id="AddForm" class=" w-100">
          <h6 class="mb-4">Add New</h6>
                <input type="text" id="ReviewNameAddID" class="form-control mb-4" placeholder="Review Name">
                <input type="text" id="ReviewDesAddID" class="form-control mb-4" placeholder="Review Description">
                <input type="file" id="ReviewImageAddID" class="form-control mb-4" placeholder="Review Image">
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

// Service Add New btn Click
$('#addNewBtnId').click(function(){
    $('#addModal').modal('show');
});

 // Services Add Modal Save Btn
 $('#AddConfirmBtn').click(function() {
     let name = $('#ReviewNameAddID').val();
     let des = $('#ReviewDesAddID').val();
     let image = $('#ReviewImageAddID').prop('files')[0];

    if (image.length==0){
        toastr.error('Review Image is Required !');
    }
    else if (name.length==0){
        toastr.error('Review Name is Required !');
    }
    else if (des.length==0){
        toastr.error('Review Description is Required !');
    }
     else{
         let formData=new FormData();
         formData.append('name',name);
         formData.append('des',des);
         formData.append('image',image);

     $('#AddConfirmBtn').html("<div class='spinner-border spinner-border-sm' role='status'></div>"); //Animation....
     axios.post('/ReviewAdd',formData)
         .then(function(response) {
             $('#AddConfirmBtn').html("Save");
             if(response.status==200){
               if (response.data == 1) {
                 $('#addModal').modal('hide');
                
                   $('#ReviewNameAddID').val('');
                   $('#ReviewDesAddID').val('');
                   $('#ReviewImageAddID').val('');

             } else {
                 $('#addModal').modal('hide');
          
             }
          }
          else{
              $('#addModal').modal('hide');
             
          }
     })
     .catch(function(error) {
              $('#addModal').modal('hide');
              
    });
  }

 })
    </script>
@endsection

