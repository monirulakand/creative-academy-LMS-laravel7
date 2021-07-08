<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="{{asset('css/app.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{asset('css/fontawesome.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{asset('css/datatables.min.css')}}" rel="stylesheet" >
    <link href="{{asset('css/sidenav.css')}}" rel="stylesheet" >
    <link href="{{asset('css/custom.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{asset('css/responsive.css') }}" rel="stylesheet" type="text/css" >
</head>
<body class="fix-header fix-sidebar">
@include('Classroom.menu')



@yield('content')



</div>
</div>

<script type="text/javascript" src="{{asset('js/jquery-3.4.1.min.js') }}"></script>
<script type="text/javascript" src="{{asset('js/popper.min.js') }}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.js') }}"></script>
<script type="text/javascript" src="{{asset('js/froogaloop2.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/axios.min.js') }}"></script>
<script type="text/javascript" src="{{asset('js/Chart.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/datatables.min.js')}}"></script>
@yield('script')
<script type="text/javascript" src="{{asset('js/sidebar.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/sidebarmenu.js')}}"></script>
<script type="text/javascript" src="{{asset('js/sticky-kit.min.js')}}"></script>


</body>
</html>
