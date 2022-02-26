@extends('seller.layouts.master')

@section('extra-css')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/singleProduct_listing.css')}}">
    <style>
        .error-display {
            color: #FC0909;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/spectrum/1.8.0/spectrum.min.css">
@endsection

@section('content')
    <!-- Main Content Start -->
    <div class="main_content">
        <div class="main_content_lg">
            <div class="common_content_pad_block">
                <div class="cart_top_wrap">
                    <!-- <div class="logo">
                                            <a href="#0">
                                                <img src="assets/image/dashborad_logo.png" alt="logo">
                                            </a>
                                        </div> -->
                    <ul>
                        <li>
                            <div class="top_right_icon">
                                <img src="{{ asset('assets/image/product_view/search_big_icon.png') }}" alt="icon">
                            </div>
                        </li>
                        <li>
                            <div class="top_right_icon cart_wrap">
                                <img src="{{ asset('assets/image/product_view/cart.png') }}" alt="icon">
                            </div>
                        </li>
                        <li>
                            <div class="top_right_icon notification_wrap">
                                <img src="{{ asset('assets/image/product_view/bell.png') }}" alt="icon">
                            </div>
                        </li>
                        <li>
                            <div class="top_right_icon">
                                <img src="{{ asset('assets/image/product_view/account.png') }}" alt="icon">
                            </div>
                        </li>
                        <li>
                            <a href="#0" class="menu_trigger d-lg-none">
                                <svg width="9" height="13" viewBox="0 0 9 13" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8.72577 6.50537L0.755156 12.1304L4.50093 6.50397L0.75 0.880371L8.72577 6.50537Z"
                                        fill="#FFCE55" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="single_product_listing">
                    <div class="common_title">
                        <h2>Single Product Listing</h2>
                    </div>

                    <form id="product_form" method="POST">
                        @csrf
                        <div class="search_input">
                            <select class="search-control" name="search_input">
                                <option selected="selected">Fashion</option>
                                <option>Electronics</option>
                                <option>Beauty & Personal Care</option>
                                <option>Men's Grooming</option>
                                <option>Nutrition & Health Care</option>
                                <option>Baby Care</option>
                                <option>Toys & School Supplies</option>
                                <option>Sports & Fitness</option>
                                <option>Books & Music</option>
                            </select>
                        </div>

                        <div class="selecte_catagory_wrap">
                            <button type="button" class="select_cat_btn" data-bs-toggle="modal"
                                    data-bs-target="#product_list">
                                Selecte Catagory
                            </button>
                        </div>

                        <div class="catagory_parth" data-bs-toggle="modal" data-bs-target="#product_list">
                            <a href=""></a>
                        </div>

                        <div class="product_photos">
                            <div class="product_edit_upload_wrap">
                                <div class="product_info">
                                    <p>Product Photos (0/7)</p>

                                    <a href="#0" class="edit_photos">Edit</a>
                                </div>

                                <div class="photo_upload">
                                    <div class="photo_img_left">
                                        <ul>
                                            <li>
                                                <div class="photo_upload_section">
                                                    <div class="upload_file">
                                                        <div class="plus_img">
                                                            <img src="{{ asset('assets/image/single_product_listing/plus.png') }}"
                                                                 alt="plus">
                                                        </div>
                                                        <p class="extraction">Not vaild Extraction</p>
                                                        <div class="previewImgs">
                                                            <img class="previewImg" src="{{ asset('s.png') }}" alt="image">
                                                        </div>
                                                        <input type="file" size="60" class="preview_img"
                                                               name="product_image[]" id="product_image">
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="photo_upload_section">
                                                    <div class="upload_file">
                                                        <div class="plus_img">
                                                            <img src="{{ asset('assets/image/single_product_listing/plus.png') }}"
                                                                 alt="plus">
                                                        </div>
                                                        <p class="extraction">Not vaild Extraction</p>
                                                        <div class="previewImgs">
                                                            <img class="previewImg" src="{{ asset('s.png') }}" alt="image">
                                                        </div>
                                                        <input type="file" size="60" class="preview_img"
                                                               name="product_image[]" id="product_image">
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="photo_upload_section">
                                                    <div class="upload_file">
                                                        <div class="plus_img">
                                                            <img src="{{ asset('assets/image/single_product_listing/plus.png') }}"
                                                                 alt="plus">
                                                        </div>
                                                        <p class="extraction">Not vaild Extraction</p>
                                                        <div class="previewImgs">
                                                            <img class="previewImg" src="{{ asset('s.png') }}" alt="image">
                                                        </div>
                                                        <input type="file" size="60" class="preview_img"
                                                               name="product_image[]" id="product_image">
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="photo_upload_section">
                                                    <div class="upload_file">
                                                        <div class="plus_img">
                                                            <img src="{{ asset('assets/image/single_product_listing/plus.png') }}"
                                                                 alt="plus">
                                                        </div>
                                                        <p class="extraction">Not vaild Extraction</p>
                                                        <div class="previewImgs">
                                                            <img class="previewImg" src="{{ asset('s.png') }}" alt="image">
                                                        </div>
                                                        <input type="file" size="60" class="preview_img"
                                                               name="product_image[]" id="product_image">
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="photo_upload_section">
                                                    <div class="upload_file">
                                                        <div class="plus_img">
                                                            <img src="{{ asset('assets/image/single_product_listing/plus.png') }}"
                                                                 alt="plus">
                                                        </div>
                                                        <p class="extraction">Not vaild Extraction</p>
                                                        <div class="previewImgs">
                                                            <img class="previewImg" src="{{ asset('s.png') }}" alt="image">
                                                        </div>
                                                        <input type="file" size="60" class="preview_img"
                                                               name="product_image[]" id="product_image">
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="photo_upload_section">
                                                    <div class="upload_file">
                                                        <div class="plus_img">
                                                            <img src="{{asset('assets/image/single_product_listing/video.png')}}"
                                                                 alt="plus">
                                                        </div>
                                                        <p class="extraction">Not vaild Extraction</p>
                                                        <div class="previewImgs">
                                                            <img class="previewImg" src="{{ asset('s.png') }}" alt="image">
                                                        </div>
                                                        <input type="file" size="60" class="preview_img"
                                                               name="product_image[]" id="product_image">
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>

                                        <div class="main_product_img">
                                            <div class="photo_upload_section main_produt_info">
                                                <div class="upload_file">
                                                    <div class="plus_img">
                                                        <img src="{{asset('assets/image/single_product_listing/big_upload.png')}}"
                                                             alt="plus">
                                                    </div>
                                                    <p class="extraction">Not vaild Extraction</p>
                                                    <div class="previewImgs">
                                                        <img class="previewImg" src="{{ asset('s.png') }}" alt="image">
                                                    </div>
                                                    <input type="file" size="60" class="preview_img"
                                                           name="product_image[]" id="product_image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <span id="product_image-error"></span>
                                </div>
                            </div>
                        </div>

                        <div class="price_stock_shipping_address_section mt-5">
                            <div class="cm_title_input">
                                <h2>Price,Stock,Shipping information.</h2>
                            </div>

                            <div class="price_information border_top">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="cm_info_wrap">
                                            <div class="cm_info_inner">
                                                <div class="cm_info_title">
                                                    <h3>Listing Information</h3>
                                                </div>
                                                <div class="info_dec">
                                                    <div class="lable_dec">
                                                        <p>SKU ID: <sup>*</sup></p>
                                                    </div>
                                                    <div class="lable_input">
                                                        <input type="text" name="sku">
                                                    </div>
                                                    <span id="sku-error"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="cm_info_wrap">
                                            <div class="cm_info_inner">
                                                <div class="cm_info_title">
                                                    <h3>Price Details</h3>
                                                </div>
                                                <div class="info_dec">
                                                    <div class="lable_dec">
                                                        <p>MRP: <sup>*</sup></p>
                                                    </div>
                                                    <div class="lable_input price_wrap">
                                                        <div class="price_text">
                                                            <span>₹</span>
                                                        </div>
                                                        <input type="number" name="MRP">
                                                    </div>
                                                    <span id="MRP-error"></span>
                                                </div>
                                                <div class="info_dec">
                                                    <div class="lable_dec">
                                                        <p>Your Seling Price: <sup>*</sup></p>
                                                    </div>
                                                    <div class="lable_input price_wrap">
                                                        <div class="price_text">
                                                            <span>₹</span>
                                                        </div>
                                                        <input type="number" name="selling_price">
                                                    </div>
                                                    <span id="selling_price-error"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="price_information border_top">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="cm_info_wrap">
                                            <div class="cm_info_inner">
                                                <div class="cm_info_title">
                                                    <h3>Tax Details</h3>
                                                </div>
                                                <div class="info_dec">
                                                    <div class="lable_dec">
                                                        <p>HSN Code : <sup>*</sup></p>
                                                    </div>
                                                    <div class="lable_input">
                                                        <input type="text" name="HSN_code">
                                                    </div>
                                                    <span id="HSN_code-error"></span>
                                                </div>
                                                <div class="info_dec">
                                                    <div class="lable_dec">
                                                        <p>Add HSN code Manuly : <sup>*</sup></p>
                                                    </div>
                                                    <div class="lable_input">
                                                        <input type="text" name="HSN_code">
                                                    </div>
                                                    <span id="HSN_code-error"></span>
                                                </div>
                                                <div class="info_dec">

                                                    <div class="lable_dec">
                                                        <p>GST : <sup>*</sup></p>
                                                    </div>
                                                    <div class="lable_dec">
                                                        <div class="dropdown">
                                                            <select class="dropdown-menu single_select" name="GST" id="GST"
                                                                    type="select">
                                                                <option class="dropdown-item" value="">Select</option>
                                                                <option class="dropdown-item" value="2">2</option>
                                                                <option class="dropdown-item" value="3">3</option>
                                                                <option class="dropdown-item" value="4">4</option>
                                                                <option class="dropdown-item" value="5">5</option>
                                                                <option class="dropdown-item" value="6">6</option>
                                                                <option class="dropdown-item" value="7">7</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <span id="GST-error"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="cm_info_wrap">
                                            <div class="cm_info_inner">
                                                <div class="cm_info_title">
                                                    <h3>Inventory Details</h3>
                                                </div>
                                                <div class="info_dec">
                                                    <div class="lable_dec">
                                                        <p>Dishpach in day: <sup>*</sup></p>
                                                    </div>
                                                    <div class="lable_input price_wrap">
                                                        <input type="number" name="dispatch_in_day">
                                                    </div>
                                                    <span id="dispatch_in_day-error"></span>
                                                </div>
                                                <div class="info_dec">
                                                    <div class="lable_dec">
                                                        <p>Stock: <sup>*</sup></p>
                                                    </div>
                                                    <div class="lable_input price_wrap">
                                                        <input type="number" name="quantity">
                                                    </div>
                                                    <span id="quantity-error"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="price_information border_top">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="cm_info_wrap">
                                            <div class="cm_info_inner">
                                                <div class="cm_info_title">
                                                    <h3>Delivery charge to customer </h3>
                                                </div>
                                                <div class="info_dec">
                                                    <div class="lable_dec">
                                                        <p>Local Delivery: <sup>*</sup></p>
                                                    </div>
                                                    <div class="lable_input">
                                                        <input type="number" name="local_delivery_charge">
                                                    </div>
                                                    <span id="local_delivery_charge-error"></span>
                                                </div>
                                                <div class="info_dec">
                                                    <div class="lable_dec">
                                                        <p>Zonal Delivery: <sup>*</sup></p>
                                                    </div>
                                                    <div class="lable_input">
                                                        <input type="number" name="zonal_delivery_charge">
                                                    </div>
                                                    <span id="zonal_delivery_charge-error"></span>
                                                </div>
                                                <div class="info_dec">
                                                    <div class="lable_dec">
                                                        <p>National Delivery: <sup>*</sup></p>
                                                    </div>
                                                    <div class="lable_input">
                                                        <input type="number" name="national_delivery_charge">
                                                    </div>
                                                    <span id="national_delivery_charge-error"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="cm_info_wrap">
                                            <div class="cm_info_inner">
                                                <div class="cm_info_title">
                                                    <h3>Packeges Details</h3>
                                                </div>
                                                <div class="info_dec">
                                                    <div class="lable_dec">
                                                        <p>Packege weight: <sup>*</sup></p>
                                                    </div>
                                                    <div class="lable_input price_wrap">
                                                        <input type="number" name="weight">
                                                    </div>
                                                    <span id="weight-error"></span>
                                                </div>
                                                <div class="info_dec">
                                                    <div class="lable_dec">
                                                        <p>Packege length: <sup>*</sup></p>
                                                    </div>
                                                    <div class="lable_input price_wrap">
                                                        <input type="number" name="length">
                                                    </div>
                                                    <span id="length-error"></span>
                                                </div>
                                                <div class="info_dec">
                                                    <div class="lable_dec">
                                                        <p>Packege width: <sup>*</sup></p>
                                                    </div>
                                                    <div class="lable_input price_wrap">
                                                        <input type="number" name="width">
                                                    </div>
                                                    <span id="width-error"></span>
                                                </div>
                                                <div class="info_dec">
                                                    <div class="lable_dec">
                                                        <p>Packege heigth: <sup>*</sup></p>
                                                    </div>
                                                    <div class="lable_input price_wrap">
                                                        <input type="number" name="height">
                                                    </div>
                                                    <span id="height-error"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="price_stock_shipping_address_section mt-3 mt-lg-4">
                            <div class="cm_title_input">
                                <h2>Product Information.</h2>
                            </div>

                            <div class="price_information border_top">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="cm_info_wrap">
                                            <div class="cm_info_inner">
                                                <div class="cm_info_title">
                                                    <h3>Title Description : <sup style="color: #FC0909;">*</sup></h3>
                                                </div>
                                                <div class="info_dec">
                                                    <div class="text_area_dec w-100">
                                                        <textarea name="title" id="" cols="30" rows="5"
                                                                  class="w-100"></textarea>
                                                    </div>
                                                </div>
                                                <span id="title-error"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="cm_info_wrap">
                                            <div class="cm_info_inner">
                                                <div class="info_dec">
                                                    <div class="lable_dec">
                                                        <p>Manufacturer : <sup>*</sup></p>
                                                    </div>
                                                    <div class="lable_input price_wrap mt-0">
                                                        <div class="price_text">
                                                            <span>₹</span>
                                                        </div>
                                                        <input type="text" name="manufacturer">
                                                    </div>
                                                    <span id="manufacturer-error"></span>
                                                </div>
                                                <div class="info_dec">
                                                    <div class="lable_dec">
                                                        <p>Brand Name: <sup>*</sup></p>
                                                    </div>
                                                    <div class="lable_input price_wrap">
                                                        <div class="price_text">
                                                            <span>₹</span>
                                                        </div>
                                                        <input type="text" name="brand_name">
                                                    </div>
                                                    <span id="brand_name-error"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="price_information border_top">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="cm_info_wrap">
                                            <div class="cm_info_inner">
                                                <div class="info_dec mt-0">
                                                    <div class="lable_dec">
                                                        <p>Color: <sup>*</sup></p>
                                                    </div>
                                                    <div class="lable_input">
                                                        <input type="text" name="color" id="color">
                                                    </div>
                                                    <span id="color-error"></span>
                                                </div>
                                                <div class="info_dec">
                                                    <div class="lable_dec">
                                                        <p>Size : <sup>*</sup></p>
                                                    </div>
                                                    <div class="lable_input">
                                                        <input type="text" name="size" id="size">
                                                    </div>
                                                    <span id="size-error"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="cm_info_wrap">
                                            <div class="cm_info_inner">
                                                <div class="info_dec mt-0">
                                                    <div class="lable_dec">
                                                        <p>Model No: <sup>*</sup></p>
                                                    </div>
                                                    <div class="lable_input price_wrap">
                                                        <input type="text" name="model_no" id="model_no">
                                                    </div>
                                                    <span id="model_no-error"></span>
                                                </div>
                                                <div class="info_dec">
                                                    <div class="lable_dec">
                                                        <p>Pack of: <sup>*</sup></p>
                                                    </div>
                                                    <div class="lable_input price_wrap">
                                                        <input type="text" name="pack_of" id="pack_of">
                                                    </div>
                                                    <span id="pack_of-error"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="price_information border_top">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="product_variant_wrap">
                                            <div class="product_variant">
                                                <p>Product Veriant</p>
                                                <a href="#0" data-bs-toggle="modal" data-bs-target="#sku_modal">Add
                                                                                                                Varient</a>
                                            </div>

                                            <div >
                                                <ul class="variant_lisr">
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="price_information border_top">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="product_dec_wrap">
                                            <div class="cm_info_title">
                                                <h3>Product Description: <sup style="color: #FC0909;">*</sup></h3>
                                            </div>

                                            <div class="add_product_dec">
                                                <div class="ck-editor-block">
                                                    <textarea name="product_description" id="product_description"
                                                              placeholder="Start Typing.."></textarea>
                                                </div>
                                                <span id="product_description-error"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="price_stock_shipping_address_section">
                            <div class="cm_title_input">
                                <h2>Additional Information.</h2>
                            </div>

                            <div class="price_information border_top">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="add_info">
                                            <div class="lable_dec">
                                                <p>Key word: <sup>*</sup></p>
                                                <span>(Max 10 Keyword)</span>
                                            </div>

                                            <div class="key_word_select cm_multi_select">
                                                <select class="js-example-basic-multiple" name="keyword[]"
                                                        multiple="multiple" id="keyword" type="select">
                                                </select>
                                                <span id="keyword-error"></span>
                                            </div>
                                        </div>

                                        <div class="add_info">
                                            <div class="lable_dec">
                                                <p>Product fetures:<sup>*</sup></p>
                                                <span>(Max 15key Fetures)</span>
                                            </div>

                                            <div class="key_word_select cm_multi_select">
                                                <select class="js-example-basic-multiple" name="key_features[]"
                                                        multiple="multiple" id="key_features" type="select">
                                                    <option value="AL">Red T-shirt</option>
                                                    <option value="WY">Red T-shirt 1</option>
                                                </select>
                                                <span id="key_features-error"></span>
                                            </div>
                                        </div>

                                        <div class="add_info">
                                            <div class="lable_dec">
                                                <p>Meta Tegs: <sup>*</sup></p>
                                                <span>(Max 10 Tegs)</span>
                                            </div>

                                            <div class="key_word_select cm_multi_select">
                                                <select class="js-example-basic-multiple" name="meta_tags[]"
                                                        multiple="multiple" id="meta_tags" type="select">
                                                    <option value="AL">T-shirt</option>
                                                    <option value="WY">T-shirt 1</option>
                                                </select>
                                                <span id="meta_tags-error"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="return_order_wrap">
                                <div class="row">
                                    <div class="col-xl-5 col-md-6">
                                        <div class="return_info_dec">
                                            <div class="lable_dec">
                                                <p>Return Order: <sup>*</sup></p>
                                            </div>
                                            <div class="select_wrap">
                                                <div class="dropdown">
                                                    <select class="dropdown-menu single_select" name="return_order"
                                                            id="return_order" type="select">
                                                        <option class="dropdown-item" value="">Select</option>
                                                        <option class="dropdown-item" value="1">Yes</option>
                                                        <option class="dropdown-item" value="0">No</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <span id="return_order-error"></span>
                                        </div>
                                    </div>
                                    <div class="col-xl-5 col-md-6">
                                        <div class="return_info_dec">
                                            <div class="lable_dec">
                                                <p>Return Order in day: <sup>*</sup></p>
                                            </div>
                                            <div class="select_wrap">
                                                <div class="dropdown">
                                                    <select class="dropdown-menu single_select" name="return_order_in_day"
                                                            id="return_order_in_day" type="select">
                                                        <option class="dropdown-item" value="">Select</option>
                                                        <option class="dropdown-item" value="2">2</option>
                                                        <option class="dropdown-item" value="3">3</option>
                                                        <option class="dropdown-item" value="4">4</option>
                                                        <option class="dropdown-item" value="5">5</option>
                                                        <option class="dropdown-item" value="6">6</option>
                                                        <option class="dropdown-item" value="7">7</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <span id="return_order_in_day-error"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row date_wrap">
                                    <div class="col-md-12">
                                        <div class="return_info_dec">
                                            <div class="sale_wrap">
                                                <div class="lable_dec">
                                                    <p>Sale price: <sup>*</sup></p>
                                                </div>
                                                <div class="lable_input price_wrap">
                                                    <div class="price_text">
                                                        <span>₹</span>
                                                    </div>
                                                    <input type="text" name="sale_price" id="sale_price">
                                                </div>
                                                <span id="sale_price-error"></span>
                                            </div>

                                            <div class="start_end_date">
                                                <div class="date_title_wrap">
                                                    <p>Sale Start Date:</p>
                                                    <div class="position-relative">
                                                        <input type="text" placeholder="dd/mm/yyyy"
                                                               onfocus="(this.type='date')" name="sale_start_date">
                                                        <div class="cal_img">
                                                            <img src="{{asset('assets/image/single_product_listing/calender.png')}}"
                                                                 alt="icon">
                                                        </div>
                                                        <span id="sale_start_date-error"></span>
                                                    </div>
                                                </div>
                                                <div class="date_title_wrap">
                                                    <p>Sale End Date:</p>
                                                    <div class="position-relative">
                                                        <input type="text" placeholder="dd/mm/yyyy"
                                                               onfocus="(this.type='date')" name="sale_end_date">
                                                        <div class="cal_img">
                                                            <img src="{{asset('assets/image/single_product_listing/calender.png')}}"
                                                                 alt="icon">
                                                        </div>
                                                        <span id="sale_end_date-error"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xl-5 col-md-6">
                                        <div class="return_info_dec">
                                            <div class="lable_dec">
                                                <p>Country of Origin: <sup>*</sup></p>
                                            </div>
                                            <div class="return_input">
                                                <input type="text" name="country_of_origin" id="country_of_origin">
                                            </div>
                                            <span id="country_of_origin-error"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="status" value="0">
                        <div class="last_btn">
                            <button id="cancelForm">Cancle</button>
                            <button type="submit" id="#draft">Draft</button>
                            {{-- <a href="#0">Upload</a> --}}
                            <button type="submit" id="#upload">Upload</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Content End -->


    <!-- Checkin Bestätigung Modal -->
    <div class="modal fade  product_list_wrap" id="product_list" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content terimin_content">
                <div class="modal-body">
                    <div class="modal_close_btn">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="variant_form_close"></button>
                    </div>
                    <div class="category_menu">
                        <div class="first_menu common_menu_wrap">
                            <div class="top_menu">
                                <ul>
                                    <li>
                                        <a href="#0" data-menu="fashion">Fashion</a>
                                    </li>
                                    <li>
                                        <a href="#0" data-menu="electronics">Electronics</a>
                                    </li>
                                    <li>
                                        <a href="#0" data-menu="home">Home</a>
                                    </li>
                                    <li>
                                        <a href="#0" data-menu="beauty_personal_care">Beauty & Personal Care</a>
                                    </li>
                                    <li>
                                        <a href="#0" data-menu="mens_grooming">Men's Grooming</a>
                                    </li>
                                    <li>
                                        <a href="#0" data-menu="nutrition">Nutrition & Health Care</a>
                                    </li>
                                    <li>
                                        <a href="#0" data-menu="babycare">Baby Care</a>
                                    </li>
                                    <li>
                                        <a href="#0" data-menu="toys_school_supplies">Toys & School Supplies</a>
                                    </li>
                                    <li>
                                        <a href="#0" data-menu="sports_fitness">Sports & Fitness</a>
                                    </li>
                                    <li>
                                        <a href="#0" data-menu="books_music">Books & Music</a>
                                    </li>
                                    <li>
                                        <a href="#0" data-menu="stationery_office_supplies">Stationery & Office Supplies</a>
                                    </li>
                                    <li>
                                        <a href="#0" data-menu="auto_accessories">Auto Accessories</a>
                                    </li>
                                    <li>
                                        <a href="#0" data-menu="safety_hygiene_essentials">Safety & Hygiene Essentials</a>
                                    </li>
                                    <li>
                                        <a href="#0" data-menu="mobiles">Mobiles</a>
                                    </li>
                                    <li>
                                        <a href="#0" data-menu="orgenics">Orgenics</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="sec_menu common_menu_wrap">
                            <div class="fashion">
                                <ul>
                                    <li>
                                        <a href="#0" data-menu="mentop">Men's Top Wear</a>
                                    </li>
                                    <li>
                                        <a href="#0" data-menu="menbottom">Men's Bottom Wear</a>
                                    </li>
                                    <li>
                                        <a href="#0" data-menu="womenethnic">Women Ethnic</a>
                                    </li>
                                    <li>
                                        <a href="#0" data-menu="womenwestern">Women Western</a>
                                    </li>
                                    <li>
                                        <a href="#0" data-menu="menfootwear">Men Footwear</a>
                                    </li>
                                    <li>
                                        <a href="#0" data-menu="womenfootwear">Women Footwear</a>
                                    </li>
                                    <li>
                                        <a href="#0" data-menu="watchesacc">Watches and Accessories</a>
                                    </li>
                                    <li>
                                        <a href="#0" data-menu="bagssuitcasesluggage">Bags, Suitcases & Luggage</a>
                                    </li>
                                    <li>
                                        <a href="#0" data-menu="kids">Kids</a>
                                    </li>
                                    <li>
                                        <a href="#0" data-menu="essentials">Essentials</a>
                                    </li>
                                    <li>
                                        <a href="#0" data-menu="winter">Winter</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="electronics">
                                <ul>
                                    <li>
                                        <a href="#0" data-menu="audio">Audio</a>
                                    </li>
                                    <li>
                                        <a href="#0" data-menu="camerasaccessories">Cameras & Accessories</a>
                                    </li>
                                    <li>
                                        <a href="#0" data-menu="computerperipherals">Computer Peripherals</a>
                                    </li>
                                    <li>
                                        <a href="#0" data-menu="healthpersonalcare">Health & Personal Care</a>
                                    </li>
                                    <li>
                                        <a href="#0" data-menu="laptopaccessories">Laptop Accessories</a>
                                    </li>
                                    <li>
                                        <a href="#0" data-menu="laptopanddesktop">Laptop and Desktop</a>
                                    </li>
                                    <li>
                                        <a href="#0" data-menu="mobileAccessory">MobileAccessory</a>
                                    </li>
                                    <li>
                                        <a href="#0" data-menu="powerbank">Powerbank</a>
                                    </li>
                                    <li>
                                        <a href="#0" data-menu="smarthomeautomation">Smart Home automation</a>
                                    </li>
                                    <li>
                                        <a href="#0" data-menu="smartwearables">Smart Wearables</a>
                                    </li>
                                    <li>
                                        <a href="#0" data-menu="storage">Storage</a>
                                    </li>
                                    <li>
                                        <a href="#0" data-menu="tablets">Tablets</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="home">
                                <ul>
                                    <li>
                                        <a href="#0" data-menu="homefurnishings">Home Furnishings</a>
                                    </li>
                                    <li>
                                        <a href="#0" data-menu="livingroom">Living Room</a>
                                    </li>
                                    <li>
                                        <a href="#0" data-menu="kitchendining">Kitchen & Dining</a>
                                    </li>
                                    <li>
                                        <a href="#0" data-menu="bedroomroom">Bedroom room</a>
                                    </li>
                                    <li>
                                        <a href="#0" data-menu="homedecor">Home Decor</a>
                                    </li>
                                    <li>
                                        <a href="#0" data-menu="toolsutility">Tools & Utility</a>
                                    </li>
                                    <li>
                                        <a href="#0" data-menu="lightingselectricals">Lightings & Electricals</a>
                                    </li>
                                    <li>
                                        <a href="#0" data-menu="spacesaving">Space Saving</a>
                                    </li>
                                    <li>
                                        <a href="#0" data-menu="cleaningbath">Cleaning & Bath</a>
                                    </li>
                                    <li>
                                        <a href="#0" data-menu="kidsfurniture">Kids Furniture</a>
                                    </li>
                                    <li>
                                        <a href="#0" data-menu="petgardening">Pet & Gardening</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="beauty_personal_care">
                                <ul>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="bathoralcare">Bath & Oral Care</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="personalhygiene">Personal Hygiene</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="eyemakeup">Eye Makeup</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="facemakeup">Face Makeup</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="lipmakeup">Lip Makeup</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="haircare">Hair Care</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="bathessentials">Bath Essentials</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="womenspersonalhygiene">Women's Personal Hygiene</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="bodyskincare">Body & Skin Care</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="luxury">Luxury</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="mens_grooming">
                                <ul>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="facewashes">Face Washes</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="beardoils">Beard Oils</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="hairstyling">Hair Styling</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="shavingessentials">Shaving Essentials</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="aftershave">Aftershave</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="facecreamsfacepacks">Face Creams & Face Packs</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="soapsbodywashes">Soaps & Bodywashes</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="mensgroomingcombos">Men's Grooming Combos</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="sexualwellness">Sexual Wellness</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="nutrition">
                                <ul>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="Masks">masks</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="ayurvedicsupplements">Ayurvedic Supplements</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="healthdrinks">Health Drinks</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="Vitamin Supplements">vitaminsupplements</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="proteinsupplements">Protein Supplements</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="womenssafety">Women's Safety</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="homemedicines">Home Medicines</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="homemedicalsupplies">Home Medical Supplies</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="healthcarecomos">Healthcare Comos</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="professionalmedicalsupplies">Professional Medical
                                                                                             Supplies</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="babycare">
                                <ul>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="babydiapers">Baby Diapers</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="babywipes">Baby Wipes</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="babybathgrooming">Baby Bath & Grooming</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="babygiftsetscombo">Baby Gift Sets & Combo</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="babymedicalhealthcare">Baby Medical & Health Care</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="nursingbreastfeeding">Nursing & Breast Feeding</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="feedingbottlesutensilsaccessories">Feeding Bottles, Utensils
                                                                                                   & Accessories</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="babyfood">Baby Food</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="babybedding">Baby Bedding</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="babygear">Baby Gear</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="toys_school_supplies">
                                <ul>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="remotecontroltoys">Remote Control Toys</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="softtoys">Soft Toys</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="puzzles">Puzzles</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="boardgames">Board Games</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="learningeducationaltoys">Learning & Educational Toys</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="carsdiecastvehicles">Cars & Die-Cast Vehicles</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="babytoys">Baby Toys</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="giftingtoys">Gifting Toys</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="schoolbagsbackpacks">School Bags & Backpacks</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="schoolsupplies">School Supplies</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="sports_fitness">
                                <ul>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="badminton">Badminton</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="cricket">Cricket</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="cycling">Cycling</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="football">Football</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="fitnessequipments">Fitness Equipments</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="supports">Supports</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="shakerssippers">Shakers & Sippers</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="gymgloves">Gym Gloves</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="dumbbells">Dumbbells</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="yoga">Yoga</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="books_music">
                                <ul>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="testprep">Test prep</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="academics">Academics</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="literaturefiction">Literature & Fiction</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="nonfiction">Non Fiction</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="youngreaders">Young Readers</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="elearning">E-Learning</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="indianlanguages">Indian Languages</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="acousticguitars">Acoustic Guitars</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="musicalkeyboards">Musical keyboards</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="microphones">Microphones</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="stageequipmentaccessories">Stage Equipment & Accessories</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="stationery_office_supplies">
                                <ul>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="remotecontroltoys">Remote Control Toys</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="softtoys">Soft Toys</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="puzzles">Puzzles</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="boardgames">Board Games</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="learningeducationaltoys">Learning & Educational Toys</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="carsdiecastvehicles">Cars & Die-Cast Vehicles</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="babytoys">Baby Toys</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="giftingtoys">Gifting Toys</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="schoolbagsbackpacks">School Bags & Backpacks</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="schoolsupplies">School Supplies</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="auto_accessories">
                                <ul>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="bikeessentials">Bike Essentials</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="carbikecovers">Car & Bike Covers</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="carairfreshener">CarAirFreshener</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="carbluetoothdevice">CarBluetoothDevice</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="carLubricant">CarLubricant</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="carvacuumcleaner">CarVacuumCleaner</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="carmediaplayer">CarMediaPlayer</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="helmet">Helmet</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="vehiclewashingcleaningproducts">Vehicle Washing & Cleaning
                                                                                                Products</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="Tyres">tyres</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="safety_hygiene_essentials">
                                <ul>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="mask">Mask</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="sanitizers">Sanitizers</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="handwash">Hand Wash</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="gloves">Gloves</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="ppekits">PPE Kits</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="faceshields">Face Shields</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="uvsterilizerbox">UV Sterilizer Box</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="safetygoggles">Safety Goggles</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="vitaminsforimmunity">Vitamins for Immunity</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="mobiles">
                                <ul>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="apple">Apple</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="samsung">Samsung </a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="onePlus">OnePlus</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="vivo">Vivo</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="oppo">oppo</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="asus">Asus</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="LG">lg</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="motorola">motorola</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="honor">honor</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="xiaomi">Xiaomi</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="realme">Realme </a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="poco">Poco </a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="nokia">Nokia </a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="micromax">Micromax </a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="intex">Intex </a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="lava">Lava </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="orgenics">
                                <ul>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="bodywash">Body Wash</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="facewash">Face Wash </a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="lipbalm">Lip Balm</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="eyecream">Eye Cream</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="acnegel">acnegel</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="shope">shope</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="third_menu common_menu_wrap">
                            <div class="mentop">
                                <ul>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="mentshirt">Men's T-Shirts</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="mencsual">Men's Casual Shirts</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="menformalshirts">Men's Formal Shirts</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="menskurtas">Men's Kurtas</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="mensethnicsets">Men's Ethnic Sets</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="mensblazers">Men's Blazers</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="mensraincoat">Men's Raincoat</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="menswindcheaters">Men's Windcheaters</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="menssuit">Men's Suit</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="mensfabrics">Men's Fabrics</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="menbottom">
                                <ul>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="mentshirt">Men's Jeans</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="mencsual">Men's Trousers</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="menstrackpants">Men's Trackpants</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="mensshorts">Men's Shorts</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="menscargos">Men's Cargos</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="mensthreefourths">Men's Threefourths</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="menspyjamasloungepants">Men's Pyjamas & Loungepants</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="mensdhoti">Men's Dhoti</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="menformalshirts">Men's Ethnic Pyjama</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="womenethnic">
                                <ul>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="womensarees">Women Sarees</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="womenkurtaskurtis">Women Kurtas & Kurtis</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="womenkurtasetssalwarsuits">Women Kurta Sets & Salwar
                                                                                           Suits</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="wthnicdresses">Ethnic Dresses</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="womendressmaterials">Women Dress Materials</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="womengowns">Women Gowns</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="womenlehengacholis">Women Lehenga Cholis</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="womenleggingspatialas">Women Leggings & Patialas</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="womenpalazzosshararas">Women Palazzos & Shararas</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="womenblouse">Women Blouse</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="womendupatta">Women Dupatta</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="womenwestern">
                                <ul>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="womensarees">Women Tops</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="Women Kurtas & Kurtis">Women Kurtas & Kurtis</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="Women T-shirts & Polo T-shirts">Women T-shirts & Polo
                                                                                                T-shirts</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="Women Jeans">Women Jeans</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="Women Nighties & Night Dresses">Women Nighties & Night
                                                                                                Dresses</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="Women Nightsuit">Women Nightsuit</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="Women Track Pants">Women Track Pants</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="Women Trouser">Women Trouser</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="Women Jumpsuit">Women Jumpsuit</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="womenblouse">Women Shapewear</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="womendupatta">Women Sports Bra</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="menfootwear">
                                <ul>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="menssportsshoes">Men's Sports Shoes</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="Menscasualshoes">Men's Casual Shoes</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="menssandalsfloaters">Men's Sandals & Floaters</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="mensslippersflipflops">Men's Slippers & Flip Flops</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="mensformalshoes">Men's Formal Shoes</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="mensethnicshoes">Men's Ethnic Shoes</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="activefootwear">Active Footwear</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="combofootwear">Combo Footwear</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="shoecare">Shoe Care</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="womenfootwear">
                                <ul>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="womenflats">Women Flats</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="womenheels">Women Heels</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="womenwedges">Women Wedges</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="womenslipperflipflops">Women Slipper Flip Flops</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="womencasualshoes">Women Casual Shoes</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="womensportsshoes">Women Sports Shoes</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="womenballerinas">Women Ballerinas</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="womenethnicshoes">Women Ethnic Shoes</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="womensneakers">Women Sneakers</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="womenwalkingshoes">Women Walking Shoes</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="womenboots">Women Boots</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="watchesacc">
                                <ul>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="menwomenwatches">Men & Women Watches</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="menwomensunglasses">Men & Women Sunglasses</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="Wallets">Wallets</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="menwomenbelts">Men & Women Belts</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="womenfashionjewellery">Women Fashion Jewellery</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="menfashionjewellery">Men Fashion Jewellery</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="preciousjewellery">Precious Jewellery</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="preciouscoinsbars">Precious Coins & Bars</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="framescontactlenses">Frames & Contact Lenses</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="bagssuitcasesluggage">
                                <ul>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="backpacks">Backpacks</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="suitcasestrolleys">Suitcases & Trolleys</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="dufflebags">dufflebags</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="rucksacks">Rucksacks</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="handbags">Handbags</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="slingbags">Slingbags</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="womensclutcheswallets">Women's Clutches & Wallets</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="messengerbags">Messenger Bags</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="travelaccessories">Travel Accessories</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="kids">
                                <ul>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="girlsdresses">Girls Dresses</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="boysgirlstshirts">Boys & Girls Tshirts</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="boysgirlscombosets">Boys & Girls Combosets</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="boysgirlsethnicwear">Boys & Girls Ethnic Wear</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="boysgirlsjeans">Boys & Girls Jeans</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="boysgirlsshorts">Boys & Girls Shorts</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="boysgirlstrackpants">Boys & Girls Trackpants</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="boysgirlsinnerwear">Boys & Girls Innerwear</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="infantwear">Infant Wear</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="kidsslipperflipflops">Kids Slipper Flip Flops</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="kidssportsshoes">Kids Sports Shoes</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="essentials">
                                <ul>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="mensbriefstrunks">Men's Briefs & Trunks</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="mensvests">Men's Vests</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="mensboxers">Men's Boxers</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="womenlingeriesets">Women Lingerie Sets</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="womenbra">Women Bra</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="womenpanty">Women Panty</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="womensarees">Women Sarees</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="womenkurtas">Women Kurtas</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="womenkurtasetssalwarsuits">Women Kurta Sets & Salwar
                                                                                           Suits</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="boysinnerwear">Boys Innerwear</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="girlsinnerwear">Girls Innerwear</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="womenslipperflipflops">Women Slipper Flip Flops</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="winter">
                                <ul>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="mensjackets">Men's Jackets</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="menssweatshirts">Men's Sweatshirts</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="Mmenssweaters">Men's Sweaters</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="mensthermals">Men's Thermals</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="womensjackets">Women's Jackets</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="womenssweatshirts">Women's Sweatshirts</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="womenssweaterscardigans">Women's Sweaters & Cardigans</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="womensshrugs">Women's Shrugs</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="kidssweatShirts">Kids SweatShirts</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="kidsjackets">Kids Jackets</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="audio">
                                <ul>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="bluetoothheadphones">Bluetooth Headphones</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="wiredheadphones">Wired Headphones</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="truewirelessearbuds">True Wireless Earbuds</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="bluetoothspeakers">Bluetooth Speakers</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="soundbars">Soundbars</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="hometheatres">Home Theatres</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="tvstreamingdevice">TV Streaming Device</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="remotecontrol">Remote Control</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="dthsettopbox">DTH Set top box</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="headphonespouchcasecovers">Headphones Pouch & Case
                                                                                           Covers</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="camerasaccessories">
                                <ul>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="dslrmirrorless">DSLR & Mirrorless</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="sportsaction">Sports & action</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="pointshoot">Point & Shoot</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="instantcameras">Instant Cameras</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="camcorders">Camcorders</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="cameratripods">Camera tripods</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="cameralenses">Camera Lenses</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="drone">Drone</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="flashes">Flashes</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="binoculars">Binoculars</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="othercameraaccessories">Other Camera Accessories</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="computerperipherals">
                                <ul>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="printers">Printers</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="monitors">Monitors</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="projectors">Projectors</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="portableprojectors">Portable Projectors</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="toners">Toners</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="inkcartridges">Ink Cartridges</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="inkbottles">Ink Bottles</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="receiptprinters">Receipt Printers</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="laminationmachines">Lamination Machines</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="notecountingmachines">Note Counting Machines</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="barcodescanners">Barcode Scanners</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="currencydetectors">Currency Detectors</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="healthpersonalcare">
                                <ul>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="trimmers">Trimmers</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="shavers">shavers</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="hairstraighteners">Hair Straighteners</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="hairdryers">Hair Dryers</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="epilators">Epilators</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="glucometersandaccessories">Glucometers And Accessories</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="bloodpressuremonitors">Blood Pressure Monitors</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="digitalthermometers">Digital Thermometers</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="weighingscales">Weighing Scales</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="massagers">Massagers</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="nebulizers">Nebulizers</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="vaporizers">vaporizers</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="laptopaccessories">
                                <ul>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="mouse">Mouse</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="laptopkeyboards">Laptop Keyboards</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="router">Router</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="ups">UPS</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="usbgadgets">USB Gadgets</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="securitysoftware">Security Software</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="laptopbattery">Laptop Battery</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="laptopadapter">Laptop Adapter</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="wirelessusbadapter">Wireless USB Adapter</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="processor">Processor</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="laptopanddesktop">
                                <ul>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="laptops">Laptops</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="gaminglaptops">Gaming Laptops</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="desktoppcs">Desktop PCs</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="allinonepcs">All In One PCs</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="minipcs">minipcs</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="towerpcs">Tower PCs</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="pc">PC</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="mobileAccessory">
                                <ul>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="plaincases">Plain Cases</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="designercases">Designer Cases</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="screenguards">Screen Guards</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="cameralensprotectors">Camera Lens Protectors</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="tabletaccessories">Tablet Accessories</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="mobileCable">MobileCable</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="mobilecharger">MobileCharger</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="mobileflash">MobileFlash</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="mobileusbgadget">MobileUSBGadget</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="mobilesaccessoriescombos">Mobiles Accessories Combos</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="powerbank">
                                <ul>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="powerbank">Powerbank</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="smarthomeautomation">
                                <ul>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="smartassistants">Smart Assistants</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="smartlights">Smart Lights</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="smartcameras">Smart Cameras</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="smartswitches">Smart Switches</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="smartdoorlocks">Smart Door locks</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="sensorsalarms">Sensors & Alarms</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="smartwearables">
                                <ul>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="smartwatches">Smart Watches</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="smartbands">Smart Bands</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="smartglasses">Smart Glasses</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="storage">
                                <ul>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="mobilememorycard">MobileMemoryCard</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="computerstoragependrive">ComputerStoragePendrive</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="mobilestoragependrive">MobileStoragePendrive</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="externalharddrive">ExternalHardDrive</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="internalharddrive">InternalHardDrive</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="tablets">
                                <ul>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="tabletswithcallfacility">Tablets With Call Facility</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="tabletswithoutcallfacility">Tablets Without Call
                                                                                            Facility</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="homefurnishings">
                                <ul>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="bedlinens">Bed Linens</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="bedsheets">Bedsheets</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="blankets">Blankets</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="curtainsaccessories">Curtains & Accessories</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="bathlinen">Bath linen</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="floorcoverings">Floor coverings</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="coversprotectors">Covers & protectors</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="cushionspillows">Cushions & Pillows</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="kitchenlinensets">Kitchen Linen Sets</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="tablelinensets">Table Linen Sets</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="sofacurtainfabrics">Sofa & curtain fabrics</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="brandedcollections">Branded Collections</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="livingroom">
                                <ul>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="sofassetssectionals">Sofas Sets & Sectionals</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="tvunits">TV Units</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="diningsets">Dining Sets</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="coffeetables">Coffee Tables</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="sofabeds">Sofa Beds</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="recliners">Recliners</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="livingroomchairs">Living Room Chairs</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="cabinetdrawers">Cabinet & Drawers</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="bookshelves">Bookshelves</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="shoeracks">Shoe Racks</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="officetables">Office Tables</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="officechairs">Office Chairs</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="kitchendining">
                                <ul>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="cookware">Cookware</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="lunchboxesbottlesflasks">Lunchboxes, Bottles & Flasks</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="kniveschopperscutters">Knives, Choppers & Cutters</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="gastovesaccessories">Gas Stoves & Accessories</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="kitchentools">Kitchen tools</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="tablewaredinnerware">Tableware & Dinnerware</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="containerskitchenstorage">Containers & Kitchen Storage</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="barware">Barware</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="bakeware">bakeware</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="handjuicersgrinders">Handjuicers & Grinders</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="bedroomroom">
                                <ul>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="mattresses">Mattresses</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="beds">Beds</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="wardrobes">Wardrobes</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="sidetables">Side Tables</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="tvunits">TV Units</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="officetables">Office Tables</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="officechairs">Office Chairs</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="bookshelves">Bookshelves</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="barcabinets">Bar Cabinets</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="barstools">Bar Stools</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="rockingchairs">Rocking Chairs</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="benches">Benches</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="homedecor">
                                <ul>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="lightings">Lightings</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="stickerswallpapers">Stickers & Wallpapers</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="paintingsposters">Paintings & Posters</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="clocks">Clocks</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="showpiecesdecoratives">Showpieces & Decoratives</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="walldecor">Wall Decor</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="flowersvases">Flowers & Vases</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="homefragrances">Home Fragrances</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="windchimesdreamcatcher">Windchimes & Dream catcher</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="photoframesalbums">Photo frames & Albums</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="diyascandlesholders">Diyas, Candles & Holders</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="toolsutility">
                                <ul>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="handtools">Hand tools</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="powertools">Power Tools</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="measuringtools">Measuring Tools</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="homestorageorganizers">Home Storage & Organizers</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="umbrellas">Umbrellas</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="appliancetrolleystands">Appliance Trolley & Stands</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="clothdryerstand">Cloth Dryer Stand</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="laundaryorganization">Laundary Organization</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="locksecurity">Lock & Security</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="firepersonalsafety">Fire & Personal Safety</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="lightingselectricals">
                                <ul>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="bulbs">Bulbs</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="emergencylights">Emergency Lights</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="torches">Torches</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="tubelights">Tubelights</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="extensioncords">Extension Cords</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="outdoorlamps">Outdoor Lamps</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="batteries">Batteries</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="electricalWire">ElectricalWire</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="electricalSocket">ElectricalSocket</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="electricDoorBell">ElectricDoorBell</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="solarlightspanelsbatteries">Solar Lights, Panels &
                                                                                            Batteries</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="electricalhardware">Electrical Hardware</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="spacesaving">
                                <ul>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="portablelaptoptables">Portable Laptop Tables</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="collapsiblewardrobes">Collapsible Wardrobes</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="beanbagscovers">Bean Bags & Covers</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="shoeracks">Shoe Racks</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="cabinetdrawers">Cabinet Drawers</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="inflatablesofas">Inflatable Sofas</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="hammockswings">Hammock Swings</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="hometemples">Home Temples</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="bookshelves">Bookshelves</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="tvmounts">TV Mounts</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="kitchentrolley">Kitchen Trolley</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="kitchencabinet">Kitchen Cabinet</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="cleaningbath">
                                <ul>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="mops">Mops</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="cleaningsupplies">Cleaning Supplies</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="householdsupplies">House Hold supplies</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="airfresheners">Air Fresheners</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="cleaninggloves">Cleaning Gloves</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="liquiddetergents">Liquid Detergents</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="tapsfaucet">Taps & Faucet</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="toothbrushholder">Toothbrush holder</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="bathroomrackshelves">Bathroom Rack & Shelves</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="showerheads">Shower Heads</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="bathkitchenfittings">Bath & Kitchen Fittings</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="bathroomaccesorries">Bathroom Accesorries</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="kidsfurniture">
                                <ul>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="bunkbeds">Bunk Beds</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="kidsseating">Kids' Seating</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="kidstable">Kids' Table</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="kidschairs">Kids' Chairs</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="kidssofas">Kids' Sofas</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="bookshelves">Bookshelves</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="chestofdrawers">Chest of Drawers</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="cupboards">Cupboards</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="shoeracks">Shoe Racks</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="kidsbeanbags">Kids' Bean Bags</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="portablepool">Portable Pool</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="sofabeds">Sofa Beds</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="petgardening">
                                <ul>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="plantseeds">Plant Seeds</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="soilmanure">Soil Manure</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="potsplanters">Pots & Planters</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="plantplanters">Plant & Planters</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="gardentoolset">garden tool set</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="wateringequipments">watering Equipments</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="dogessentials">Dog Essentials</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="catessentials">Cat Essentials</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="fishaquatic">Fish & Aquatic</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="tvmounts">Pet Grooming & Hygiene</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="pettoys">Pet Toys</a>
                                    </li>
                                    <li data-bs-dismiss="modal" aria-label="Close">
                                        <a href="#0" data-menu="pethealthsafety">Pet Health & Safety</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product_bottom_shape">
                    <svg viewBox="0 0 440 102" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M439.091 60.3085C439.107 53.1509 435.834 46.3828 430.213 41.9511C421.31 34.9314 402.51 21.8898 384.677 19.8503C365.853 17.8087 347.996 26.7692 329.163 28.7276C311.321 30.6881 292.502 26.6465 274.68 19.607C255.867 12.5654 238.049 3.52598 219.225 1.48434C201.392 -0.555115 183.546 3.40542 164.687 17.3637C146.82 30.3243 127.943 52.2826 110.095 57.2431C91.2577 61.2014 73.449 48.162 54.6515 34.1204C36.8429 21.081 18.0432 8.03935 9.14 1.01964C5.34354 -1.54661 0.220919 1.16659 0.210783 5.74903L0.0198238 92.081C0.00892857 97.0066 3.99313 101.009 8.91881 101.019C17.8375 101.039 36.6659 101.081 54.5034 101.12C73.3317 101.162 91.1692 101.201 109.998 101.243C127.835 101.282 146.663 101.324 164.501 101.364C183.329 101.405 201.167 101.445 219.004 101.484C237.832 101.526 255.67 101.565 274.498 101.607C292.336 101.646 311.164 101.688 329.002 101.727C347.83 101.769 365.667 101.808 384.496 101.85C402.333 101.89 421.162 101.931 430.08 101.951C435.006 101.962 439.008 97.9777 439.019 93.052L439.091 60.3085Z"
                              fill="url(#paint0_radial_700_3904)" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M439.091 60.3085C439.107 53.1509 435.834 46.3828 430.213 41.9511C421.31 34.9314 402.51 21.8898 384.677 19.8503C365.853 17.8087 347.996 26.7692 329.163 28.7276C311.321 30.6881 292.502 26.6465 274.68 19.607C255.867 12.5654 238.049 3.52598 219.225 1.48434C201.392 -0.555115 183.546 3.40542 164.687 17.3637C146.82 30.3243 127.943 52.2826 110.095 57.2431C91.2577 61.2014 73.449 48.162 54.6515 34.1204C36.8429 21.081 18.0432 8.03935 9.14 1.01964C5.34354 -1.54661 0.220919 1.16659 0.210783 5.74903L0.0198238 92.081C0.00892857 97.0066 3.99313 101.009 8.91881 101.019C17.8375 101.039 36.6659 101.081 54.5034 101.12C73.3317 101.162 91.1692 101.201 109.998 101.243C127.835 101.282 146.663 101.324 164.501 101.364C183.329 101.405 201.167 101.445 219.004 101.484C237.832 101.526 255.67 101.565 274.498 101.607C292.336 101.646 311.164 101.688 329.002 101.727C347.83 101.769 365.667 101.808 384.496 101.85C402.333 101.89 421.162 101.931 430.08 101.951C435.006 101.962 439.008 97.9777 439.019 93.052L439.091 60.3085Z"
                              fill="url(#paint1_linear_700_3904)" fill-opacity="0.47" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M439.091 60.3085C439.107 53.1509 435.834 46.3828 430.213 41.9511C421.31 34.9314 402.51 21.8898 384.677 19.8503C365.853 17.8087 347.996 26.7692 329.163 28.7276C311.321 30.6881 292.502 26.6465 274.68 19.607C255.867 12.5654 238.049 3.52598 219.225 1.48434C201.392 -0.555115 183.546 3.40542 164.687 17.3637C146.82 30.3243 127.943 52.2826 110.095 57.2431C91.2577 61.2014 73.449 48.162 54.6515 34.1204C36.8429 21.081 18.0432 8.03935 9.14 1.01964C5.34354 -1.54661 0.220919 1.16659 0.210783 5.74903L0.0198238 92.081C0.00892857 97.0066 3.99313 101.009 8.91881 101.019C17.8375 101.039 36.6659 101.081 54.5034 101.12C73.3317 101.162 91.1692 101.201 109.998 101.243C127.835 101.282 146.663 101.324 164.501 101.364C183.329 101.405 201.167 101.445 219.004 101.484C237.832 101.526 255.67 101.565 274.498 101.607C292.336 101.646 311.164 101.688 329.002 101.727C347.83 101.769 365.667 101.808 384.496 101.85C402.333 101.89 421.162 101.931 430.08 101.951C435.006 101.962 439.008 97.9777 439.019 93.052L439.091 60.3085Z" />
                        <defs>
                            <radialGradient id="paint0_radial_700_3904" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse"
                                            gradientTransform="translate(219.617 48.4853) rotate(-89.8733) scale(53 219.5)">
                                <stop stop-color="#A2CDC5" />
                                <stop offset="1" stop-color="#A2CDC5" stop-opacity="0" />
                            </radialGradient>
                            <linearGradient id="paint1_linear_700_3904" x1="219.5" y1="101.485" x2="219.734" y2="-4.51455"
                                            gradientUnits="userSpaceOnUse">
                                <stop stop-color="#A2CDC5" />
                                <stop offset="1" stop-color="#A2CDC5" stop-opacity="0" />
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <form id="variant_form">
        <div class="modal fade sku_wrap" id="sku_modal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content terimin_content">
                    <div class="modal-body">
                        <div class="modal_close_btn">
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                        </div>
                        <div class="sku_modal">
                            <div class="info_dec">
                                <div class="lable_dec">
                                    <p>SKU_ID:<sup>*</sup></p>
                                </div>
                                <div class="lable_input price_wrap">
                                    <input type="text" id="SKU_id" name="SKU_id">
                                </div>
                                <span id="SKU_id-error"></span>

                            </div>
                            <div class="info_dec">
                                <div class="lable_dec">
                                    <p>Color:<sup>*</sup></p>
                                </div>
                                <div class="lable_input price_wrap">
                                    <input type="text" name="variant_color" id="variant_color">
                                </div>
                                <span id="variant_color-error"></span>

                            </div>

                            <div class="add_img_wrap">
                                <h3>Add image</h3>

                                <div class="variant_moddal_wrap">
                                    <div class="variant_modal_big_image">
                                        <div class="photo_upload_section">
                                            <div class="upload_file">
                                                <div class="plus_img">
                                                    <img src="{{ asset('assets/image/single_product_listing/plus.png') }}" alt="plus">
                                                </div>
                                                <p class="extraction">Not vaild Extraction</p>
                                                <div class="previewImgs ">
                                                    <img class="previewImg variant_image_preview" src="{{ asset('s.png') }}" alt="image">
                                                </div>
                                                <input type="file" size="60" class="preview_img variant_image"
                                                       name="variant_image[]" id="variant_image">
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="variant_modal_image">
                                        <li>
                                            <div class="photo_upload_section">
                                                <div class="upload_file">
                                                    <div class="plus_img">
                                                        <img src="{{ asset('assets/image/single_product_listing/plus.png') }}" alt="plus">
                                                    </div>
                                                    <p class="extraction">Not vaild Extraction</p>
                                                    <div class="previewImgs">
                                                        <img class="previewImg variant_image_preview" src="{{ asset('s.png') }}" alt="image">
                                                    </div>
                                                    <input type="file" size="60" class="preview_img variant_image"
                                                           name="variant_image[]" id="variant_image">
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="photo_upload_section">
                                                <div class="upload_file">
                                                    <div class="plus_img">
                                                        <img src="{{ asset('assets/image/single_product_listing/plus.png') }}" alt="plus">
                                                    </div>
                                                    <p class="extraction">Not vaild Extraction</p>
                                                    <div class="previewImgs">
                                                        <img class="previewImg variant_image_preview" src="{{ asset('s.png') }}" alt="image">
                                                    </div>
                                                    <input type="file" size="60" class="preview_img variant_image"
                                                           name="variant_image[]" id="variant_image">
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="photo_upload_section">
                                                <div class="upload_file">
                                                    <div class="plus_img">
                                                        <img src="{{ asset('assets/image/single_product_listing/plus.png') }}" alt="plus">
                                                    </div>
                                                    <p class="extraction">Not vaild Extraction</p>
                                                    <div class="previewImgs">
                                                        <img class="previewImg variant_image_preview" src="{{ asset('s.png') }}" alt="image">
                                                    </div>
                                                    <input type="file" size="60" class="preview_img variant_image"
                                                           name="variant_image[]" id="variant_image">
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="photo_upload_section">
                                                <div class="upload_file">
                                                    <div class="plus_img">
                                                        <img src="{{ asset('assets/image/single_product_listing/plus.png') }}" alt="plus">
                                                    </div>
                                                    <p class="extraction">Not vaild Extraction</p>
                                                    <div class="previewImgs">
                                                        <img class="previewImg variant_image_preview" src="{{ asset('s.png') }}" alt="image">
                                                    </div>
                                                    <input type="file" size="60" class="preview_img variant_image"
                                                           name="variant_image[]" id="variant_image">
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="photo_upload_section">
                                                <div class="upload_file">
                                                    <div class="plus_img">
                                                        <img src="{{ asset('assets/image/single_product_listing/plus.png') }}" alt="plus">
                                                    </div>
                                                    <p class="extraction">Not vaild Extraction</p>
                                                    <div class="previewImgs">
                                                        <img class="previewImg variant_image_preview" src="{{ asset('s.png') }}" alt="image">
                                                    </div>
                                                    <input type="file" size="60" class="preview_img variant_image"
                                                           name="variant_image[]" id="variant_image">
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <span id="variant_image-error"></span>
                                </div>
                            </div>

                            <div class="info_dec">
                                <div class="lable_dec">
                                    <p>Size:<sup>*</sup></p>
                                </div>
                                <div class="variant_size">
                                    <div class="cm_multi_select size_select">
                                        <select class="select2insidemodal" name="variant_size[]" multiple="multiple"
                                                id="variant_size">
                                            <option value="s">S</option>
                                            <option value="WY">M</option>
                                        </select>
                                    </div>
                                </div>
                                <span id="variant_size-error"></span>
                            </div>
                            <div class="last_btn">

                                <button type="submit">save</button>
                            </div>
                        </div>
                    </div>

                    <div class="product_bottom_shape">
                        <svg viewBox="0 0 440 102" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M439.091 60.3085C439.107 53.1509 435.834 46.3828 430.213 41.9511C421.31 34.9314 402.51 21.8898 384.677 19.8503C365.853 17.8087 347.996 26.7692 329.163 28.7276C311.321 30.6881 292.502 26.6465 274.68 19.607C255.867 12.5654 238.049 3.52598 219.225 1.48434C201.392 -0.555115 183.546 3.40542 164.687 17.3637C146.82 30.3243 127.943 52.2826 110.095 57.2431C91.2577 61.2014 73.449 48.162 54.6515 34.1204C36.8429 21.081 18.0432 8.03935 9.14 1.01964C5.34354 -1.54661 0.220919 1.16659 0.210783 5.74903L0.0198238 92.081C0.00892857 97.0066 3.99313 101.009 8.91881 101.019C17.8375 101.039 36.6659 101.081 54.5034 101.12C73.3317 101.162 91.1692 101.201 109.998 101.243C127.835 101.282 146.663 101.324 164.501 101.364C183.329 101.405 201.167 101.445 219.004 101.484C237.832 101.526 255.67 101.565 274.498 101.607C292.336 101.646 311.164 101.688 329.002 101.727C347.83 101.769 365.667 101.808 384.496 101.85C402.333 101.89 421.162 101.931 430.08 101.951C435.006 101.962 439.008 97.9777 439.019 93.052L439.091 60.3085Z"
                                  fill="url(#paint0_radial_700_3904)" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M439.091 60.3085C439.107 53.1509 435.834 46.3828 430.213 41.9511C421.31 34.9314 402.51 21.8898 384.677 19.8503C365.853 17.8087 347.996 26.7692 329.163 28.7276C311.321 30.6881 292.502 26.6465 274.68 19.607C255.867 12.5654 238.049 3.52598 219.225 1.48434C201.392 -0.555115 183.546 3.40542 164.687 17.3637C146.82 30.3243 127.943 52.2826 110.095 57.2431C91.2577 61.2014 73.449 48.162 54.6515 34.1204C36.8429 21.081 18.0432 8.03935 9.14 1.01964C5.34354 -1.54661 0.220919 1.16659 0.210783 5.74903L0.0198238 92.081C0.00892857 97.0066 3.99313 101.009 8.91881 101.019C17.8375 101.039 36.6659 101.081 54.5034 101.12C73.3317 101.162 91.1692 101.201 109.998 101.243C127.835 101.282 146.663 101.324 164.501 101.364C183.329 101.405 201.167 101.445 219.004 101.484C237.832 101.526 255.67 101.565 274.498 101.607C292.336 101.646 311.164 101.688 329.002 101.727C347.83 101.769 365.667 101.808 384.496 101.85C402.333 101.89 421.162 101.931 430.08 101.951C435.006 101.962 439.008 97.9777 439.019 93.052L439.091 60.3085Z"
                                  fill="url(#paint1_linear_700_3904)" fill-opacity="0.47" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M439.091 60.3085C439.107 53.1509 435.834 46.3828 430.213 41.9511C421.31 34.9314 402.51 21.8898 384.677 19.8503C365.853 17.8087 347.996 26.7692 329.163 28.7276C311.321 30.6881 292.502 26.6465 274.68 19.607C255.867 12.5654 238.049 3.52598 219.225 1.48434C201.392 -0.555115 183.546 3.40542 164.687 17.3637C146.82 30.3243 127.943 52.2826 110.095 57.2431C91.2577 61.2014 73.449 48.162 54.6515 34.1204C36.8429 21.081 18.0432 8.03935 9.14 1.01964C5.34354 -1.54661 0.220919 1.16659 0.210783 5.74903L0.0198238 92.081C0.00892857 97.0066 3.99313 101.009 8.91881 101.019C17.8375 101.039 36.6659 101.081 54.5034 101.12C73.3317 101.162 91.1692 101.201 109.998 101.243C127.835 101.282 146.663 101.324 164.501 101.364C183.329 101.405 201.167 101.445 219.004 101.484C237.832 101.526 255.67 101.565 274.498 101.607C292.336 101.646 311.164 101.688 329.002 101.727C347.83 101.769 365.667 101.808 384.496 101.85C402.333 101.89 421.162 101.931 430.08 101.951C435.006 101.962 439.008 97.9777 439.019 93.052L439.091 60.3085Z" />
                            <defs>
                                <radialGradient id="paint0_radial_700_3904" cx="0" cy="0" r="1"
                                                gradientUnits="userSpaceOnUse"
                                                gradientTransform="translate(219.617 48.4853) rotate(-89.8733) scale(53 219.5)">
                                    <stop stop-color="#A2CDC5" />
                                    <stop offset="1" stop-color="#A2CDC5" stop-opacity="0" />
                                </radialGradient>
                                <linearGradient id="paint1_linear_700_3904" x1="219.5" y1="101.485" x2="219.734"
                                                y2="-4.51455" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#A2CDC5" />
                                    <stop offset="1" stop-color="#A2CDC5" stop-opacity="0" />
                                </linearGradient>
                            </defs>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

@section('extra-script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/spectrum/1.8.0/spectrum.min.js"></script>
    <script>

        $(document).ready(function(){

                $('#upload').click(function (e) {
                e.preventDefault();
                $('input[name=status]').val(1);
            });
            $('#draft').click(function (e) {
                e.preventDefault();
                $('input[name=status]').val(1);
            });
            $('#variant_color').spectrum({
                color: '#fff',
                showAlpha: true,
                move: function(color){
                    $('#output').css(
                        'background-color', color.toHexString());
                }
            });
            $('#color').spectrum({
                color: '#fff',
                showAlpha: true,
                move: function(color){
                    $('#output').css(
                        'background-color', color.toHexString());
                }
            });
            var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
            var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
                return new bootstrap.Popover(popoverTriggerEl)
            })


            $(".select2insidemodal").select2({
                dropdownParent: $("#sku_modal")
            });

            $(".search-control").select2({
                tags: false
            });

            CKEDITOR.replace("product_description", {
                height: 535
            });


            $('.js-example-basic-multiple').select2({
                tags: true,
            });

        });
        var formData = new FormData($('#product_form')[0]);
        var variant = {};
        $('.cancelForm').click(function (e) {
            e.preventDefault();
            variant = {};
            location.reload();

        });

        var id = 0;
        $("#variant_form").validate({
            rules: {
                SKU_id: {
                    required: true
                },
                'variant_image[]': {
                    required: true,
                    minlength: 2
                },
                variant_color: {
                    required: true,
                },
                'variant_size[]': {
                    required: true
                },

            },
            messages: {

            },

            errorElement: 'span',
            errorClass: 'error-display',
            errorPlacement: function(error, element) {

                var id = $(error).attr('id');
                $(`#${id}`).html(error);
                // $(error).insertAfter(`#${id}`);
            },

            submitHandler: function(form) {
                var image =[];
                $('.variant_image').each(function(i, obj) {
                    var file_data = $(this)[0].files;
                    if (file_data.length) {
                        image.push(file_data[0]);
                    }
                });

                variant[id]= {'image':image,variant_color:$('input[name=variant_color]').val(),SKU_id:$('input[name=SKU_id]').val(),variant_size:$('#variant_size').val(),id:id};
                // $('.select2-selection__choice').remove();
                $('.variant_lisr').append(`<li class="delete-variant-${id}"><p><svg onClick="deleteVariant(${id})" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                    </svg>   SKU:- ${$('input[name=SKU_id]').val()}</p></li>`);

                $('#variant_form')[0].reset();

                $('.variant_image_preview').attr('src', "{{ asset('s.png') }}");
                id++;

            }
        });

        $("#product_form").validate({
            rules: {
                sku: {
                    required: true
                },
                MRP: {
                    required: true,
                    number: true
                },
                selling_price: {
                    required: true,
                    number: true,
                    // min: parseInt($('input[name=MRP]').val())
                },
                HSN_code: {
                    required: true
                },
                GST: {
                    required: true
                },
                dispatch_in_day: {
                    required: true,
                    number: true
                },
                quantity: {
                    required: true,
                    number: true
                },
                local_delivery_charge: {
                    required: true,
                    number: true
                },
                zonal_delivery_charge: {
                    required: true,
                    number: true
                },
                national_delivery_charge: {
                    required: true,
                    number: true
                },
                weight: {
                    required: true,
                    number: true
                },
                length: {
                    required: true,
                    number: true
                },
                width: {
                    required: true,
                    number: true
                },
                height: {
                    required: true,
                    number: true
                },
                title: {
                    required: true
                },
                manufacturer: {
                    required: true
                },
                brand_name: {
                    required: true
                },
                product_description: {
                    required: function()
                    {
                        CKEDITOR.instances.product_description.updateElement();
                    },
                },
                'keyword[]': {
                    required: true,
                    minlength: 10
                },

                'key_features[]': {
                    required: true,
                    minlength: 10
                },
                'meta_tags[]': {
                    required: true,
                    minlength: 10
                },
                return_order: {
                    required: true
                },
                return_order_in_day: {
                    required: true
                },
                sale_start_date: {
                    required: true
                },
                sale_end_date: {
                    required: true
                },
                country_of_origin: {
                    required: true
                },

                sale_price: {
                    required: true
                },
                'product_image[]': {
                    required: true,
                },
                color: {
                    required: true,
                },
                size: {
                    required: true,
                },
                model_no: {
                    required: true,
                },
                pack_of: {
                    required: true,
                },
            },
            messages: {
                // sku: {
                //     required: "required"
                // },
                // 'product_image[]': {
                //     required: "image is required"
                // }
            },

            errorElement: 'span',
            errorClass: 'error-display',
            errorPlacement: function(error, element) {
                var id = $(error).attr('id');
                $(`#${id}`).html(error);
            },

            submitHandler: function(form) {
                var formData = new FormData($('#product_form')[0]);
                $.each(variant, function( index, value ) {
                    $.each(value.image, function( indexsecond,images  ) {
                        // formData.append(`image[${index}}][${indexsecond}]`,image);
                        formData.append(`variantImages[${value.id}][${indexsecond}]`,images);
                    });
                });

                formData.append('variants',JSON.stringify(variant));
                formData.append('description',CKEDITOR.instances['product_description'].getData());

                $.ajax({
                    type: "post",
                    url: '{{ route('seller.product.store') }}',
                    data: formData,
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        if (response.error)
                        {
                            $('.error-display').html('');
                            $.each(response.error, function(index, item) {
                                console.log(index);
                                $(`#${index}-error`).html(item).addClass('error-display').removeAttr('style');
                            });

                        }
                        else
                        {
                            location.reload();
                        }
                    }
                });
            },
        });


        function deleteVariant(id)
        {
            delete variant[id];
            $(`.delete-variant-${id}`).remove();

        }
    </script>
@endsection
