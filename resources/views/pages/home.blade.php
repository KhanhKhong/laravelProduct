@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 category-hide">
            @include('layouts.nav')
        </div>
        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
            <div class="content-slider">
                <!--Main Slide--> 
                <div id="main-slider">
                    <div class="carousel slide">
                        <div class="carousel-inner">
                            @foreach($slide as $key => $item)
                            <div class="item{{ $key == 0 ? ' active' : '' }}" style="background-image: url(source/images/{{$item->slide_picture}})">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">{{ $item->title }}</h1>
                                    <h2 class="animation animated-item-2">{{ $item->sub_title }}</h2>
                                    <p><a class="btn-slide animation animated-item-3" href="#">Xem ngay</a></p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <!--/.carousel-inner-->
                    </div>
                    <!--/.carousel-->
                    <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
                    </a>
                    <a class="next hidden-xs" href="#main-slider" data-slide="next">
                    </a>
                </div>
                <!--//Main Slide-->
                <div class="main-top-product">
                    <div class="carousel slide" data-ride="carousel" data-type="multi" data-interval="8000" id="myCarousel1">
                        <div class="carousel-inner">
                            @foreach($accessories as $key => $accessory)
                            <div class="item {{ $key == 0 ? 'active' : '' }}">
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="top-product">
                                        <div class="top-product-left">
                                            <a href="product-detail.hrml"><img src="source/images/{{ $accessory->picture }}"/></a>
                                        </div>
                                        <div class="top-product-right">
                                            <h2><a href="#">{{ $accessory->title }}</a></h2>
                                            @if($accessory->price_sale > 0)
                                                <p>{{ number_format($accessory->price) }} đ</p>
                                                <p><span>{{ number_format($accessory->price_sale) }} đ</span></p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <a class="left1 carousel-control" href="#myCarousel1" data-slide="prev"></a>
                        <a class="right1 carousel-control" href="#myCarousel1" data-slide="next"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Banner top-->
<div class="container">
    <div class="row">

        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <div class="banner">
                <a href="#"><img src="source/images/home2_banner_top2.jpg" /></a>
            </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <div class="banner">
                <a href="#"><img src="source/images/home2_banner_top1.jpg" /></a>
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <div class="banner">
                <a href="#"><img src="source/images/home2_banner_top3.jpg" /></a>
            </div>
        </div>
    </div>
