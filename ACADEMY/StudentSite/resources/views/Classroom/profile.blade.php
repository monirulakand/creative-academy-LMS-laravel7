@extends('Classroom.app')
@section('title','Profile')
@section('content')
    @include('Classroom.pass_reset')

    <div class="container">
        <div class="row">
            <div class="col-md-8 p-2 mainDiv mt-3 d-none">
                <div class="app-card mt-5">
                    <div class="col-md-12 msgCard mt-3 ">
                        <h3 class="title-text mt-1 ">Account Details</h3>
                        <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <td><b>Name: </b></td>
                                <td class="Name"></td>
                            </tr>
                            <tr>
                                <td><b>Email:</b> </td>
                                <td class="Email"></td>
                            </tr>
                            <tr>
                                <td><b>Phone:</b> </td>
                                <td class="Phone"></td>
                            </tr>
                            <tr>
                                <td><b>Status</b></td>
                                <td class="Status"></td>
                            </tr>
                        </table>
                        </div>
                        <button  class="btn ChangePass normal-btn">Change Password </button>
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
        let loader="<span class='spinner-grow text-white spinner-grow-sm' role='status' aria-hidden='true'></span>";
        getProfileDetail();
        $( '.ChangePass').click(function () {
            $('#mobileReset').val($('.Phone').html())
            $('.passResetModalClassRoom').modal('show');
        })
        $( '.passResetClassRoom' ).on( 'submit', function( event ) {
            event.preventDefault();
            let formData= $(this).serializeArray();
            let mobile= formData[0]['value'];
            let oldPass= formData[1]['value'];
            let newPass= formData[2]['value'];
            if(mobile.length!=11){
                ResetToast('Please Enter 11 Digit Mobile Number');
            }
            else{
                $( ".resetBtnClassRoom" ).html(loader+ " Resetting..")
                var URL="/passReset";
                axios.post(URL,
                    {
                        mobile:mobile,
                        oldPass:oldPass,
                        newPass:newPass
                    })
                    .then(function (response) {
                        if(response.status!==200 || response.data==0){
                            $( ".resetBtnClassRoom" ).html("Reset")
                            ResetToast("Resetting Fail");
                        }
                        else if(response.data=="AccountNotExist"){
                            $( ".resetBtnClassRoom" ).html("Reset")
                            ResetToast("Account Not Exists");
                        }
                        else if(response.status==200  && response.data==1){
                            $( ".resetBtnClassRoom" ).html("Reset")
                            ResetToast("Reset Successful, Logout Execute After 5 Second");
                            $( ".resetBtnClassRoom" ).html("Reset")
                            setTimeout(function () {
                                window.location.href = "/logout";
                            },5000)
                        }
                    })
                    .catch(function (error) {
                        $( ".resetBtnClassRoom" ).html("Reset")
                        ResetToast("Reset fail");
                    })
            }
        });
        function ResetToast(msg) {
            document.getElementById("snackbarReset").innerHTML=msg;
            var x = document.getElementById("snackbarReset");
            x.className = "show";
            setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
        }
        function getProfileDetail() {
            axios.post('/profileDetail')
                .then(function(response) {
                    $('.loaderDiv').addClass('d-none')
                    $('.wrongDiv').addClass('d-none')
                    $('.mainDiv').removeClass('d-none')
                    if(response.status==200){
                        var jsonData=response.data;
                        $('.Name').html(jsonData[0]['name'])
                        $('.Email').html(jsonData[0]['email'])
                        $('.Phone').html(jsonData[0]['phn'])
                        $('.Status').html(jsonData[0]['status'])
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


