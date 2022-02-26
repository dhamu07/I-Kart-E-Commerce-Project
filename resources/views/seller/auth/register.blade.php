@extends('seller.auth.layout.master')

@section('extra-css')
    <link rel="stylesheet" href="{{asset('assets/css/registation.css')}}">
@endsection

@section('content')
    <body class="registation_page">
    <div class="main-wrapper">
        <!-- Sign In Section Start-->
        <div class="common_main_wrap">
            <div class="common_inner_left common_inner">
                <div class="common_logo_and_info">
                    <a href="#0">
                        <img src="{{asset('assets/image/logo.png')}}" alt="logo" class="logo">
                    </a>
                    <div class="welcome_text">
                        <p>Welcome to iKart</p>
                    </div>
                </div>
            </div>
            <div class="common_inner_right common_inner">
                <div class="registation_info">
                    <h2 class="registation_title">Fill all form field to go next step</h2>
                    <!-- multistep form -->
                    <form id="msform">
                        <!-- progressbar -->
                        <ul id="progressbar" class="progressbar_wrap">
                            <li class="active">
                                <div class="progress_circle">
                                    <img src="{{asset('assets/image/registation/account.svg')}}" alt="account">
                                </div>
                                <span>Account</span>
                            </li>
                            <li>
                                <div class="progress_circle">
                                    <img src="{{asset('assets/image/registation/profile.svg')}}" alt="profile">
                                </div>
                                <span>Profile</span>
                            </li>
                            <li>
                                <div class="progress_circle">
                                    <img src="{{asset('assets/image/registation/confirmation.svg')}}" alt="confirmation">
                                </div>
                                <span>Confirmation</span>
                            </li>
                            <li>
                                <div class="progress_circle">
                                    <img src="{{asset('assets/image/registation/location.svg')}}" alt="location">
                                </div>
                                <span>Pick up </span>
                            </li>
                            <li>
                                <div class="progress_circle">
                                    <img src="{{asset('assets/image/registation/checkmark.svg')}}" alt="checkmark">
                                </div>
                                <span>Suceess</span>
                            </li>
                        </ul>
                        <!-- fieldsets -->
                        <div class="fieldset_wrap outer_height">
                            <fieldset class="fieldset_wrap_1">
                                <div class="res_common_input_wrap">
                                    <p class="res_input_label">Email Address: <span>*</span></p>
                                    <div class="otp_alert"></div>
                                    <div class="res_input_wrap">
                                        <input type="email" placeholder="email" id="email" name="email">
                                        <button type="button" class="get_otp_btn" onclick="sendOTP();">Get OTP</button>
                                        <button type="button" class="get_otp_btn verify_btn" onclick="validateOtp();" disabled>Verify</button>
                                    </div>
                                    <div class="res_input_wrap">
                                        <input type="number" placeholder="Enter OTP" id="otp" name="otp">
                                    </div>
                                </div>

                                <div class="res_common_input_wrap">
                                    <p class="res_input_label">Mobile No.: <span>*</span></p>
                                    <div class="res_input_wrap">
                                        <input type="text" placeholder="+91 012 345 6789" id="phone" name="phone_number">
                                        <button type="button" class="get_otp_btn">Get OTP</button>
                                        <button type="button" class="get_otp_btn verify_btn">Verify</button>
                                    </div>
                                    <div class="res_input_wrap">
                                        <input type="number" placeholder="Enter OTP" id="Mobile_otp" name="otp">
                                    </div>
                                </div>

                                <div class="res_common_input_wrap">
                                    <p class="res_input_label">Password: <span>*</span></p>
                                    <div class="res_input_wrap">
                                        <input type="password" id="password" name="password">
                                    </div>
                                </div>

                                <div class="res_common_input_wrap">
                                    <p class="res_input_label">Confirm Password: <span>*</span></p>
                                    <div class="res_input_wrap">
                                        <input type="password" id="confirm_password" name="confirm_password">
                                    </div>
                                </div>

                                <div class="next_btn_wrap">
                                    <button type="button" name="next" class="next action-button continue_btn" disabled>Continue</button>
                                </div>
                            </fieldset>

                            <fieldset class="fieldset_wrap_2">
                                <div class="res_common_input_wrap">
                                    <p class="res_input_label">Company Name: <span>*</span></p>
                                    <div class="res_input_wrap">
                                        <input type="text" placeholder="Company Name" id="company_name" name="company_name">
                                    </div>
                                </div>

                                <div class="res_common_input_wrap">
                                    <p class="res_input_label">GST Number: <span>*</span></p>
                                    <div class="res_input_wrap">
                                        <input type="text" placeholder="GST Number" id="gst_number" name="gst_number" value="{{old('gst_number')}}" class="gst_number">
                                        <button type="button" class="get_otp_btn" onclick="verifyGstNumber()">Verify</button>
                                        <button type="button" class="get_otp_btn" onclick="changeGstNumber()">Change GstNumber</button>
                                    </div>
                                </div>

                                <div class="res_common_input_wrap">
                                    <p class="res_input_label">PAN Number: <span class="Optional">(Optional)</span></p>
                                    <div class="res_input_wrap">
                                        <input type="text" placeholder="PAN Number" id="pan_number" name="pan_number">
                                    </div>
                                </div>

                                <div class="res_common_input_wrap">
                                    <p class="res_input_label">Bank A/C No.: <span>*</span></p>
                                    <div class="res_input_wrap">
                                        <input type="text" placeholder="Bank A/C No." id="bank_account_number" name="bank_account_number">
                                    </div>
                                </div>

                                <div class="res_common_input_wrap">
                                    <p class="res_input_label">Confirm Bank A/C No:<span>*</span></p>
                                    <div class="res_input_wrap">
                                        <input type="text" placeholder="Conform Bank A/C No" id="confirm_bank_account_number" name="confirm_bank_account_number">
                                    </div>
                                </div>

                                <div class="res_common_input_wrap">
                                    <p class="res_input_label">IFSC No.:<span>*</span></p>
                                    <div class="res_input_wrap">
                                        <input type="text" placeholder="IFSC No" id="ifsc_code" name="ifsc_code">
                                    </div>
                                </div>

                                <div class="res_common_input_wrap">
                                    <p class="res_input_label">Register Business Address: <span>*</span></p>
                                    <div class="res_input_wrap">
                                        <input type="text" placeholder="Register Business Address" id="business_address" name="business_address">
                                    </div>
                                </div>

                                <div class="res_common_input_wrap">
                                    <p class="res_input_label">Select Category <span>*</span></p>
                                    <div class="radio_wrap">
                                        <div class="custom_radio">
                                            <input type="radio" id="featured-1" name="categories" value="1" checked>
                                            <label for="featured-1">Wholesellar</label>
                                        </div>
                                        <div class="custom_radio">
                                            <input type="radio" id="featured-2" name="categories" value="2">
                                            <label for="featured-2">Retailer</label>
                                        </div>
                                        <div class="custom_radio">
                                            <input type="radio" id="featured-3" name="categories" value="3">
                                            <label for="featured-3">Manufacture</label>
                                        </div>
                                    </div>
                                    <div id="radioType"></div>
                                </div>

                                <div class="next_btn_wrap">
                                    <button type="button" name="previous" class="previous action-button continue_btn">Back</button>
                                    <button type="button" name="next" class="next action-button continue_btn gst_verify_tab" disabled>Continue</button>
                                </div>
                            </fieldset>

                            <fieldset class="fieldset_wrap_3">
                                <div class="res_common_input_wrap">
                                    <p class="res_input_label">Upload GST Certificate <span>*</span></p>
                                    <div class="res_input_wrap">
                                        <div class="file-select">
                                            <div class="file-select-name noFile">Upload only JPEG files</div>
                                        </div>
                                        <div class="file-select1">
                                            <input type="file" name="gst_certificate" id="gst_certificate" class="chooseFile">
                                            <button class="get_otp_btn browse_btn">Browse File</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="res_common_input_wrap">
                                    <p class="res_input_label">Upload Cancel Cheque <span>*</span></p>
                                    <div class="res_input_wrap">
                                        <div class="file-select">
                                            <div class="file-select-name noFile">Upload only JPEG files</div>
                                        </div>
                                        <div class="file-select1">
                                            <input type="file" name="cancel_cheque" id="cancel_cheque" class="chooseFile">
                                            <button class="get_otp_btn browse_btn">Browse File</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="next_btn_wrap">
                                    <button type="button" name="previous" class="previous action-button continue_btn">Back</button>
                                    <button type="button" name="next" class="next action-button continue_btn">Continue</button>
                                </div>
                            </fieldset>

                            <fieldset class="fieldset_wrap_4">
                                <div class="last_page"></div>
                                <div class="res_common_input_wrap">
                                    <p class="res_input_label">Pick up Address: <span>*</span></p>
                                    <div class="res_input_wrap">
                                        <input type="text" placeholder="Pick up Address:" id="pick_up" name="pickup_address">
                                    </div>
                                </div>

                                <div class="res_common_input_wrap">
                                    <p class="res_input_label">Country: <span>*</span></p>
                                    <div class="res_input_wrap">
                                        <select id="country" name="country" class="form-control">
                                            <option value="0" selected>Select Country</option>
                                            @foreach ($countries as $key => $country)
                                                <option value="{{ $key }}"> {{ $country }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="res_common_input_wrap">
                                    <p class="res_input_label">State: <span>*</span></p>
                                    <div class="res_input_wrap">
                                        <select name="state" id="state" class="form-control">
                                            <option value="0">Select State</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="res_common_input_wrap">
                                    <p class="res_input_label">City: <span>*</span></p>
                                    <div class="res_input_wrap">
                                        <select name="city" id="city" class="form-control">
                                            <option value="0">Select City</option>


                                        </select>
                                    </div>
                                </div>

                                <div class="res_common_input_wrap">
                                    <p class="res_input_label">Pin Code: <span>*</span></p>
                                    <div class="res_input_wrap">
                                        <input type="number" placeholder="Enter Pin-code Address:" id="pin_code" name="pin_code">
                                    </div>
                                </div>
                                <div class="next_btn_wrap">
                                    <button type="button" name="previous" class="previous action-button continue_btn">Back</button>
                                    <button type="button" name="next" id="final-step" class="next action-button continue_btn">Continue</button>
                                </div>
                            </fieldset>

                            <fieldset class="fieldset_wrap_5">
                                <div class="res_common_input_wrap">
                                    <div class="thank_you_message">
                                        <img src="{{asset('assets/image/registation/thank_you.png')}}" alt="thank you">
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Sign In Section End-->
    </div>
    <script src="{{asset('assets/js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>


    <script>
        // when country dropdown changes
        $('#country').change(function () {

            var countryID = $(this).val();
            if (countryID) {
                $.ajax({
                    type: "GET",
                    url: "{{ url('seller/get-state') }}?country_id=" + countryID,
                    success: function (res) {

                        if (res) {

                            $("#state").empty();
                            $("#city").empty();
                            $.each(res, function (key, value) {
                                $("#state").append('<option value="' + key + '">' + value +
                                    '</option>');
                            });

                        } else {

                            $("#state").empty();
                        }
                    }
                });
            } else {

                $("#state").empty();
                $("#city").empty();
            }
        });

        // when state dropdown changes
        $('#state').on('change', function () {

            var stateID = $(this).val();

            if (stateID) {

                $.ajax({
                    type: "GET",
                    url: "{{ url('seller/get-city') }}?state_id=" + stateID,
                    success: function (res) {

                        if (res) {
                            $("#city").empty();
                            $.each(res, function (key, value) {
                                $("#city").append('<option value="' + key + '">' + value +
                                    '</option>');
                            });

                        } else {

                            $("#city").empty();
                        }
                    }
                });
            } else {
                $("#city").empty();
            }
        });

        $(".verify_btn").css("background-color", "darkgray");

        $(".next").css("background-color", "darkgray");

        $('.chooseFile').bind('change', function () {
            var filename = $(this).val();
            if (/^\s*$/.test(filename)) {
                $(this).parents('.res_common_input_wrap').find(".file-upload").removeClass('active');
                $(this).parents('.res_common_input_wrap').find(".noFile").text("No file chosen...");
            } else {
                $(this).parents('.res_common_input_wrap').find(".file-upload").addClass('active');
                $(this).parents('.res_common_input_wrap').find(".noFile").text(filename.replace("C:\\fakepath\\", ""));
            }
        });


        //jQuery time
        var current_fs, next_fs, previous_fs; //fieldsets
        var left, opacity, scale; //fieldset properties which we will animate
        var animating; //flag to prevent quick multi-click glitches

        var first_fieldeset_height = $('fieldset.active:last').outerHeight();
        $('.outer_height').css({'height': first_fieldeset_height});

        $(window).on("ready load resize", function () {
            var first_fieldeset_height = $('fieldset.active:last').outerHeight();
            $('.outer_height').css({'height': first_fieldeset_height});
        });

        $(".previous").click(function () {

            $(".gst_verify_tab").removeAttr('style').prop("disabled", false);

            if (animating) return false;
            animating = true;

            current_fs = $(this).parents('fieldset');
            previous_fs = $(this).parents('fieldset').prev();

            var fieldset_height_p = previous_fs.outerHeight();
            $('.outer_height').css({'height': fieldset_height_p});

            //de-activate current step on progressbar
            $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

            //show the previous fieldset
            previous_fs.show();
            //hide the current fieldset with style
            current_fs.animate({opacity: 0}, {
                step: function (now, mx) {
                    //as the opacity of current_fs reduces to 0 - stored in "now"
                    //1. scale previous_fs from 80% to 100%
                    scale = 0.8 + (1 - now) * 0.2;
                    //2. take current_fs to the right(50%) - from 0%
                    left = ((1 - now) * 50) + "%";
                    //3. increase opacity of previous_fs to 1 as it moves in
                    opacity = 1 - now;
                    current_fs.css({'left': left});
                    previous_fs.css({'transform': 'scale(' + scale + ')', 'opacity': opacity});
                },
                duration: 800,
                complete: function () {
                    current_fs.hide();
                    animating = false;
                },
                //this comes from the custom easing plugin
                easing: 'easeInOutBack'
            });
        });

        function sendOTP() {
            $('#otp').empty().show();

            var email_id = $('#email').val();

            $('.custom_error_class').remove();

            $(".otp_alert").html("<span class='custom_error_class' style='color:green'>Sending, Please wait....!</span>");

            $.ajax({
                url: "{{route('generate-otp')}}",
                type: 'POST',
                data: {email: email_id},
                success: function (response) {
                    // TESTING
                    // $(".verify_btn").removeAttr('style').prop("disabled", false);
                    // $(".next").removeAttr('style').prop("disabled", false);

                    if (response.status == 422) {
                        $(".otp_alert").html("<span class='custom_error_class' style='color:red'>" + response.message + "</span>");

                    }
                    if (response.status == 200) {
                        $(".otp_alert").html("<span class='custom_error_class' style='color:green'>" + response.message + "</span>");
                        $(".verify_btn").removeAttr('style').prop("disabled", false);
                    }
                },
                error: function (response) {
                    $.each(response.responseJSON.errors, function (field_name, error) {
                        $('.custom_error_class').remove();
                        $('#email').closest('.res_input_wrap').after('<span class="custom_error_class" style="color:red">' + error + '</span>');
                    })
                }
            });
        }

        function validateOtp() {

            var email = $('#email').val();

            var otp = $('#otp').val();

            $('.custom_error_class').remove();

            $.ajax({
                url: "{{route('validate-otp')}}",
                type: 'POST',
                data: {email: email, otp: otp},
                success: function (response) {
                    console.log(response)
                    if (response.status == 422) {
                        $(".otp_alert").html("<span style='color:red'>" + response.message + "</span>");
                    }
                    if (response.status == 200) {
                        $('#otp').hide();
                        $(".otp_alert").html("<span style='color:green'>" + response.message + "</span>");
                        $(".next").removeAttr('style').prop("disabled", false);
                    }
                },
                error: function (response) {
                    $.each(response.responseJSON.errors, function (field_name, error) {
                        $(document).find('[name=' + field_name + ']').after('<span class="custom_error_class" style="color:red">' + error + '</span>');
                    })
                }
            });
        }

        function verifyGstNumber() {

            var gstNumber = $('.gst_number').val();

            $('.custom_error_class').remove();

            if (gstNumber) {
                $.ajax({
                    cache: false,
                    async: false,
                    type: 'POST',
                    data: {'gst_number': gstNumber, _token: '{{csrf_token()}}'},
                    url: '{{route('check-gst-number')}}',
                    success: function (response) {
                        if (response.status == 422) {
                            $('#gst_number').closest('.res_input_wrap').after("<span class='custom_error_class' style='color:red'>" + response.message + "</span>");
                            $(".gst_verify_tab").css("background-color", "darkgray").prop("disabled", true);
                            $('.custom_error_class').fadeIn(50).fadeOut(5000);
                        }
                        if (response.status == 200) {
                            $('#gst_number').prop("disabled", true).closest('.res_input_wrap').after("<span class='custom_error_class' style='color:green'>" + response.message + "</span>");
                            $(".gst_verify_tab").removeAttr('style').prop("disabled", false);
                            $('.custom_error_class').fadeIn(50).fadeOut(5000);
                        }
                    },
                    error: function () {
                        $(".gst_verify_tab").css("background-color", "darkgray").prop("disabled", true);
                        $(document).find('[name=gst_number]').closest('.res_input_wrap').after('<span class="custom_error_class" style="color:red"> Please Enter Different GST Number OR GST Number is used into another seller accounts !</span>');
                    }
                });
            } else {
                $('#gst_number').closest('.res_input_wrap').after("<span class='custom_error_class' style='color:red'>Gst number is required !</span>");
            }
        }

        function changeGstNumber() {
            $(".gst_verify_tab").css("background-color", "darkgray").prop("disabled", true);
            $("#gst_number").empty().prop("disabled", false);
        }

        $(document).ready(function () {
            $(".next").click(function () {
                var form = $("#msform");
                form.validate({
                    errorElement: 'span',
                    errorClass: 'error',
                    highlight: function (element, errorClass, validClass) {
                        $(element).closest('.res_input_wrap').addClass("has-error");
                    },
                    unhighlight: function (element, errorClass, validClass) {
                        $(element).closest('.res_input_wrap').removeClass("has-error");
                    },
                    errorPlacement: function (error, element) {
                        $(element).closest(".res_input_wrap").append(error);
                    },
                    rules: {
                        phone_number: {
                            required: true,
                            number: true,
                        },
                        password: {
                            required: true,
                            minlength: 8,
                        },
                        confirm_password: {
                            required: true,
                            minlength: 8,
                            equalTo: "#password",
                        },
                        company_name: {
                            required: true,
                        },
                        gst_number: {
                            required: true,
                        },
                        pan_number: {
                            required: true,
                            pattern: '[A-Z]{5}[0-9]{4}[A-Z]{1}',
                        },
                        bank_account_number: {
                            required: true,
                            number: true,
                        },
                        confirm_bank_account_number: {
                            required: true,
                            number: true,
                            equalTo: "#bank_account_number",
                        },
                        ifsc_code: {
                            required: true,
                            pattern: '^[A-Za-z]{4}[a-zA-Z0-9]{7}$',
                        },
                        business_address: {
                            required: true,
                        },
                        categories: {
                            required: true,
                        },
                        gst_certificate: {
                            required: true,
                            accept: "image/jpeg"
                        },
                        cancel_cheque: {
                            required: true,
                            accept: "image/jpeg"
                        },
                        pickup_address: {
                            required: true,
                        },
                        country: {
                            countrySelectCheck: true
                        },
                        state: {
                            stateSelectCheck: true
                        },
                        city: {
                            citySelectCheck: true
                        },
                        pin_code: {
                            required: true,
                            number: true,
                        },
                    },
                    messages: {
                        phone_number: {
                            required: "Please enter your mobile number",
                        },
                        password: {
                            required: "Please enter your password",
                            minlength: "your password must be at least 8 character long ",
                        },
                        confirm_password: {
                            required: "Please enter your password for confirmation",
                            minlength: "your password must be at least 8 character long",
                        },
                        company_name: {
                            required: "Please enter Company name",
                        },
                        gst_number: {
                            required: "Please enter your GST Number",
                        },
                        pan_number: {
                            required: "Please enter your PAN Number",
                            pattern: "Please enter valid PAN Number",
                        },
                        bank_account_number: {
                            required: "Please enter bank account number",
                        },
                        ifsc_code: {
                            required: "Please enter IFSC Code",
                            pattern: "Please enter valid IFSC Code",
                        },
                        business_address: {
                            required: "Please enter your business address",
                        },
                        categories: {
                            required: "Please select categories",
                        },
                        gst_certificate: {
                            required: "Please gst certificate",
                            accept: "Please upload only JPEG file format."
                        },
                        cancel_cheque: {
                            required: "Please upload cancel cheque",
                            accept: "Please upload only JPEG file format."
                        },
                        pickup_address: {
                            required: "Please enter pickup address",
                        },
                        pin_code: {
                            required: "Please enter pin-code address",
                        },
                    },
                });

                $.validator.addMethod('countrySelectCheck', function (value) {
                    return (value !== '0');
                }, "Please select Country");

                $.validator.addMethod('stateSelectCheck', function (value) {
                    return (value !== '0');
                }, "Please select State");

                $.validator.addMethod('citySelectCheck', function (value) {
                    return (value !== '0');
                }, "Please select City");

                if (form.valid() === true) {

                    //gst verified tab
                    $(".gst_verify_tab").css("background-color", "darkgray").prop("disabled", true);

                    if (animating) return false;
                    animating = true;

                    current_fs = $(this).parents('fieldset');
                    next_fs = $(this).parents('fieldset').next();

                    var fieldset_height = next_fs.outerHeight();
                    $('.outer_height').css({'height': fieldset_height});

                    //activate next step on progressbar using the index of next_fs
                    $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

                    //show the next fieldset
                    next_fs.show();
                    //hide the current fieldset with style
                    current_fs.animate({opacity: 0}, {
                        step: function (now, mx) {
                            //as the opacity of current_fs reduces to 0 - stored in "now"
                            //1. scale current_fs down to 80%
                            scale = 1 - (1 - now) * 0.2;
                            //2. bring next_fs from the right(50%)
                            left = (now * 50) + "%";
                            //3. increase opacity of next_fs to 1 as it moves in
                            opacity = 1 - now;
                            current_fs.css({
                                'transform': 'scale(' + scale + ')',
                                'position': 'absolute'
                            });
                            next_fs.css({'left': left, 'opacity': opacity});
                        },
                        duration: 800,
                        complete: function () {
                            current_fs.hide();
                            animating = false;
                        },
                        //this comes from the custom easing plugin
                        easing: 'easeInOutBack'
                    });

                    $('#final-step').on('click', function (event) {
                        event.preventDefault();

                        var sellerDetails = new FormData($("#msform")[0]);

                        var businessType = $('input[type="radio"][name="categories"]:checked').val();
                        var gstVal = $('#gst_number').val();

                        sellerDetails.append('business_type', businessType)

                        sellerDetails.append('gst_val', gstVal)

                        $.ajax({
                            url: "{{route('create-seller-account')}}",
                            type: 'POST',
                            method: "POST",
                            dataType: 'json',
                            data: sellerDetails,
                            processData: false,
                            contentType: false,
                            success: function (response) {
                                if (response.status == 422) {
                                    $(".acc_err").html("<span style='color:red'>" + response.message + "</span>");
                                }
                                if (response.status == 200) {
                                    $(".acc_err").html("<span style='color:green'>" + response.message + "</span>");
                                }
                            },
                            error: function (response) {
                                if (response.status == 422) {
                                    $(".acc_err").html("<span style='color:red'>" + response.message + "</span>");
                                }
                            }
                        });
                    });
                }
            });
        });

    </script>
    </body>
@endsection

