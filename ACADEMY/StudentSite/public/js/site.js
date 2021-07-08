$(document).ready(function () {

    let loader="<span class='spinner-grow text-white spinner-grow-sm' role='status' aria-hidden='true'></span>";


    $( '.loginForm' ).on( 'submit', function( event ) {
        event.preventDefault();
        let formData= $(this).serializeArray();
        let phn= formData[0]['value'];
        let pass= formData[1]['value'];
        let checkData =$('.loginForm input:checkbox').serialize();
        let checkStatus;
        if(checkData.length!=0){
            checkStatus="check"
        }
        else{
            checkStatus="uncheck"
        }
        if(phn.length!=11){
            myToast('Please Enter 11 Digit Mobile Number');
        }
        else {
            $( ".loginBtn" ).html(loader+ " Authenticating..")
            var URL="/loginSet";
            axios.post(URL,{
                phn:phn,
                pass:pass,
                checkStatus:checkStatus
            })
                .then(function (response) {
                    $( ".loginBtn" ).html("Login")
                    if(response.status==200 && response.data==1){
                        myToast('Login Success');
                        window.location.href = "/";
                    }
                    else if(response.status==200 && response.data==0){
                        myToast('User Not Found');
                    }
                    else if(response.status==200 && response.data=="pending"){
                        myToast('Account is not active');
                    }
                    else if(response.status==200 && response.data=="error"){
                        myToast('Login Fail ! Try Again');
                    }
                    else {
                        myToast('Login Fail ! Try Again');
                    }
                })
                .catch(function (error) {
                    $( ".loginBtn" ).html("Login")
                    myToast('Login Fail ! Try Again');
                })
        }

    });













    $( '.regForm' ).on( 'submit', function( event ) {
        event.preventDefault();
        let formData= $(this).serializeArray();
        let name= formData[0]['value'];
        let email= formData[1]['value'];
        let mobile= formData[2]['value'];
        let password= formData[3]['value'];


        if(mobile.length!=11){
            myToast('Please Enter 11 Digit Mobile Number');
        }
        else if(password.length<=8){
            myToast('Password Should More Than 8 Character');
        }

        else{
            $( ".regBtn" ).html(loader+ " Processing..")
            var URL="/getRegistration";
            axios.post(URL,
                {
                    name:name,
                    email:email,
                    password:password,
                    mobile:mobile
                })
                .then(function (response) {
                    if(response.status!==200 || response.data==0){
                        $( ".regBtn" ).html("Submit")
                        myToast("Registration Success");
                    }
                    else if(response.data=="MobileExist"){
                        $( ".regBtn" ).html("Submit")
                        myToast("Mobile Number Already Used");
                    }
                    else if(response.status==200  && response.data==1){
                        $( ".regBtn" ).html(loader+ " Going...")
                        myToast("Registration Success");
                        setTimeout(function () {
                            window.location.href = "/login";
                        },2000)
                    }
                })
                .catch(function (error) {
                    $( ".regBtn" ).html("Submit")
                    myToast("Registration Fail");
                })
        }
    });




    $( '.passRecover' ).on( 'submit', function( event ) {
        event.preventDefault();

        let formData= $(this).serializeArray();
        let mobile= formData[0]['value'];

        if(mobile.length!=11){
            RecoverToast('Please Enter 11 Digit Mobile Number');
        }

        else{
            $( ".quickBtn" ).html(loader+ " Processing..")
            var URL="/passRecover";
            axios.post(URL,
                {
                    mobile:mobile
                })
                .then(function (response) {
                    if(response.status!==200 || response.data==0){
                        $( ".quickBtn" ).html("Get Details")
                        RecoverToast("Account Recover Fail");
                    }
                    else if(response.data=="AccountNotExist"){
                        $( ".quickBtn" ).html("Get Details")
                        RecoverToast("Account Not Exists");
                    }
                    else if(response.status==200  && response.data==1){
                        $( ".quickBtn" ).html(loader+ " SMS Sending...")
                        RecoverToast("Recover Successful, You Will Notify Via SMS");
                        setTimeout(function () {
                            $(".quickModal").modal('hide');
                            $( ".quickBtn" ).html("Get Details")
                        },3000)
                    }
                })
                .catch(function (error) {
                    $( ".quickBtn" ).html("Get Details")
                    RecoverToast("Account Recover Fail");
                })
        }
    });


    $( '.passReset' ).on( 'submit', function( event ) {
        event.preventDefault();

        let formData= $(this).serializeArray();
        let mobile= formData[0]['value'];
        let oldPass= formData[1]['value'];
        let newPass= formData[2]['value'];

        if(mobile.length!=11){
            ResetToast('Please Enter 11 Digit Mobile Number');
        }
        else{
            $( ".resetBtn" ).html(loader+ " Resetting..")
            var URL="/passReset";
            axios.post(URL,
                {
                    mobile:mobile,
                    oldPass:oldPass,
                    newPass:newPass
                })
                .then(function (response) {
                    if(response.status!==200 || response.data==0){
                        $( ".resetBtn" ).html("Reset")
                        ResetToast("Reset Successful");
                        $(".passResetModal").modal('hide');
                    }
                    else if(response.data=="AccountNotExist"){
                        $( ".resetBtn" ).html("Reset")
                        ResetToast("Reset Successful");
                        $(".passResetModal").modal('hide');
                    }
                    else if(response.status==200  && response.data==1){
                        $( ".resetBtn" ).html("Reset")
                        ResetToast("Reset Successful");
                        $( ".resetBtn" ).html("Reset")
                        setTimeout(function () {
                            $(".passResetModal").modal('hide');
                        },3000)
                    }
                })
                .catch(function (error) {
                    $( ".resetBtn" ).html("Reset")
                    ResetToast("Reset Successful");
                    $(".passResetModal").modal('hide');
                })
        }
    });





})


function myToast(msg) {
    document.getElementById("snackbar").innerHTML=msg;
    var x = document.getElementById("snackbar");
    x.className = "show";
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}

function RecoverToast(msg) {
    document.getElementById("snackbarRecover").innerHTML=msg;
    var x = document.getElementById("snackbarRecover");
    x.className = "show";
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}
function ResetToast(msg) {
    document.getElementById("snackbarReset").innerHTML=msg;
    var x = document.getElementById("snackbarReset");
    x.className = "show";
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}




// Video Modal Start.................
$(document).ready(function(){
    $('.opener').click(function(){
        var url = $(this).data('url');
        $('source').attr('src',url);
        $('#videoModal').modal('show');
        $("#player")[0].load();
        $("#player").attr('controls','true');
    });
});
$('#videoModal').on('hidden.bs.modal',function(){
    $("#player")[0].pause();
});
$('#videoModal').on('show.bs.modal',function(){
    $("#player")[0].play();
});
// Video Modal End.................







// Owl Carousel Start..................
var owl = $('.owl-carousel');
$('#customNextBtn').click(function() {
    owl.trigger('next.owl.carousel');
})
$('#customPrevBtn').click(function() {
    owl.trigger('prev.owl.carousel');
})
$('.owl-carousel').owlCarousel({
    autoplay:true,
    loop:true,
    dot:true,
    autoplayHoverPause:true,
    autoplaySpeed:100,
    margin:10,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:4
        }
    }
});
// Owl Carousel End..................



//Line Writing Animation..........
var i = 0;
var txt = 'Creative Academy';
var speed = 80;
function typeWriter() {
    if (i < txt.length) {
        document.getElementById("lwrh").innerHTML += txt.charAt(i);
        i++;
        setTimeout(typeWriter, speed);
    }
}
typeWriter();
//Line Writing Animation End..........



