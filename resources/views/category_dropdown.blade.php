
<!DOCTYPE html>
<html>
<head>
    <title>Single Product Listing</title>
    
    <link type="image/x-icon" rel="shortcut icon" href="{{ asset('singple_product_pooja/assets/images/favicon.png')}}" />
    
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta name="HandheldFriendly" content="true">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Font-Awesome Fonts -->
    <link href="{{ asset('singple_product_pooja/assets/css/font-awesome.min.css') }}" rel="stylesheet">

    <!-- Select2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('singple_product_pooja/assets/css/bootstrap.min.css')}}">
    
    <!-- Style Sheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('singple_product_pooja/assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('singple_product_pooja/assets/css/singleProduct_listing.css')}}">
    
</head>
<body class="product_view_page">
    <div class="main_wrapper dashboard_wrap">        
        <!-- Sidebar Start -->
        <div class="sidebar_wrapper">
            <div class="sidebar_block">
                <div class="sidebar_menu_block">
                    <div class="mobile_menu_header">
                        <div class="logo_wrap">
                            <div class="logo">
                                <a href="#0">
                                    <img src="{{ asset('singple_product_pooja/assets/image/dashborad_logo.png') }}" alt="logo" class="logo_img">
                                </a>
                            </div>
                            <a href="#0" class="menu_trigger">
                                <svg width="9" height="13" viewBox="0 0 9 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.72577 6.50537L0.755156 12.1304L4.50093 6.50397L0.75 0.880371L8.72577 6.50537Z" fill="#FFCE55"/>
                                </svg>                                    
                            </a>
                        </div>
                    </div>
                    <div class="sidebar_menu">
                        <ul>
                            <li>
                                <a href="index.html" data-bs-toggle="tooltip" data-bs-placement="right" title="Dashboard">
                                    <div class="menu_icon">
                                        <img src="{{ asset('singple_product_pooja/assets/image/sidebar/dashboard.png') }}" alt="icon">
                                    </div>
                                    <div class="menu_text">Dashboard</div>
                                </a>
                            </li>
                            <li>
                                <div class="accordion_menu_wrap">
                                    <a class="active" href="#0" data-bs-toggle="tooltip" data-bs-placement="right" title="Termine">
                                        <div class="menu_icon">
                                            <img src="{{ asset('singple_product_pooja/assets/image/sidebar/product.png') }}" alt="icon">
                                        </div>
                                        <div class="menu_text">Product</div>
                                    </a>

                                    <div class="accordion_menu_info">
                                        <ul>
                                            <li>
                                                <a href="#0" class="active">
                                                    product view
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#0">
                                                    product upload
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#0">
                                                    image bulk upload
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="Labor.html" data-bs-toggle="tooltip" data-bs-placement="right" title="Labor">
                                    <div class="menu_icon">
                                        <img src="{{ asset('singple_product_pooja/assets/image/sidebar/order.png') }}" alt="icon">
                                    </div>
                                    <div class="menu_text">Order</div>
                                </a>
                            </li>
                            <li>
                                <a href="index.html" data-bs-toggle="tooltip" data-bs-placement="right" title="Dashboard">
                                    <div class="menu_icon">
                                        <img src="{{ asset('singple_product_pooja/assets/image/sidebar/marketing.png') }}" alt="icon">
                                    </div>
                                    <div class="menu_text">Marketing</div>
                                </a>
                            </li>
                            <li>
                                <a href="termine.html" data-bs-toggle="tooltip" data-bs-placement="right" title="Termine">
                                    <div class="menu_icon">
                                        <img src="{{ asset('singple_product_pooja/assets/image/sidebar/payment.png') }}" alt="icon">
                                    </div>
                                    <div class="menu_text">Payment</div>
                                </a>
                            </li>
                            <li>
                                <a href="Labor.html" data-bs-toggle="tooltip" data-bs-placement="right" title="Labor">
                                    <div class="menu_icon">
                                        <img src="{{ asset('singple_product_pooja/assets/image/sidebar/wallet.png') }}" alt="icon">
                                    </div>
                                    <div class="menu_text">Wallet</div>
                                </a>
                            </li>
                            <li>
                                <a href="index.html" data-bs-toggle="tooltip" data-bs-placement="right" title="Dashboard">
                                    <div class="menu_icon">
                                        <img src="{{ asset('singple_product_pooja/assets/image/sidebar/support.png')}}" alt="icon">
                                    </div>
                                    <div class="menu_text">Support</div>
                                </a>
                            </li>
                            <li>
                                <a href="termine.html" data-bs-toggle="tooltip" data-bs-placement="right" title="Termine">
                                    <div class="menu_icon">
                                        <img src="{{ asset('singple_product_pooja/assets/image/sidebar/referralsystem.png')}}" alt="icon">
                                    </div>
                                    <div class="menu_text">Referral System</div>
                                </a>
                            </li>
                            <li>
                                <a href="Labor.html" data-bs-toggle="tooltip" data-bs-placement="right" title="Labor">
                                    <div class="menu_icon">
                                        <img src="{{ asset('singple_product_pooja/assets/image/sidebar/FAQ.png')}}" alt="icon">
                                    </div>
                                    <div class="menu_text">Report</div>
                                </a>
                            </li>
                            <li>
                                <a href="Labor.html" data-bs-toggle="tooltip" data-bs-placement="right" title="Labor">
                                    <div class="menu_icon">
                                        <img src="{{ asset('singple_product_pooja/assets/image/sidebar/FAQ.png')}}" alt="icon">
                                    </div>
                                    <div class="menu_text">FAQ</div>
                                </a>
                            </li>
                            <li>
                                <a href="Labor.html" data-bs-toggle="tooltip" data-bs-placement="right" title="Labor">
                                    <div class="menu_icon">
                                        <img src="{{ asset('singple_product_pooja/assets/image/sidebar/Profile.png')}}" alt="icon">
                                    </div>
                                    <div class="menu_text">Profile</div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="cm-overlay"></div>
        <!-- Sidebar End -->
        
        <!-- Main Content Start -->
        <div class="main_content">
            <div class="main_content_lg">
                <div class="common_content_pad_block">
                    <div class="cart_top_wrap">
                        <!-- <div class="logo">
                            <a href="#0">
                                <img src="{{ asset('singple_product_pooja/assets/image/dashborad_logo.png')}}" alt="logo">
                            </a>
                        </div> -->
                        <ul>
                            <li>
                                <div class="top_right_icon">
                                    <img src="{{ asset('singple_product_pooja/assets/image/product_view/search_big_icon.png')}}" alt="icon">
                                </div>
                            </li>
                            <li>
                                <div class="top_right_icon cart_wrap">
                                    <img src="{{ asset('singple_product_pooja/assets/image/product_view/cart.png')}}" alt="icon">
                                </div>
                            </li>
                            <li>
                                <div class="top_right_icon notification_wrap">
                                    <img src="{{ asset('singple_product_pooja/assets/image/product_view/bell.png')}}" alt="icon">
                                </div>
                            </li>
                            <li>
                                <div class="top_right_icon">
                                    <img src="{{ asset('singple_product_pooja/assets/image/product_view/account.png')}}" alt="icon">
                                </div>
                            </li>
                            <li>
                                <a href="#0" class="menu_trigger d-lg-none">
                                    <svg width="9" height="13" viewBox="0 0 9 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.72577 6.50537L0.755156 12.1304L4.50093 6.50397L0.75 0.880371L8.72577 6.50537Z" fill="#FFCE55"/>
                                    </svg>                                    
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="single_product_listing">
                        <div class="common_title">
                            <h2>Single Product Listing</h2>
                        </div>

                        <div class="search_input">
                            <select class="search-control">
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
                            <button type="button" class="select_cat_btn" data-bs-toggle="modal" data-bs-target="#product_list">
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
                                                            <img src="{{ asset('singple_product_pooja/assets/image/single_product_listing/plus.png')}}" alt="plus">
                                                        </div>
                                                        <p class="extraction">Not vaild Extraction</p>
                                                        <div class="previewImgs">
                                                            <img class="previewImg" src="s.png" alt="image">
                                                        </div>
                                                        <input type="file" size="60" name="photo" class="preview_img" >
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="photo_upload_section">
                                                    <div class="upload_file">
                                                        <div class="plus_img">
                                                            <img src="{{ asset('singple_product_pooja/assets/image/single_product_listing/plus.png')}}" alt="plus">
                                                        </div>
                                                        <p class="extraction">Not vaild Extraction</p>
                                                        <div class="previewImgs">
                                                            <img class="previewImg" src="s.png" alt="image">
                                                        </div>
                                                        <input type="file" size="60" name="photo" class="preview_img" >
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="photo_upload_section">
                                                    <div class="upload_file">
                                                        <div class="plus_img">
                                                            <img src="{{ asset('singple_product_pooja/assets/image/single_product_listing/plus.png')}}" alt="plus">
                                                        </div>
                                                        <p class="extraction">Not vaild Extraction</p>
                                                        <div class="previewImgs">
                                                            <img class="previewImg" src="s.png" alt="image">
                                                        </div>
                                                        <input type="file" size="60" name="photo" class="preview_img" >
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="photo_upload_section">
                                                    <div class="upload_file">
                                                        <div class="plus_img">
                                                            <img src="{{ asset('singple_product_pooja/assets/image/single_product_listing/plus.png" alt="plus">
                                                        </div>
                                                        <p class="extraction">Not vaild Extraction</p>
                                                        <div class="previewImgs">
                                                            <img class="previewImg" src="s.png')}}" alt="image">
                                                        </div>
                                                        <input type="file" size="60" name="photo" class="preview_img" >
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="photo_upload_section">
                                                    <div class="upload_file">
                                                        <div class="plus_img">
                                                            <img src="{{ asset('singple_product_pooja/assets/image/single_product_listing/plus.png')}}" alt="plus">
                                                        </div>
                                                        <p class="extraction">Not vaild Extraction</p>
                                                        <div class="previewImgs">
                                                            <img class="previewImg" src="s.png" alt="image">
                                                        </div>
                                                        <input type="file" size="60" name="photo" class="preview_img" >
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="photo_upload_section">
                                                    <div class="upload_file">
                                                        <div class="plus_img">
                                                            <img src="{{ asset('singple_product_pooja/assets/image/single_product_listing/video.png')}}" alt="plus">
                                                        </div>
                                                        <p class="extraction">Not vaild Extraction</p>
                                                        <div class="previewImgs">
                                                            <img class="previewImg" src="s.png" alt="image">
                                                        </div>
                                                        <input type="file" size="60" name="photo" class="preview_img" >
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
    
                                        <div class="main_product_img">
                                            <div class="photo_upload_section main_produt_info">
                                                <div class="upload_file">
                                                    <div class="plus_img">
                                                        <img src="{{ asset('singple_product_pooja/assets/image/single_product_listing/big_upload.png')}}" alt="plus">
                                                    </div>
                                                    <p class="extraction">Not vaild Extraction</p>
                                                    <div class="previewImgs">
                                                        <img class="previewImg" src="s.png" alt="image">
                                                    </div>
                                                    <input type="file" size="60" name="photo" class="preview_img" >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
                                                        <input type="text">
                                                    </div>
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
                                                        <input type="text">
                                                    </div>
                                                </div>
                                                <div class="info_dec">
                                                    <div class="lable_dec">
                                                        <p>Your Seling Price: <sup>*</sup></p>
                                                    </div>
                                                    <div class="lable_input price_wrap">
                                                        <div class="price_text">
                                                           <span>₹</span> 
                                                        </div>
                                                        <input type="text">
                                                    </div>
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
                                                        <input type="text">
                                                    </div>
                                                </div>
                                                <div class="info_dec">
                                                    <div class="lable_dec">
                                                        <p>Add HSN code Manuly : <sup>*</sup></p>
                                                    </div>
                                                    <div class="lable_input">
                                                        <input type="text">
                                                    </div>
                                                </div>
                                                <div class="info_dec">
                                                    <div class="lable_dec">
                                                        <p>GST : <sup>*</sup></p>
                                                    </div>
                                                    <div class="select_wrap gst_select">
                                                        <div class="dropdown">
                                                            <button class="btn btn-secondary dropdown-toggle single_select" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                                Select
                                                            </button>
                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                                <li><a class="dropdown-item" href="#">3%</a></li>
                                                                <li><a class="dropdown-item" href="#">5%</a></li>
                                                                <li><a class="dropdown-item" href="#">12%</a></li>
                                                                <li><a class="dropdown-item" href="#">18%</a></li>
                                                                <li><a class="dropdown-item" href="#">28%</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
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
                                                        <input type="text">
                                                    </div>
                                                </div>
                                                <div class="info_dec">
                                                    <div class="lable_dec">
                                                        <p>Stock: <sup>*</sup></p>
                                                    </div>
                                                    <div class="lable_input price_wrap">
                                                        <input type="text">
                                                    </div>
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
                                                        <p>Local Delivery:  <sup>*</sup></p>
                                                    </div>
                                                    <div class="lable_input">
                                                        <input type="text">
                                                    </div>
                                                </div>
                                                <div class="info_dec">
                                                    <div class="lable_dec">
                                                        <p>Zonal Delivery:  <sup>*</sup></p>
                                                    </div>
                                                    <div class="lable_input">
                                                        <input type="text">
                                                    </div>
                                                </div>
                                                <div class="info_dec">
                                                    <div class="lable_dec">
                                                        <p>National Delivery:  <sup>*</sup></p>
                                                    </div>
                                                    <div class="lable_input">
                                                        <input type="text">
                                                    </div>
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
                                                        <input type="text">
                                                    </div>
                                                </div>
                                                <div class="info_dec">
                                                    <div class="lable_dec">
                                                        <p>Packege length:  <sup>*</sup></p>
                                                    </div>
                                                    <div class="lable_input price_wrap">
                                                        <input type="text">
                                                    </div>
                                                </div>
                                                <div class="info_dec">
                                                    <div class="lable_dec">
                                                        <p>Packege width:  <sup>*</sup></p>
                                                    </div>
                                                    <div class="lable_input price_wrap">
                                                        <input type="text">
                                                    </div>
                                                </div>
                                                <div class="info_dec">
                                                    <div class="lable_dec">
                                                        <p>Packege heigth:  <sup>*</sup></p>
                                                    </div>
                                                    <div class="lable_input price_wrap">
                                                        <input type="text">
                                                    </div>
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
                                                        <textarea name="" id="" cols="30" rows="5" class="w-100"></textarea>
                                                    </div>
                                                </div>
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
                                                        <input type="text">
                                                    </div>
                                                </div>
                                                <div class="info_dec">
                                                    <div class="lable_dec">
                                                        <p>Brand Name: <sup>*</sup></p>
                                                    </div>
                                                    <div class="lable_input price_wrap">
                                                        <div class="price_text">
                                                           <span>₹</span> 
                                                        </div>
                                                        <input type="text">
                                                    </div>
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
                                                        <input type="text">
                                                    </div>
                                                </div>
                                                <div class="info_dec">
                                                    <div class="lable_dec">
                                                        <p>Size : <sup>*</sup></p>
                                                    </div>
                                                    <div class="lable_input">
                                                        <input type="text">
                                                    </div>
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
                                                        <input type="text">
                                                    </div>
                                                </div>
                                                <div class="info_dec">
                                                    <div class="lable_dec">
                                                        <p>Pack of: <sup>*</sup></p>
                                                    </div>
                                                    <div class="lable_input price_wrap">
                                                        <input type="text">
                                                    </div>
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
                                                <a href="#0" data-bs-toggle="modal" data-bs-target="#sku_modal">Add Varient</a>
                                            </div>
    
                                            <div class="variant_lisr">
                                                <ul>
                                                    <li>
                                                        <p>SKU_ID1:</p>
                                                        <span>XYZ001</span>
                                                    </li>
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
                                                    <textarea name="editor1" placeholder="Start Typing.."></textarea>
                                                </div>
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
                                                <select class="js-example-basic-multiple" name="states[]" multiple="multiple">
                                                </select>
                                            </div>
                                        </div>

                                        <div class="add_info">
                                            <div class="lable_dec">
                                                <p>Product fetures:<sup>*</sup></p>
                                                <span>(Max 15key Fetures)</span>
                                            </div>

                                            <div class="key_word_select cm_multi_select">
                                                <select class="js-example-basic-multiple" name="states[]" multiple="multiple">
                                                    <option value="AL">Red T-shirt</option>
                                                    <option value="WY">Red T-shirt 1</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="add_info">
                                            <div class="lable_dec">
                                                <p>Meta Tegs: <sup>*</sup></p>
                                                <span>(Max 10 Tegs)</span>
                                            </div>

                                            <div class="key_word_select cm_multi_select">
                                                <select class="js-example-basic-multiple" name="states[]" multiple="multiple">
                                                    <option value="AL">T-shirt</option>
                                                    <option value="WY">T-shirt 1</option>
                                                </select>
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
                                                    <button class="btn btn-secondary dropdown-toggle single_select" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                        Select
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                        <li><a class="dropdown-item" href="#">Yes</a></li>
                                                        <li><a class="dropdown-item" href="#">No</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-5 col-md-6">
                                        <div class="return_info_dec">
                                            <div class="lable_dec">
                                                <p>Return Order in day: <sup>*</sup></p>
                                            </div>
                                            <div class="select_wrap">
                                                <div class="dropdown">
                                                    <button class="btn btn-secondary dropdown-toggle single_select" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                        Select
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                        <li><a class="dropdown-item" href="#">2</a></li>
                                                        <li><a class="dropdown-item" href="#">3</a></li>
                                                        <li><a class="dropdown-item" href="#">4</a></li>
                                                        <li><a class="dropdown-item" href="#">5</a></li>
                                                        <li><a class="dropdown-item" href="#">6</a></li>
                                                        <li><a class="dropdown-item" href="#">7</a></li>
                                                    </ul>
                                                </div>
                                            </div>
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
                                                    <input type="text">
                                                </div>
                                            </div>

                                            <div class="start_end_date">
                                                <div class="date_title_wrap">
                                                    <p>Sale Start Date:</p>
                                                    <div class="position-relative">
                                                        <input type="text" placeholder="dd/mm/yyyy" onfocus="(this.type='date')">
                                                        <div class="cal_img">
                                                            <img src="{{ asset('singple_product_pooja/assets/image/single_product_listing/calender.png')}}" alt="icon">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="date_title_wrap">
                                                    <p>Sale End Date:</p>
                                                    <div class="position-relative">
                                                        <input type="text" placeholder="dd/mm/yyyy" onfocus="(this.type='date')">
                                                        <div class="cal_img">
                                                            <img src="{{ asset('singple_product_pooja/assets/image/single_product_listing/calender.png')}}" alt="icon">
                                                        </div>
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
                                                <input type="text" name="country" id="country">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="last_btn">
                            <a href="#0">Cancle</a>
                            <a href="#0">Draft</a>
                            <a href="#0">Upload</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Content End -->
        
        
        <!-- Checkin Bestätigung Modal -->
        <div class="modal fade  product_list_wrap" id="product_list" tabindex="-1"  aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content terimin_content">
                    <div class="modal-body">
                        <div class="modal_close_btn">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="category_menu">
                            <div class="first_menu common_menu_wrap">
                                <div class="top_menu">
                                    <ul>
                                    </ul>
                                </div>
                            </div>

                            <div class="sec_menu common_menu_wrap">
                                <div class="child_set">
                                    <ul>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="product_bottom_shape">
                        <svg viewBox="0 0 440 102" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M439.091 60.3085C439.107 53.1509 435.834 46.3828 430.213 41.9511C421.31 34.9314 402.51 21.8898 384.677 19.8503C365.853 17.8087 347.996 26.7692 329.163 28.7276C311.321 30.6881 292.502 26.6465 274.68 19.607C255.867 12.5654 238.049 3.52598 219.225 1.48434C201.392 -0.555115 183.546 3.40542 164.687 17.3637C146.82 30.3243 127.943 52.2826 110.095 57.2431C91.2577 61.2014 73.449 48.162 54.6515 34.1204C36.8429 21.081 18.0432 8.03935 9.14 1.01964C5.34354 -1.54661 0.220919 1.16659 0.210783 5.74903L0.0198238 92.081C0.00892857 97.0066 3.99313 101.009 8.91881 101.019C17.8375 101.039 36.6659 101.081 54.5034 101.12C73.3317 101.162 91.1692 101.201 109.998 101.243C127.835 101.282 146.663 101.324 164.501 101.364C183.329 101.405 201.167 101.445 219.004 101.484C237.832 101.526 255.67 101.565 274.498 101.607C292.336 101.646 311.164 101.688 329.002 101.727C347.83 101.769 365.667 101.808 384.496 101.85C402.333 101.89 421.162 101.931 430.08 101.951C435.006 101.962 439.008 97.9777 439.019 93.052L439.091 60.3085Z" fill="url(#paint0_radial_700_3904)"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M439.091 60.3085C439.107 53.1509 435.834 46.3828 430.213 41.9511C421.31 34.9314 402.51 21.8898 384.677 19.8503C365.853 17.8087 347.996 26.7692 329.163 28.7276C311.321 30.6881 292.502 26.6465 274.68 19.607C255.867 12.5654 238.049 3.52598 219.225 1.48434C201.392 -0.555115 183.546 3.40542 164.687 17.3637C146.82 30.3243 127.943 52.2826 110.095 57.2431C91.2577 61.2014 73.449 48.162 54.6515 34.1204C36.8429 21.081 18.0432 8.03935 9.14 1.01964C5.34354 -1.54661 0.220919 1.16659 0.210783 5.74903L0.0198238 92.081C0.00892857 97.0066 3.99313 101.009 8.91881 101.019C17.8375 101.039 36.6659 101.081 54.5034 101.12C73.3317 101.162 91.1692 101.201 109.998 101.243C127.835 101.282 146.663 101.324 164.501 101.364C183.329 101.405 201.167 101.445 219.004 101.484C237.832 101.526 255.67 101.565 274.498 101.607C292.336 101.646 311.164 101.688 329.002 101.727C347.83 101.769 365.667 101.808 384.496 101.85C402.333 101.89 421.162 101.931 430.08 101.951C435.006 101.962 439.008 97.9777 439.019 93.052L439.091 60.3085Z" fill="url(#paint1_linear_700_3904)" fill-opacity="0.47"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M439.091 60.3085C439.107 53.1509 435.834 46.3828 430.213 41.9511C421.31 34.9314 402.51 21.8898 384.677 19.8503C365.853 17.8087 347.996 26.7692 329.163 28.7276C311.321 30.6881 292.502 26.6465 274.68 19.607C255.867 12.5654 238.049 3.52598 219.225 1.48434C201.392 -0.555115 183.546 3.40542 164.687 17.3637C146.82 30.3243 127.943 52.2826 110.095 57.2431C91.2577 61.2014 73.449 48.162 54.6515 34.1204C36.8429 21.081 18.0432 8.03935 9.14 1.01964C5.34354 -1.54661 0.220919 1.16659 0.210783 5.74903L0.0198238 92.081C0.00892857 97.0066 3.99313 101.009 8.91881 101.019C17.8375 101.039 36.6659 101.081 54.5034 101.12C73.3317 101.162 91.1692 101.201 109.998 101.243C127.835 101.282 146.663 101.324 164.501 101.364C183.329 101.405 201.167 101.445 219.004 101.484C237.832 101.526 255.67 101.565 274.498 101.607C292.336 101.646 311.164 101.688 329.002 101.727C347.83 101.769 365.667 101.808 384.496 101.85C402.333 101.89 421.162 101.931 430.08 101.951C435.006 101.962 439.008 97.9777 439.019 93.052L439.091 60.3085Z"/>
                            <defs>
                            <radialGradient id="paint0_radial_700_3904" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(219.617 48.4853) rotate(-89.8733) scale(53 219.5)">
                            <stop stop-color="#A2CDC5"/>
                            <stop offset="1" stop-color="#A2CDC5" stop-opacity="0"/>
                            </radialGradient>
                            <linearGradient id="paint1_linear_700_3904" x1="219.5" y1="101.485" x2="219.734" y2="-4.51455" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#A2CDC5"/>
                            <stop offset="1" stop-color="#A2CDC5" stop-opacity="0"/>
                            </linearGradient>
                            </defs>
                        </svg>                                                  
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade sku_wrap" id="sku_modal" tabindex="-1"  aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content terimin_content">
                    <div class="modal-body">
                        <div class="modal_close_btn">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="sku_modal">
                            <div class="info_dec">
                                <div class="lable_dec">
                                    <p>SKU_ID:<sup>*</sup></p>
                                </div>
                                <div class="lable_input price_wrap">
                                    <input type="text">
                                </div>
                            </div>
                            <div class="info_dec">
                                <div class="lable_dec">
                                    <p>Color:<sup>*</sup></p>
                                </div>
                                <div class="lable_input price_wrap">
                                    <input type="text">
                                </div>
                            </div>

                            <div class="add_img_wrap">
                                <h3>Add image</h3>

                                <div class="variant_moddal_wrap">
                                    <div class="variant_modal_big_image">
                                        <div class="photo_upload_section">
                                            <div class="upload_file">
                                                <div class="plus_img">
                                                    <img src="{{ asset('singple_product_pooja/assets/image/single_product_listing/plus.png')}}" alt="plus">
                                                </div>
                                                <p class="extraction">Not vaild Extraction</p>
                                                <div class="previewImgs">
                                                    <img class="previewImg" src="s.png" alt="image">
                                                </div>
                                                <input type="file" size="60" name="photo" class="preview_img" >
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="variant_modal_image">
                                        <li>
                                            <div class="photo_upload_section">
                                                <div class="upload_file">
                                                    <div class="plus_img">
                                                        <img src="{{ asset('singple_product_pooja/assets/image/single_product_listing/plus.png')}}" alt="plus">
                                                    </div>
                                                    <p class="extraction">Not vaild Extraction</p>
                                                    <div class="previewImgs">
                                                        <img class="previewImg" src="s.png" alt="image">
                                                    </div>
                                                    <input type="file" size="60" name="photo" class="preview_img" >
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="photo_upload_section">
                                                <div class="upload_file">
                                                    <div class="plus_img">
                                                        <img src="{{ asset('singple_product_pooja/assets/image/single_product_listing/plus.png')}}" alt="plus">
                                                    </div>
                                                    <p class="extraction">Not vaild Extraction</p>
                                                    <div class="previewImgs">
                                                        <img class="previewImg" src="s.png" alt="image">
                                                    </div>
                                                    <input type="file" size="60" name="photo" class="preview_img" >
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="photo_upload_section">
                                                <div class="upload_file">
                                                    <div class="plus_img">
                                                        <img src="{{ asset('singple_product_pooja/assets/image/single_product_listing/plus.png')}}" alt="plus">
                                                    </div>
                                                    <p class="extraction">Not vaild Extraction</p>
                                                    <div class="previewImgs">
                                                        <img class="previewImg" src="s.png" alt="image">
                                                    </div>
                                                    <input type="file" size="60" name="photo" class="preview_img" >
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="photo_upload_section">
                                                <div class="upload_file">
                                                    <div class="plus_img">
                                                        <img src="{{ asset('singple_product_pooja/assets/image/single_product_listing/plus.png')}}" alt="plus">
                                                    </div>
                                                    <p class="extraction">Not vaild Extraction</p>
                                                    <div class="previewImgs">
                                                        <img class="previewImg" src="s.png" alt="image">
                                                    </div>
                                                    <input type="file" size="60" name="photo" class="preview_img" >
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="photo_upload_section">
                                                <div class="upload_file">
                                                    <div class="plus_img">
                                                        <img src="{{ asset('singple_product_pooja/assets/image/single_product_listing/plus.png')}}" alt="plus">
                                                    </div>
                                                    <p class="extraction">Not vaild Extraction</p>
                                                    <div class="previewImgs">
                                                        <img class="previewImg" src="s.png" alt="image">
                                                    </div>
                                                    <input type="file" size="60" name="photo" class="preview_img" >
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="info_dec">
                                <div class="lable_dec">
                                    <p>Size:<sup>*</sup></p>
                                </div>
                                <div class="variant_size">
                                    <div class="cm_multi_select size_select">
                                        <select class="select2insidemodal" name="states[]" multiple="multiple">
                                            <option value="">S</option>
                                            <option value="WY">M</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="product_bottom_shape">
                        <svg viewBox="0 0 440 102" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M439.091 60.3085C439.107 53.1509 435.834 46.3828 430.213 41.9511C421.31 34.9314 402.51 21.8898 384.677 19.8503C365.853 17.8087 347.996 26.7692 329.163 28.7276C311.321 30.6881 292.502 26.6465 274.68 19.607C255.867 12.5654 238.049 3.52598 219.225 1.48434C201.392 -0.555115 183.546 3.40542 164.687 17.3637C146.82 30.3243 127.943 52.2826 110.095 57.2431C91.2577 61.2014 73.449 48.162 54.6515 34.1204C36.8429 21.081 18.0432 8.03935 9.14 1.01964C5.34354 -1.54661 0.220919 1.16659 0.210783 5.74903L0.0198238 92.081C0.00892857 97.0066 3.99313 101.009 8.91881 101.019C17.8375 101.039 36.6659 101.081 54.5034 101.12C73.3317 101.162 91.1692 101.201 109.998 101.243C127.835 101.282 146.663 101.324 164.501 101.364C183.329 101.405 201.167 101.445 219.004 101.484C237.832 101.526 255.67 101.565 274.498 101.607C292.336 101.646 311.164 101.688 329.002 101.727C347.83 101.769 365.667 101.808 384.496 101.85C402.333 101.89 421.162 101.931 430.08 101.951C435.006 101.962 439.008 97.9777 439.019 93.052L439.091 60.3085Z" fill="url(#paint0_radial_700_3904)"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M439.091 60.3085C439.107 53.1509 435.834 46.3828 430.213 41.9511C421.31 34.9314 402.51 21.8898 384.677 19.8503C365.853 17.8087 347.996 26.7692 329.163 28.7276C311.321 30.6881 292.502 26.6465 274.68 19.607C255.867 12.5654 238.049 3.52598 219.225 1.48434C201.392 -0.555115 183.546 3.40542 164.687 17.3637C146.82 30.3243 127.943 52.2826 110.095 57.2431C91.2577 61.2014 73.449 48.162 54.6515 34.1204C36.8429 21.081 18.0432 8.03935 9.14 1.01964C5.34354 -1.54661 0.220919 1.16659 0.210783 5.74903L0.0198238 92.081C0.00892857 97.0066 3.99313 101.009 8.91881 101.019C17.8375 101.039 36.6659 101.081 54.5034 101.12C73.3317 101.162 91.1692 101.201 109.998 101.243C127.835 101.282 146.663 101.324 164.501 101.364C183.329 101.405 201.167 101.445 219.004 101.484C237.832 101.526 255.67 101.565 274.498 101.607C292.336 101.646 311.164 101.688 329.002 101.727C347.83 101.769 365.667 101.808 384.496 101.85C402.333 101.89 421.162 101.931 430.08 101.951C435.006 101.962 439.008 97.9777 439.019 93.052L439.091 60.3085Z" fill="url(#paint1_linear_700_3904)" fill-opacity="0.47"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M439.091 60.3085C439.107 53.1509 435.834 46.3828 430.213 41.9511C421.31 34.9314 402.51 21.8898 384.677 19.8503C365.853 17.8087 347.996 26.7692 329.163 28.7276C311.321 30.6881 292.502 26.6465 274.68 19.607C255.867 12.5654 238.049 3.52598 219.225 1.48434C201.392 -0.555115 183.546 3.40542 164.687 17.3637C146.82 30.3243 127.943 52.2826 110.095 57.2431C91.2577 61.2014 73.449 48.162 54.6515 34.1204C36.8429 21.081 18.0432 8.03935 9.14 1.01964C5.34354 -1.54661 0.220919 1.16659 0.210783 5.74903L0.0198238 92.081C0.00892857 97.0066 3.99313 101.009 8.91881 101.019C17.8375 101.039 36.6659 101.081 54.5034 101.12C73.3317 101.162 91.1692 101.201 109.998 101.243C127.835 101.282 146.663 101.324 164.501 101.364C183.329 101.405 201.167 101.445 219.004 101.484C237.832 101.526 255.67 101.565 274.498 101.607C292.336 101.646 311.164 101.688 329.002 101.727C347.83 101.769 365.667 101.808 384.496 101.85C402.333 101.89 421.162 101.931 430.08 101.951C435.006 101.962 439.008 97.9777 439.019 93.052L439.091 60.3085Z"/>
                            <defs>
                            <radialGradient id="paint0_radial_700_3904" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(219.617 48.4853) rotate(-89.8733) scale(53 219.5)">
                            <stop stop-color="#A2CDC5"/>
                            <stop offset="1" stop-color="#A2CDC5" stop-opacity="0"/>
                            </radialGradient>
                            <linearGradient id="paint1_linear_700_3904" x1="219.5" y1="101.485" x2="219.734" y2="-4.51455" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#A2CDC5"/>
                            <stop offset="1" stop-color="#A2CDC5" stop-opacity="0"/>
                            </linearGradient>
                            </defs>
                        </svg>                                                  
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="{{ asset('singple_product_pooja/assets/js/jquery-3.5.1.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" ></script> 
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
    <script src="{{ asset('singple_product_pooja/assets/js/custom.js')}}"></script>
    
    <script>
        var url = "{{url('/')}}"; 

        $(document).ready(function(){
            $.ajax({
                url: url + "/api/main_category",
                type: 'GET',
                success: function (data) {
                    var html = "";
                    $.each(data, function (index, value) {

                        html += '<li rel="' + value.id + '" onclick="myFunction(' + value.id + ');" class="has-children" id="cat_' + value.id + '" >' +
                                '<a id="a_' + value.id + '" class="sub_category"  href="#">' + value.name + '</a>' +
                                '<ul id="subcat_' + value.id + '" class="cd-secondary-dropdown is-hidden fade-out"></ul>' +
                                '</li>';
                    });
                    $(".modal-body .category_menu .first_menu .top_menu ul").html(html);
                }
            });

            //Popover Js
            var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
            var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
                return new bootstrap.Popover(popoverTriggerEl)
            })


            $(".select2insidemodal").select2({
                dropdownParent: $("#sku_modal")
            });

            $(".search-control").select2({
                tags: false
            });

            CKEDITOR.replace("editor1",
            {
                height: 535
            });

            $('.js-example-basic-multiple').select2({
                tags:true,
            });
           
        });

        function myFunction(id) {
            var html = "";
                var html = "";
                var li_id = id;
                var counter = 1;
                $.ajax({
                    url: url + "/api/get_2nd_level_childs/" + id,
                    type: 'GET',
                    success: function (res) {
                        // console.log(res.double);
                        $.each(res.double, function (key, value) {

                            if (counter != 7) {
                                //alert(counter);
                                html += '<li class="has-children">';
                                html += '<a href="' + url + '/single_category/' + value.slug + '" class="sub_parent">' + value.name + '</a>';
                                html += '<ul class="is-hidden">';
                                $.each(value.childrens, function (k, v) {
                                    html += '<li class="has-children">';
                                    html += '<a href="' + url + '/single_category/' + v.slug + '">' + v.name + '</a>';
                                    html += '</li>';
                                });
                                counter++;
                                html += '<a href="{{ url('all - category') }}" class="all_category">All Category</a></ul>';
                                html += '</li>';
                            }
                        });

                        $.each(res.single, function (key, value) {
                            html += '<li class="single_category">';
                            html += '<a href="' + url + '/single_category/' + value.slug + '">' + value.name + '</a>';
                            html += '</li>';
                        });


                        var s = $("li.has-children.not_sibiling").siblings();
                        $.each(s, function (key, value) {
                            $("#cat_" + value.attributes[0].nodeValue + " a").removeClass('is-active');
                            $("#cat_" + value.attributes[0].nodeValue + " ul").removeClass('is-active');
                        });

                        $(".category_menu .sec_menu .child_set ul").html(html);
                        // $("a#a_" + id).addClass('is-active');
                        // $("#cat_" + li_id).addClass('not_sibiling');
                        // $("ul#subcat_" + id).removeClass('fade-out');
                        // $("ul#subcat_" + id).addClass('is-active');
                    }

                });
            }
        
    </script>
    
</body>
</html>