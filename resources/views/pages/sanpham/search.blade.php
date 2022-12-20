@extends('layout.layout');
@section('content')
    <div class="features_items"><!--features_items-->
        <h2 class="title text-center">Sản phẩm mới nhất</h2>
        @foreach($search_product as $key => $product)
            <div class="col-sm-4">
                <div class="product-image-wrapper">

                    <div class="single-products">
                        <div class="productinfo text-center">
                            <form action="{{URL::to('/save-cart')}}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" value="{{$product->product_id}}" class="cart_product_id_{{$product->product_id}}" name="productid_hidden">
                                <input name="qty" type="hidden" min="1" value="1" />
                                <input type="hidden" value="{{$product->product_image}}" class="cart_product_image_{{$product->product_id}}">
                                <input type="hidden" value="{{$product->product_price}}" class="cart_product_price_{{$product->product_id}}">
                                <input type="hidden" value="1"
                                       class="cart_product_qty_{{$product->product_id}}">
                                <a href="{{URL::to('/product-details/'.$product->product_id)}}">
                                    <img src="{{ URL::to('public/uploads/product/' . $product->product_image) }}">
                                    <h2>{{number_format(floatval($product->product_price)).'VNĐ'}}</h2>
                                    <p>{{$product->product_name}}</p>

                                </a>
                                <button type="submit" id="add-to-cart" class="btn btn-default add-to-cart" name="add-to-cart" data-id_product="{{$product->product_id}}" name="add-to-cart">
                                    Thêm giỏ hàng
                                </button>
                            </form>
                        </div>

                    </div>

                    <div class="choose">
                        <ul class="nav nav-pills nav-justified">
                            <li><a href="#"><i class="fa fa-plus-square"></i>Yêu thích</a></li>
                            <li><a href="#"><i class="fa fa-plus-square"></i>So sánh</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        @endforeach
    </div><!--features_items-->
    <!--/recommended_items-->
@endsection