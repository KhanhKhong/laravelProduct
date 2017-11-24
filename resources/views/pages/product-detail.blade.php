@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 category-hide">
            @include('layouts.nav')
        </div>
        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
            <div class="title-product3">
                <ul>
                    <li><a href="{{ route('page.home') }}"><i class="glyphicon glyphicon-home icon-right"></i>Trang chủ</a></a></li>
                    <li><a href="#">Sản phẩm</a></li>
                    <li><a href="{{ URL('/products/'.$category_id->id) }}">{{ $category_id->title }}</a></li>
                    <li>{{ $details->title }}</li>
                </ul>
            </div> 

            <div class="product-detail">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="product-detail-img">
                            <div >
                                <img id="zoom_03" src="/source/images/products/{{ $details->picture }}" width="100%" data-zoom-image="/source/images/products/{{ $details->picture }}" />
                            </div>
                            <div id="gallery_01">
                                <ul id="mycarousel" class="jcarousel-skin-tango">
                                    @foreach($slides as $slide)
                                    <li>
                                        <a href="javascript:void(0)" data-image="/source/images/products/{{ $slide->image }}" data-zoom-image="/source/images/products/{{ $slide->image }}">
                                            <img id="zoom_03" src="/source/images/products/{{ $slide->image }}" />
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="des-pr-de">
                            <h1>{{ $details->title }}</h1>
                            <p class="price">
                            {{ $details->price }}đ
                            </p>
                            <div class="des-pr-de1">
                                <p>Hàng mới 100%</p>
                                <p>Số lượng: {{ $details->total_one }}</p>
                            </div>
                            <div>
                                <p>Số Lượng: <input type="number" class="form-control text-center btn-prde0" value="1"></p>

                                <span>
                                    <button id="add-to-cart" class="btn btn-prde" type="button">Mua ngay</button>
                                </span>
                                <span>
                                    <button id="add-to-cart" class="btn btn-prde1" type="button" title="Thêm vào yêu thích"><i class="fa fa-heart-o"></i></button>
                                </span>
                                <span>
                                    <button id="add-to-cart" class="btn btn-prde1" type="button" title="Thêm vào giỏ hàng"><a href="{{ route('cart.create',$details->id) }}">
                                        <i class="glyphicon glyphicon-shopping-cart"></i>
                                    </a>
                                    </button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                
                {!! $details->description !!}
            
            </div>    

            <!--Product Relate-->
            <div class="title-product">Sản phẩm liên quan</div>
            <div class="main-product">
                <div class="row">
                    @foreach($products as $product)
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="product">
                            @if($product->price_sale > 0)
                                <div class="product-lable">Sale</div>
                            @endif
                            <div class="product-img"><a href="#"><img src="/source/images/products/{{ $product->picture }}"/></a></div>
                            <div class="product-name"><a href="{{ URL('/product-detail/'.$product->id) }}">{{ $product->title }}</a></div>
                            <div class="product-price"><span>
                            @if($product->price_sale > 0)
                                {{ $product->price_sale }}
                            @else
                                -
                            @endif
                            </span>{{ $product->price }}</div>
                            <div class="product-cart"><a href="{{ route('cart.create',$product->id) }}"><i class="glyphicon glyphicon-shopping-cart icon-right"></i>Thêm vào giỏ hàng</a>
                                <span class="product-wishlist"><a href="" title="Thêm vào yêu thích"><i class="fa fa-heart-o"></i></a></span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection