@extends('Layout.app')
@section('content')
    @include('Component.homeBanner')

    @if(Cookie::has('token')==true or Session::has('token')==true)
        @include('Component.homeGoClassRoom')
    @else
        @include('Component.homePaymentGuide')
    @endif

    @include('Component.homeMoreCourse')
@endsection
