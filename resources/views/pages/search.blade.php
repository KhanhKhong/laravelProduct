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
                        <li><a href="index.php"><i class="glyphicon glyphicon-home icon-right"></i>Trang chủ</a></a></li>
                        @if(count($products) != 0)
                            <li>Tìm thấy {{ count($products) }} sản phẩm, {{ count($news) }} tin tức</li>
                        @elseif(count($news) != 0)
                            <li>Tìm thấy {{ count($news) }} tin tức, {{ count($products) }} sản phẩm</li>
                        @else
                            <li>Không có thông tin</li>
                        @endif
                    </ul>
                </div>
                <!--Product-->
                <div class="main-product">
                    @if((count($news) != 0) && (count($products) != 0))
                        <h4>Số sản phẩm</h4>
                        <div class="row">
    						@foreach($products as $item)
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="product">
                                    <div class="product-img"><a href="product-detail.html"><img src="source/images/products/{{ $item->picture }}"/></a></div>
                                    <div class="product-name"><a href="product-detail.html">{{ $item->title }}</a></div>
                                    <div class="product-price"><span>-</span>{{ $item->price }}đ</div>
                                    <div class="product-cart"><a href=""><i class="glyphicon glyphicon-shopping-cart icon-right"></i>Thêm vào giỏ hàng</a>
                                        <span class="product-wishlist"><a href="" title="Thêm vào yêu thích"><i class="fa fa-heart-o"></i></a></span>
                                    </div>
                                </div>
                            </div>
    						@endforeach
                        </div>
                        <div class="clearfix"></div>
                        <h4>Số tin tức</h4>
                        @foreach($news as $new)
                        <div class="main-news">
                            <div class="news-left2">
                                <a href="{{ URL('/new-detail/'.$new->id) }}"><img src="source/images/news/{{ $new->picture }}" /></a> 
                            </div>
                            <div class="news-right2">
                                <h2><a href="{{ URL('/new-detail/'.$new->id) }}">{{ $new->title }}</a> </h2>
                                <p><span><i class="fa fa-calendar icon-right"></i>{{ $new->created_at }}</span></p>
                                <p> {{ $new->front_description }}
                                </p>
                            </div>
                        </div>
                        @endforeach

                    @elseif(count($news) != 0)
                        @foreach($news as $new)
                        <div class="main-news">
                            <div class="news-left2">
                                <a href="{{ URL('/new-detail/'.$new->id) }}"><img src="source/images/news/{{ $new->picture }}" /></a> 
                            </div>
                            <div class="news-right2">
                                <h2><a href="{{ URL('/new-detail/'.$new->id) }}">{{ $new->title }}</a> </h2>
                                <p><span><i class="fa fa-calendar icon-right"></i>{{ $new->created_at }}</span></p>
                                <p> {{ $new->front_description }}
                                </p>
                            </div>
                        </div>
                        @endforeach
                    @elseif(count($products) != 0)
                        <div class="row">
                            @foreach($products as $item)
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="product">
                                    <div class="product-img"><a href="product-detail.html"><img src="source/images/products/{{ $item->picture }}"/></a></div>
                                    <div class="product-name"><a href="product-detail.html">{{ $item->title }}</a></div>
                                    <div class="product-price"><span>-</span>{{ $item->price }}đ</div>
                                    <div class="product-cart"><a href=""><i class="glyphicon glyphicon-shopping-cart icon-right"></i>Thêm vào giỏ hàng</a>
                                        <span class="product-wishlist"><a href="" title="Thêm vào yêu thích"><i class="fa fa-heart-o"></i></a></span>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection