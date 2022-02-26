@extends('seller.auth.layout.master')

@section('extra-css')
    <link rel="stylesheet" href="{{asset('assets/css/sign_in.css')}}">
@endsection

@section('content')
    <body class="sign_in_page">
    <div class="main-wrapper">
        <div class="common_main_wrap">
            <div class="common_inner_left common_inner">
                <div class="common_logo_and_info">
                    <a href="#0">
                        <img src="{{asset('assets/image/logo.png')}}" alt="logo" class="logo">
                    </a>
                    <div class="welcome_text">
                        <p>Welcome Back</p>
                        <span>Just a couple of clicks and we start</span>
                    </div>
                </div>
            </div>
            <div class="common_inner_right common_inner">
                <div class="sign_in_info">
                    @include('seller.auth.layout.message')
                    <h2 class="cm_title">Change Password</h2>
                    <form action="{{route('seller.update-reset-password')}}" method="POST" id="seller-psw-reset" autocomplete="off">
                        @CSRF
                        @method('PUT')
                        <input type="hidden" name="email" value="{{ $email }} "/>

                        <div class="common_input_wrap">
                            <p class="input_label">New Password</p>
                            <input type="password" placeholder="New Password" id="password" name="password">
                        </div>
                        <div class="common_input_wrap">
                            <p class="input_label">Confirm Password</p>
                            <input type="password" placeholder="Confirm Password" id="confirm_password" name="confirm_password">
                        </div>
                        <button type="submit" class="cm_btn">Set Password</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('assets/js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#seller-psw-reset').validate({
                rules: {
                    password: {
                        required: true,
                        minlength: 8,
                    },
                    confirm_password: {
                        required: true,
                        minlength: 8,
                        equalTo: "#password",
                    },
                },
                messages: {
                    password: {
                        required: "Please enter your password",
                        minlength: "your password must be at least 8 character long ",
                    },
                    confirm_password: {
                        required: "Please enter your password for confirmation",
                        minlength: "your password must be at least 8 character long",
                    },
                },
            });
        });
    </script>
    </body>
@endsection
