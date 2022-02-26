@extends('seller.auth.layout.master')

@section('extra-css')
    <link rel="stylesheet" href="{{asset('assets/css/sign_in.css')}}">
@endsection

@section('content')
    <body class="sign_in_page">
    <div class="main-wrapper">

        <!-- Sign In Section Start-->
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
                    <h2 class="cm_title">Sign In</h2>
                    <form action="{{route('seller.validate-seller-login')}}" method="POST" id="seller_login">
                        @CSRF
                        <div class="common_input_wrap">
                            <p class="input_label">Email</p>
                            <input type="email" placeholder="email" id="email" name="email">
                        </div>
                        <div class="common_input_wrap">
                            <p class="input_label">Password</p>
                            <input type="password" placeholder="Password" id="password" name="password">
                        </div>
                        <button type="submit" class="cm_btn">Sign In</button>
                    </form>
                    <p class="account_text">Don’t have an account? <a href="{{route('seller.register')}}">Sign Up</a></p>
                    <p class="account_text"><a href="{{route('seller.seller-forget-password')}}">Forgot Password ? 🔒</a></p>
                </div>
            </div>
        </div>
        <!-- Sign In Section End-->

    </div>

    <script src="{{asset('assets/js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#seller_login').validate({
                rules: {
                    email: {
                        required: true,
                        email: true,
                    },
                    password: {
                        required: true,
                        minlength: 5
                    },
                },
                messages: {
                    email: {
                        required: "Email is required",
                        email: "Email must be a valid email address",
                        maxlength: "Email cannot be more than 50 characters",
                    },
                    password: {
                        required: "Password is required",
                        minlength: "Password must be at least 5 characters"
                    },
                },
            });
        });
    </script>
    </body>
@endsection