</div>
<!--//Banner top-->
<div class="container">
    <div class="row">

        <!--Product-->
        <div class="title-product">Sản phẩm mới</div>
        <div class="main-product">
            @foreach($products as $key => $product)
            <div class="item {{ $key == 0 ? ' active' : '' }}">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="product">
                        @if($product->price_sale > 0)
                            <div class="product-lable">Sale</div>
                        @endif
                        <div class="product-img"><a href="#"><img src="source/images/products/{{ $product->picture}}"/></a></div>
                        <div class="product-name"><a href="#">{{ $product->title}}</a></div>

                        <div class="product-price">
                            @if($product->price_sale > 0)
                                <span>{{ number_format($product->price_sale) }} đ</span>
                            @endif
                            @if(abs($product->price) > 0)
                                {{ number_format($product->price) }} đ
                            @endif
                        </div>

                        <div class="product-cart"><a href="{{ route('cart.create',$product->id) }}"><i class="glyphicon glyphicon-shopping-cart icon-right"></i>Thêm vào giỏ hàng</a>
                            <span class="product-wishlist"><a href="" title="Thêm vào yêu thích"><i class="fa fa-heart-o"></i></a></span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="title-product">Sản phẩm Khuyến mãi</div>
        <div class="main-product">
            <div class="carousel slide" data-ride="carousel" data-type="multi2" data-interval="8000" id="myCarousel2">
                <div class="carousel-inner">
                    @foreach($products_sale as $key => $products_sale)
                    <div class="item {{ $key == 0 ? ' active' : '' }}">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="product">
                                @if($products_sale->price_sale > 0)
                                    <div class="product-lable">Sale</div>
                                @endif
                                <div class="product-img"><a href="#"><img src="source/images/products/{{ $products_sale->picture}}"/></a></div>
                                <div class="product-name"><a href="#">{{ $products_sale->title}}</a></div>

                                <div class="product-price">
                                    @if($products_sale->price_sale > 0)
                                        <span>{{ number_format($products_sale->price_sale) }} đ</span>
                                    @endif
                                    @if(abs($products_sale->price) > 0)
                                        {{ number_format($products_sale->price) }} đ
                                    @endif
                                </div>

                                <div class="product-cart"><a href="{{ route('cart.create',$products_sale->id) }}"><i class="glyphicon glyphicon-shopping-cart icon-right"></i>Thêm vào giỏ hàng</a>
                                    <span class="product-wishlist"><a href="" title="Thêm vào yêu thích"><i class="fa fa-heart-o"></i></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <a class="left2 carousel-control" href="#myCarousel2" data-slide="prev"></a>
                <a class="right2 carousel-control" href="#myCarousel2" data-slide="next"></a>
            </div>       
        </div>
        <!--Product By List-->
        <div class="title-product">Điện thoại</div>
        <div class="main-product">

            @foreach($phones as $key => $phone)
            <div class="item {{ $key == 0 ? ' active' : '' }}">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="product">
                        @if($phone->price_sale > 0)
                            <div class="product-lable">Sale</div>
                        @endif
                        <div class="product-img"><a href="#"><img src="source/images/products/{{ $phone->picture}}"/></a></div>
                        <div class="product-name"><a href="#">{{ $phone->title}}</a></div>

                        <div class="product-price">
                            @if($phone->price_sale > 0)
                                <span>{{ number_format($phone->price_sale) }} đ</span>
                            @endif
                            @if(abs($phone->price) > 0)
                                {{ number_format($phone->price) }} đ
                            @endif
                        </div>

                        <div class="product-cart"><a href="{{ route('cart.create',$phone->id) }}"><i class="glyphicon glyphicon-shopping-cart icon-right"></i>Thêm vào giỏ hàng</a>
                            <span class="product-wishlist"><a href="" title="Thêm vào yêu thích"><i class="fa fa-heart-o"></i></a></span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            <!-- End Product by list-->
        </div>
        <div class="title-product">Sản phẩm hot</div>
        <div class="main-product">
            <div class="carousel slide" data-ride="carousel" data-type="multi2" data-interval="8000" id="myCarousel3">
                <div class="carousel-inner">
                    @foreach($products_hot as $item => $products_hot)
                    <div class="item {{ $item == 0 ? ' active' : '' }}">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="product">
                                @if($products_hot->price_sale > 0)
                                    <div class="product-lable">Sale</div>
                                @endif
                                <div class="product-img"><a href="#"><img src="source/images/products/{{ $products_hot->picture}}"/></a></div>
                                <div class="product-name"><a href="#">{{ $products_hot->title}}</a></div>

                                <div class="product-price">
                                    @if($products_hot->price_sale > 0)
                                        <span>{{ number_format($product->price_sale) }} đ</span>
                                    @endif
                                    @if(abs($products_hot->price) > 0)
                                        {{ number_format($product->price) }} đ
                                    @endif
                                </div>

                                <div class="product-cart"><a href="{{ route('cart.create',$products_hot->id) }}"><i class="glyphicon glyphicon-shopping-cart icon-right"></i>Thêm vào giỏ hàng</a>
                                    <span class="product-wishlist"><a href="" title="Thêm vào yêu thích"><i class="fa fa-heart-o"></i></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <a class="left2 carousel-control" href="#myCarousel3" data-slide="prev"></a>
                <a class="right2 carousel-control" href="#myCarousel3" data-slide="next"></a>
            </div>       
        </div>
    </div>
</div><!--//Containner-->

<div class="container">
    <!--News-->
    <div class="title-product">Tin tức</div>
    <div class="main-news1">
        <div class="carousel slide" data-ride="carousel" data-type="multi3" data-interval="80000" id="myCarousel4">
            <div class="carousel-inner">
                @foreach($news as $key => $new)
                <div class="item {{ $key == 0 ? 'active' : '' }}">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="news">
                            <div class="news-left">
                                <a href="#"><img src="/source/images/news/{{ $new->picture }}"/></a> 
                            </div>
                            <div class="news-right">
                                <h2><a href="#">{{ $new->title }}</a> </h2>
                                <p><span><i class="fa fa-calendar icon-right"></i>{{ $new->created_at }}</span></p>
                                <p>{{ $new->front_description }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <a class="left2 carousel-control" href="#myCarousel4" data-slide="prev"></a>
            <a class="right2 carousel-control" href="#myCarousel4" data-slide="next"></a>
        </div>
    </div>
</div>
@endsection