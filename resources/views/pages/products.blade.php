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
                        <li><a href="{{ route('page.home') }}"><i class="glyphicon glyphicon-home icon-right"></i>Trang chủ</a></li>
                        <li><a href="#">Sản phẩm</a></li>
                        <li>{{ $cateName->title }}</li>
                    </ul>
                </div>

                <!--Banner-->
                <div class="banner">
                    <a href="#"><img src="/source/images/banner-content1.jpg"/></a>
                </div>
                <!--Product-->
                <div class="title-product"><h1>{{ $cateName->title }}</h1></div>
                <div class="main-product">
                    <div class="row">
                        @foreach($productOfCate as $item)
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="product">
                                <div class="product-img"><a href="{{ route('page.product_detail',$item->id) }}"><img src="/source/images/products/{{ $item->picture }}"/></a></div>
                                <div class="product-name"><a href="{{ route('page.product_detail',$item->id) }}">{{ $item->title }}</a></div>
                                <div class="product-price"><span>
                                    @if($item->price_sale > 0)
                                        {{ $item->price_sale }}
                                    @else
                                        -
                                    @endif
                                </span>{{ $item->price }} đ</div>
                                <div class="product-cart"><a href="{{ route('cart.create',$item->id) }}"><i class="glyphicon glyphicon-shopping-cart icon-right"></i>Thêm vào giỏ hàng</a>
                                    <span class="product-wishlist"><a href="" title="Thêm vào yêu thích"><i class="fa fa-heart-o"></i></a></span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="paging">
                        @if ($productOfCate->lastPage() > 1)
                        <ul>
                            <li>
                                <a class="{{ ($productOfCate->currentPage() == 1) ? ' active' : '' }}" href="{{ $productOfCate->url(1) }}">Đầu</a>
                            </li>
                            @for ($i = 1; $i <= $productOfCate->lastPage(); $i++)
                                <li>
                                    <a class="{{ ($productOfCate->currentPage() == $i) ? ' active' : '' }}" href="{{ $productOfCate->url($i) }}">{{ $i }}</a>
                                </li>
                            @endfor
                            <li>
                                <a class="{{ ($productOfCate->currentPage() == $productOfCate->lastPage()) ? ' active' : '' }}" href="{{ $productOfCate->url($productOfCate->lastPage()) }}">Cuối</a>
                            </li>
                        </ul>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection