@extends('seller.layouts.master')

@section('extra-css')
@endsection

@section('content')
    <div class="product_view_page">
        <div class="main_wrapper dashboard_wrap">
        @include('seller.layouts.side-bar')

        <!-- Main Content Start -->
            <div class="main_content">
                <div class="main_content_lg">
                    <div class="common_content_pad_block">
                        <div class="cart_top_wrap">
                        <!-- <div class="logo">
                        <a href="#0">
                            <img src="{{asset('assets/image/dashborad_logo.png')}}" alt="logo">
                        </a>
                    </div> -->
                            <ul>
                                <li>
                                    <div class="top_right_icon">
                                        <img src="{{asset('assets/image/product_view/search_big_icon.png')}}" alt="icon">
                                    </div>
                                </li>
                                <li>
                                    <div class="top_right_icon cart_wrap">
                                        <img src="{{asset('assets/image/product_view/cart.png')}}" alt="icon">
                                    </div>
                                </li>
                                <li>
                                    <div class="top_right_icon notification_wrap">
                                        <img src="{{asset('assets/image/product_view/bell.png')}}" alt="icon">
                                    </div>
                                </li>
                                <li>
                                    <div class="top_right_icon">
                                        <img src="{{asset('assets/image/product_view/account.png')}}" alt="icon">
                                    </div>
                                </li>
                                <li>
                                    <a href="#0" class="menu_trigger d-lg-none">
                                        <svg width="9" height="13" viewBox="0 0 9 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.72577 6.50537L0.755156 12.1304L4.50093 6.50397L0.75 0.880371L8.72577 6.50537Z" fill="#FFCE55" />
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="single_product_listing image_bluck_listing">
                                    <div class="common_title">
                                        <h2>Upload Your Photos</h2>
                                    </div>
                                    @include('seller.layouts.message')
                                    <form action="{{route('seller.bulk-image-upload')}}" method="POST" enctype="multipart/form-data">
                                        @CSRF
                                        <div class="photo_upload">
                                            <div class="photo_img_left">
                                                <div class="main_product_img">
                                                    <div class="photo_upload_section main_produt_info">
                                                        <div class="upload_file">
                                                            <div class="plus_img">
                                                                <img src="{{asset('assets/image/single_product_listing/big_upload.png')}}" alt="plus">
                                                            </div>
                                                            <p class="extraction">Not vaild Extraction</p>
                                                            <div class="previewImgs">
                                                                <img class="previewImg" src="s.png" alt="image">
                                                            </div>
                                                            <input type="file" size="60" name="photos[]" class="preview_img" multiple>
                                                        </div>
                                                    </div>
                                                    <div class="upload_wrap d-flex justify-content-center">
                                                        <button type="submit" class="upload_btn">upload</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="bluk_imges">
                                    <div class="row">
                                        @foreach($bulkImageListing as $singleImageListing)
                                            <div class="col-md-3 col-sm-4 col-6 image_bluck_col">
                                                <div class="image_bluck_wrap" data-bs-toggle="modal" data-bs-target="#image_bluck_wrap{{$loop->iteration}}">
                                                    <img src="{{asset($singleImageListing['path'])}}" data-id={{$singleImageListing['id']}} alt="image">
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Content End -->
    @foreach($bulkImageListing as $singleImageListing)

        <!-- Checkin Bestätigung Modal -->
            <div class="modal fade image_bluck_wrap" id="image_bluck_wrap{{$loop->iteration}}" role="dialog">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content terimin_content">
                        <div class="modal-body">
                            <div class="modal_close_btn">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>

                            <div class="select_bluck_img_wrap">
                                <div class="select_bluck_img">
                                    <img src="{{asset($singleImageListing['path'])}}" alt="modal image">
                                </div>

                                <div class="copy_link_wrap">
                                    <p id="item-desc-{{$loop->index}}">{{asset($singleImageListing['path'])}}</p>
                                    <button data-desc-ref="item-desc-{{$loop->index}}" onclick="status(this)" class="copy_icon copy-data">
                                        <img src="{{asset('assets/image/image_bluk/copy_icon.svg')}}" alt="copy">
                                    </button>
{{--                                    <p id="item-desc-{{$loop->index}}">{{asset($singleImageListing['path'])}}</p>--}}
{{--                                    <button data-desc-ref="item-desc-{{$loop->index}}" onclick="status(this)" class="copy_icon copy-data">--}}
{{--                                        <img src="{{asset('assets/image/image_bluk/copy_icon.svg')}}" alt="copy">--}}
{{--                                    </button>--}}
                                </div>
                            </div>
                        </div>

                        <div class="product_bottom_shape">
                            <svg viewBox="0 0 440 102" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M439.091 60.3085C439.107 53.1509 435.834 46.3828 430.213 41.9511C421.31 34.9314 402.51 21.8898 384.677 19.8503C365.853 17.8087 347.996 26.7692 329.163 28.7276C311.321 30.6881 292.502 26.6465 274.68 19.607C255.867 12.5654 238.049 3.52598 219.225 1.48434C201.392 -0.555115 183.546 3.40542 164.687 17.3637C146.82 30.3243 127.943 52.2826 110.095 57.2431C91.2577 61.2014 73.449 48.162 54.6515 34.1204C36.8429 21.081 18.0432 8.03935 9.14 1.01964C5.34354 -1.54661 0.220919 1.16659 0.210783 5.74903L0.0198238 92.081C0.00892857 97.0066 3.99313 101.009 8.91881 101.019C17.8375 101.039 36.6659 101.081 54.5034 101.12C73.3317 101.162 91.1692 101.201 109.998 101.243C127.835 101.282 146.663 101.324 164.501 101.364C183.329 101.405 201.167 101.445 219.004 101.484C237.832 101.526 255.67 101.565 274.498 101.607C292.336 101.646 311.164 101.688 329.002 101.727C347.83 101.769 365.667 101.808 384.496 101.85C402.333 101.89 421.162 101.931 430.08 101.951C435.006 101.962 439.008 97.9777 439.019 93.052L439.091 60.3085Z" fill="url(#paint0_radial_700_3904)" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M439.091 60.3085C439.107 53.1509 435.834 46.3828 430.213 41.9511C421.31 34.9314 402.51 21.8898 384.677 19.8503C365.853 17.8087 347.996 26.7692 329.163 28.7276C311.321 30.6881 292.502 26.6465 274.68 19.607C255.867 12.5654 238.049 3.52598 219.225 1.48434C201.392 -0.555115 183.546 3.40542 164.687 17.3637C146.82 30.3243 127.943 52.2826 110.095 57.2431C91.2577 61.2014 73.449 48.162 54.6515 34.1204C36.8429 21.081 18.0432 8.03935 9.14 1.01964C5.34354 -1.54661 0.220919 1.16659 0.210783 5.74903L0.0198238 92.081C0.00892857 97.0066 3.99313 101.009 8.91881 101.019C17.8375 101.039 36.6659 101.081 54.5034 101.12C73.3317 101.162 91.1692 101.201 109.998 101.243C127.835 101.282 146.663 101.324 164.501 101.364C183.329 101.405 201.167 101.445 219.004 101.484C237.832 101.526 255.67 101.565 274.498 101.607C292.336 101.646 311.164 101.688 329.002 101.727C347.83 101.769 365.667 101.808 384.496 101.85C402.333 101.89 421.162 101.931 430.08 101.951C435.006 101.962 439.008 97.9777 439.019 93.052L439.091 60.3085Z" fill="url(#paint1_linear_700_3904)" fill-opacity="0.47" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M439.091 60.3085C439.107 53.1509 435.834 46.3828 430.213 41.9511C421.31 34.9314 402.51 21.8898 384.677 19.8503C365.853 17.8087 347.996 26.7692 329.163 28.7276C311.321 30.6881 292.502 26.6465 274.68 19.607C255.867 12.5654 238.049 3.52598 219.225 1.48434C201.392 -0.555115 183.546 3.40542 164.687 17.3637C146.82 30.3243 127.943 52.2826 110.095 57.2431C91.2577 61.2014 73.449 48.162 54.6515 34.1204C36.8429 21.081 18.0432 8.03935 9.14 1.01964C5.34354 -1.54661 0.220919 1.16659 0.210783 5.74903L0.0198238 92.081C0.00892857 97.0066 3.99313 101.009 8.91881 101.019C17.8375 101.039 36.6659 101.081 54.5034 101.12C73.3317 101.162 91.1692 101.201 109.998 101.243C127.835 101.282 146.663 101.324 164.501 101.364C183.329 101.405 201.167 101.445 219.004 101.484C237.832 101.526 255.67 101.565 274.498 101.607C292.336 101.646 311.164 101.688 329.002 101.727C347.83 101.769 365.667 101.808 384.496 101.85C402.333 101.89 421.162 101.931 430.08 101.951C435.006 101.962 439.008 97.9777 439.019 93.052L439.091 60.3085Z" />
                                <defs>
                                    <radialGradient id="paint0_radial_700_3904" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(219.617 48.4853) rotate(-89.8733) scale(53 219.5)">
                                        <stop stop-color="#A2CDC5" />
                                        <stop offset="1" stop-color="#A2CDC5" stop-opacity="0" />
                                    </radialGradient>
                                    <linearGradient id="paint1_linear_700_3904" x1="219.5" y1="101.485" x2="219.734" y2="-4.51455" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#A2CDC5" />
                                        <stop offset="1" stop-color="#A2CDC5" stop-opacity="0" />
                                    </linearGradient>
                                </defs>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    @endforeach

@endsection

@section('extra-script')
    <script>

        $(document).ready(function () {
            //file uploads js
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

            //Popover Js
            var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
            var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
                return new bootstrap.Popover(popoverTriggerEl)
            })

            $('.js-example-basic-multiple').select2();

            $(".select2insidemodal").select2({
                dropdownParent: $("#sku_modal")
            });
        });

        function copyToClipboard(text) {
            if (window.clipboardData && window.clipboardData.setData) {
                // IE specific code path to prevent textarea being shown while dialog is visible.
                return clipboardData.setData("Text", text);

            } else if (document.queryCommandSupported) {
                if (document.queryCommandSupported("copy")) {
                    var textarea = document.createElement("textarea");
                    textarea.textContent = text;
                    textarea.style.position = "fixed"; // Prevent scrolling to bottom of page in MS Edge.
                    document.body.appendChild(textarea);
                    textarea.select();
                    console.log(textarea)
                    try {
                        console.log('true')
                        document.execCommand("copy"); // Security exception may be thrown by some browsers.
                    } catch (ex) {
                        console.warn("Copy to clipboard failed.", ex);
                        return false;
                    } finally {
                        document.body.removeChild(textarea);
                    }
                }
            }
        }

        function status(clickedBtn) {
            var text = document.getElementById(clickedBtn.dataset.descRef).innerText;
            console.log(text)
            copyToClipboard(text);

            clickedBtn.value = "Copied to clipboard";
            // clickedBtn.disabled = true;
            // clickedBtn.style.color = 'white';
            // clickedBtn.style.background = 'gray';
        }
    </script>
@endsection
