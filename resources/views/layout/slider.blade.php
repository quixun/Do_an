<section id="slider">
    <!--slider-->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#slider-carousel" data-slide-to="1"></li>
                        <li data-target="#slider-carousel" data-slide-to="2"></li>
                    </ol>

                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="col-sm-6">
                                <h1><span>11</span>-SEPTEMBER</h1>
                                <h2>DEMETER - ANGEL</h2>
                                <p>“Thời trang chính là vỏ bọc sắt để đấu tranh với thực tại trong cuộc sống hàng ngày”.</p>
                                <button type="button" class="btn btn-default get">Get it now</button>
                            </div>
                            <div class="col-sm-6">
                                <img src="{{ '../frontend/images/slide1.png' }}" class="girl img-responsive"
                                    alt="" />
                                <img src="{{ '../frontend/images/pricing.png' }}" class="pricing" alt="" />
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-sm-6">
                                <h1><span>11</span>-SEPTEMBER</h1>
                                <h2>DEMETER - ANGEL</h2>
                                <p>“Thời trang có thể phai tàn nhưng phong cách sẽ tồn tại mãi mãi”.</p>
                                <button type="button" class="btn btn-default get">Get it now</button>
                            </div>
                            <div class="col-sm-6">
                                <img src="{{ '../frontend/images/slide2.png' }}" class="girl img-responsive"
                                    alt="" />
                                <img src="{{ '../frontend/images/pricing.png' }}" class="pricing" alt="" />
                            </div>
                        </div>

                        <div class="item">
                            <div class="col-sm-6">
                                <h1><span>11</span>-SEPTEMBER</h1>
                                <h2>DEMETER - ANGEL</h2>
                                <p>“Bất cứ ai cũng có thể diện những bộ cánh đẹp nhất và trở nên thật lộng lẫy, nhưng những thứ mọi người mặc trong ngày nghỉ mới thực sự hấp dẫn”.</p>
                                <button type="button" class="btn btn-default get">Get it now</button>
                            </div>
                            <div class="col-sm-6">
                                <img src="{{ '../frontend/images/slide3.png' }}" class="girl img-responsive"
                                    alt="" />
                                <img src="{{ '../frontend/images/pricing.png' }}" class="pricing" alt="" />
                            </div>
                        </div>

                    </div>

                    <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>
<!--/slider-->
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Danh Mục Sản Phẩm</h2>
                    <div class="panel-group category-products" id="accordian">
                        <!--category-productsr-->
                        @foreach ($category as $key => $cate)
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a
                                            href="{{ URL::to('/danh-muc-san-pham/' . $cate->slug_category_product) }}">{{ $cate->category_name }}</a>
                                    </h4>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!--/category-products-->

                    <div class="brands_products"><!--brands_products-->
                        <h2>Thương hiệu sản phẩm</h2>
                        <div class="brands-name">
                        <ul class="nav nav-pills nav-stacked">
                        @foreach($brand as $key => $brand)
                        <li><a href="{{URL::to('/thuong-hieu-san-pham/'.$brand->brand_slug)}}"> <span class="pull-right">(<?php echo rand(1,50) ?>)</span>{{$brand->brand_name}}</a></li>
                        @endforeach
                        </ul>
                        </div>
                        </div><!--/brands_products-->

                    <div class="price-range">
                        <!--price-range-->
                        <h2>Price Range</h2>
                        <div class="well text-center">
                            <input type="text" class="span2" value="" data-slider-min="0"
                                data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]"
                                id="sl2"><br />
                            <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
                        </div>
                    </div>
                    <!--/price-range-->

                    <div class="shipping text-center">
                        <!--shipping-->
                        <img src="{{ 'frontend/images/shipping.jpg' }}" alt="" />
                    </div>
                    <!--/shipping-->

                </div>
            </div>
