<html>
<head>
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('css/app.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{asset('css/custom.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{asset('css/responsive.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{asset('css/fontawesome.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{asset('css/owl.carousel.min.css') }}" rel="stylesheet" type="text/css" >

</head>
<body>

@include('Component.menu')
@yield('content')
@include('Component.footer')
@include('Component.video_play_modal')

<div id="snackbar"></div>
<script type="text/javascript" src="{{asset('js/jquery-3.4.1.min.js') }}"></script>
<script type="text/javascript" src="{{asset('js/popper.min.js') }}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.js') }}"></script>
<script type="text/javascript" src="{{asset('js/mdb.min.js') }}"></script>
<script type="text/javascript" src="{{asset('js/owl.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{asset('js/axios.min.js') }}"></script>
@yield('script')
<script type="text/javascript" src="{{asset('js/site.js') }}"></script>



</body>
</html>
