@extends('Layout.app')
@section('title','Contact')
@section('content')

    <div class="container-fluid text-center ContactPage-Margin-Top mb-5">
        <div class="row">
            <div class="col-md-6 ml-lg-3">

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.2614628474707!2d90.35591111452472!3d23.773701984577965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0a2db4ab937%3A0x859d0196ae53ac2!2s5%20Adabor%20Main%20Rd%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1606112035887!5m2!1sen!2sbd" width="500" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

            </div>
            <div class="col-md-4 ml-5 mt-3 contactPage-form">
                <h5 class="service-card-title">PLEASE CONTACT</h5>
                <div class="form-group">
                    <input id="contactNameId" type="text" class="form-control w-100" placeholder="Enter Your Name">
                </div>
                <div class="form-group">
                    <input id="contactEmailId" type="text" class="form-control  w-100" placeholder="Enter Your Email">
                </div>
                <div class="form-group">
                    <input id="contactPhoneId" type="text" class="form-control  w-100" placeholder="Enter Your Phone No">
                </div>
                <div class="form-group">
                    <textarea class="form-control" id="contactMsgId" rows="3" placeholder="Enter Your Massage"></textarea>
                </div>
                <button id="contactSendBtnId" type="submit" class="btn btn-block normal-btn w-100">SEND</button>
            </div>
        </div>
    </div>


@endsection

@section('script')
    <script type="text/javascript">



        // Contact JS-----------------------

        $('#contactSendBtnId').click(function (){
            let name=$('#contactNameId').val();
            let email=$('#contactEmailId').val();
            let phone=$('#contactPhoneId').val();
            let massage=$('#contactMsgId').val();

            ContactSend(name,email,phone,massage);
        });

        function ContactSend(name,email,phone,massage){

            if (name.length==0){
                $('#contactSendBtnId').html('please enter your name !');
                setTimeout(function () {
                    $('#contactSendBtnId').html('Send Again');
                },2000)
            }

            else if (email.length==0){
                $('#contactSendBtnId').html('please enter your email !');
                setTimeout(function () {
                    $('#contactSendBtnId').html('Send Again');
                },2000)
            }

            else if (phone.length==0){
                $('#contactSendBtnId').html('please enter your phone !');
                setTimeout(function () {
                    $('#contactSendBtnId').html('Send Again');
                },2000)
            }

            else if (massage.length==0){
                $('#contactSendBtnId').html('please enter your massage !');
                setTimeout(function () {
                    $('#contactSendBtnId').html('Send Again');
                },2000)
            }

            else{

                axios.post('/ContactSend',{
                    name:name,
                    email:email,
                    phone:phone,
                    massage:massage,
                })
                    .then(function (response){
                        if (response.status===200 && response.data===1){
                            $('#contactSendBtnId').html('Request Successful');
                            setTimeout(function () {
                                $('#contactSendBtnId').html('Contact Send');
                            },3000)

                            $('#contactNameId').val('');
                            $('#contactEmailId').val('');
                            $('#contactPhoneId').val('');
                            $('#contactMsgId').val('');
                        }

                        else{
                            $('#contactSendBtnId').html('Request Fail ! Try Again');
                            setTimeout(function () {
                                $('#contactSendBtnId').html('Send');
                            },3000)
                        }
                    })

                    .catch(function (error){
                        $('#contactSendBtnId').html('Try Again');
                        setTimeout(function () {
                            $('#contactSendBtnId').html('Send');
                        },3000)
                    })

            }

        }




    </script>
@endsection

