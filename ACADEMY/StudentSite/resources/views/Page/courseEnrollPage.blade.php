@extends('Layout.app')
@section('title','CourseEnroll Page')
@section('content')

    <div class="text-center section-marginTop container-fluid">
        <h5 class="title-text mt-2"><b></b></h5>
        <p class="des-text"></p>
        <div class="row">
            @foreach($result as $result)
                <div class="col-md-5 ml-5 p-1 mb-3">
                    <div class="card text-center">
                            <div class="card-body">
                                <img class="item-logoBig" src="{{$result->img}}"><br>
                                <h5 class="title-text mt-2">{{$result->title}}</h5>
                                <h6 class="card-subtitle text-success mt-2">Course Fee: {{$result->fee}}</h6>
                                <h6 class="card-subtitle text-success mt-2">Total Class: {{$result->totalClass}} Total Student: {{$result->totalStudent}}</h6>
                                <h5 class="des-text mt-2">{{$result->des}}</h5>


                                <input id="CourseImg" type="text" value="{{$result->img}}" class="d-none form-control  w-100">
                                <input id="CourseTitle" type="text" value="{{$result->title}}" class="d-none form-control  w-100">
                                <input id="CourseCode" type="text" value="{{$result->code}}" class="d-none form-control  w-100">
                            </div>
                    </div>
                </div>

                <div class="col-md-5 ml-5 p-1 mb-3">
                    <div class="text-center">
                        <div class="col-md-10 ml-5 mt-3 contactPage-form">
                            <h5 class="service-card-title">Payment Details</h5>

                            <div class="form-group">
                                <select class="form-control" id="PaymentType">
                                    <option>Bkash</option>
                                    <option>DBBL</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input id="PaymentTrx" type="text" class="form-control  w-100" placeholder="Trx ID">
                            </div>
                            <div class="form-group">
                                <input id="PaymentMobile" type="text" class="form-control  w-100" placeholder="Payment Mobile No">
                            </div>
                            <button id="purchaseConfirmBtnId" type="submit" class="btn btn-block normal-btn w-100">CONFIRM PAYMENT</button>
                        </div>
                    </div>
                </div>

            @endforeach
        </div>
    </div>



@endsection

@section('script')
    <script type="text/javascript">

        // purchase JS-----------------------


        $('#purchaseConfirmBtnId').click(function (){
            let img=$('#CourseImg').val();
            let title=$('#CourseTitle').val();
            let code=$('#CourseCode').val();
            let payment_type=$('#PaymentType').val();
            let trxID=$('#PaymentTrx').val();
            let payment_mobile=$('#PaymentMobile').val();

            PurchaseAdd(img,title,code,payment_type,trxID,payment_mobile);
        });

        function PurchaseAdd(img,title,code,payment_type,trxID,payment_mobile){

            if (payment_type.length==0){
                $('#purchaseConfirmBtnId').html('please enter Payment Type !');
                setTimeout(function () {
                    $('#purchaseConfirmBtnId').html('Send Again');
                },2000)
            }

            else if (trxID.length!==10){
                $('#purchaseConfirmBtnId').html('Trx ID must be 10 Character!');
                setTimeout(function () {
                    $('#purchaseConfirmBtnId').html('Send Again');
                },2000)
            }

            else if (payment_mobile.length!==11){
                $('#purchaseConfirmBtnId').html('Payment Mobile No must be 11 digit!');
                setTimeout(function () {
                    $('#purchaseConfirmBtnId').html('Send Again');
                },2000)
            }

            else{

                axios.post('/onPurchase',{
                    img:img,
                    title:title,
                    code:code,
                    payment_type:payment_type,
                    trxID:trxID,
                    payment_mobile:payment_mobile,
                })
                    .then(function (response){
                        if (response.status===200 && response.data===1){
                            window.location.href = "/classroom";

                            $('#PaymentType').val('');
                            $('#PaymentTrx').val('');
                            $('#PaymentMobile').val('');
                        }

                        else if(response.status===200 && response.data===2){
                            alert("You Already Enrolled This Course");
                        }

                        else{
                            $('#purchaseConfirmBtnId').html('Request Fail ! Try Again');
                            setTimeout(function () {
                                $('#purchaseConfirmBtnId').html('CONFIRM PAYMENT');
                            },3000)
                        }
                    })

                    .catch(function (error){
                        $('#purchaseConfirmBtnId').html('Try Again');
                        setTimeout(function () {
                            $('#purchaseConfirmBtnId').html('CONFIRM PAYMENT');
                        },3000)
                    })

            }

        }



    </script>
@endsection

