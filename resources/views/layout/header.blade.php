<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/price-range.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/responsive.css') }}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="icon" type="image/png" sizes="16x16"  href="{{ asset('frontend/images/favicon-16x16.png') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
</head>
<!--/head-->

<body>
    <header id="header">
        <!--header-->
        <div class="header_top">
            <!--header_top-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="contactinfo">
                            <ul class="nav nav-pills">
                                <li><a href="#"><i class="fa fa-phone"></i> 0703092742</a></li>
                                <li><a href="#"><i class="fa fa-envelope"></i> xuanphan742@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="social-icons pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="https://www.facebook.com/phanquixuan.8203"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/WeAreMessi"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.instagram.com/quixun.8203/"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="https://dribbble.com/Xuan11"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="https://www.google.com.vn/?hl=vi"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/header_top-->

        <div class="header-middle">
            <!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo pull-left">
                            <a href="{{ URL::to('/trang-chu') }}" class="active"><img
                                    src="{{ '../frontend/images/logo_6.png' }}" alt="" /></a>
                        </div>
                        <div class="btn-group pull-right">
                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle usa"
                                    data-toggle="dropdown">
                                    USA
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Canada</a></li>
                                    <li><a href="#">UK</a></li>
                                </ul>
                            </div>

                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle usa"
                                    data-toggle="dropdown">
                                    DOLLAR
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Canadian Dollar</a></li>
                                    <li><a href="#">Pound</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">
                                <li class="nav-item"><a href=""><i class="fa fa-star"></i> Yêu thích</a></li>
                                <?php
                                    $customer_id = Session::get('customer_id');
                                    $shipping_id = Session::get('shipping_id');
                                    if($customer_id!=NULL && $shipping_id==NULL){
                                ?>
                                <li class="nav-item"><a href="{{ URL::to('/checkout') }}"><i
                                            class="fa facrosshairs"></i> Thanh toán</a></li>
                                <?php
                                    }elseif($customer_id!=NULL && $shipping_id!=NULL){
                                ?>
                                <li class="nav-item"><a href="{{ URL::to('/payment') }}"><i
                                            class="fa facrosshairs"></i> Thanh toán</a></li>
                                <?php
                                    }else{
                                ?>
                                <li class="nav-item"><a href="{{ URL::to('/login-checkout') }}"><i
                                            class="fa fa-crosshairs"></i> Thanh toán</a>
                                </li>
                                <?php
                                    }
                                ?>
                                <li class="nav-item"><a href="{{ URL::to('/show-cart') }}"><i
                                            class="fa fashopping-cart"></i> Giỏ hàng</a></li>
                                <?php
                                    $customer_id = Session::get('customer_id');
                                    if($customer_id!=NULL){
                                ?>
                                <li class="nav-item"><a href="{{ URL::to('/taikhoan') }}"><i
                                    class="fa fa-user"></i>{{ Session::get('customer_name') }}
                            </a></li>
                                <li class="nav-item"><a href="{{ URL::to('/logout-checkout') }}"><i
                                            class="fa fa-lock"></i> Đăng xuất</a></li>
                                <?php
                                    }else{
                                ?>
                                {{-- <li class="nav-item"><a href="{{ URL::to('/taikhoan') }}"><i
                                            class="fa falock"></i>Thông tin {{ Session::get('customer_name') }}
                                    </a></li> --}}
                                <li class="nav-item"><a href="{{ URL::to('/login-checkout') }}"><i
                                            class="fa fa-lock"></i> Đăng nhập</a></li>
                                <?php
                                    }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/header-middle-->

        <div class="header-bottom">
            <!--header-bottom-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li><a href="{{ URL::to('/trang-chu') }}" class="active">Trang Chủ</a></li>
                                <li class="dropdown"><a href="#">Cửa Hàng<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="{{ URL::to('/show-cart') }}">Cart</a></li>
                                        <li><a href="{{ URL::to('/admin') }}">Login</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="#">Blog List</a></li>
                                        <li><a href="#">Blog Single</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">404</a></li>
                                <li><a href="https://www.facebook.com/himiieee">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    {{-- <div class="col-sm-3">
                        <div class="search_box pull-right">
                            <input type="text" placeholder="Search" />
                        </div>
                    </div> --}}
                    <div class="col-sm-3">
                        <div class="search_box pull-right">
                            <form action="{{ URL::to('/tim-kiem') }}" method="POST">{{ csrf_field() }}
                                <input type="text" name="keywords_submit"
                                    placeholder="Tìm kiếm sản phẩm" />
                                <input type="submit" name="search_items" class="btn btn-primary btn-sm" value="Tìm kiếm">
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--/header-bottom-->
    </header>
    <!--/header-->
