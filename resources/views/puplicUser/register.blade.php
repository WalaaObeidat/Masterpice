@extends('puplicUser.layout.master')
@section('title')
Register
@endsection
@section('css')
<link rel="stylesheet" href="userSide/register/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
<link rel="stylesheet" href="userSide/register/css/style.css">
@endsection

{{--============= showCase ===============--}}
@section('showCase')

@endsection
{{--============= contant ===============--}}
@section('contant')
<div class="wrapper" style="background-image: url('img/img_9.jpg'); ">
    <div class="inner " style="width: 700px !important">
        <div class="image-holder">
            <img src="img/log.jpeg" alt="" style="height: 100%">
        </div>
        <form action="">
            <h3>Registration </h3>
            <div class="form-wrapper">
                <input type="text" placeholder="Full Name" class="form-control">
                {{-- <i class="zmdi zmdi-account"></i> --}}
            </div>
            <div class="form-wrapper">
                <input type="text" placeholder="Email Address" class="form-control">
                <i class="zmdi zmdi-email"></i>
            </div>
            <div class="form-wrapper">
                <input type="password" placeholder="Password" class="form-control">
                <i class="zmdi zmdi-lock"></i>
            </div>
            <div class="form-wrapper">
                <input type="password" placeholder="Confirm Password" class="form-control">
                <i class="zmdi zmdi-lock"></i>
            </div>
            <button>Register
                <i class="zmdi zmdi-arrow-right"></i>
            </button>
        </form>
    </div>
</div>

@endsection
