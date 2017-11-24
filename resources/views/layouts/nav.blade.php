
@if(Route::currentRouteName() == 'page.home')
<div class="category">
    <ul class="categoryb">
        @foreach($cates as $item)
            @if($item->children->count() > 0)
            <li class="has-sub"><a href="{{ route('page.products',['id' => $item->id]) }}"> <i class="fa fa-check-circle icon-right"></i>{{$item->title}}</a>
                <div class="sub-categoty" style="background-image:url(source/images/iphone7-plus-jetblack-select-2016.jpg)">
                    <div class="sub-categoty-left">
                        <h2>ĐIỆN THOẠI</h2>
                        <ul>
                            @foreach($item->children as $submenu)
                                <li><a href="{{ route('page.products',['id' => $submenu->id]) }}">{{$submenu->title}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="clear"></div>
                </div>
            </li>
            @else
                <li><a href="{{ route('page.products',['id' => $item->id]) }}"> <i class="fa fa-check-circle icon-right"></i>{{$item->title}}</a></li>
            @endif
        @endforeach
    </ul>
</div>
@else
<div class="category">
    <ul class="categoryb">
        @foreach($cates as $item)
            @if($item->children->count() > 0)
            <li class="has-sub"><a href="{{ route('page.products',['id' => $item->id]) }}"> <i class="fa fa-check-circle icon-right"></i>{{$item->title}}</a>
                <div class="sub-categoty" style="background-image:url(source/images/iphone7-plus-jetblack-select-2016.jpg)">
                    <div class="sub-categoty-left">
                        <h2>ĐIỆN THOẠI</h2>
                        <ul>
                            @foreach($item->children as $submenu)
                                <li><a href="{{ route('page.products',['id' => $submenu->id]) }}">{{$submenu->title}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="clear"></div>
                </div>
            </li>
            @else
                <li><a href="{{ route('page.products',['id' => $item->id]) }}"> <i class="fa fa-check-circle icon-right"></i>{{$item->title}}</a></li>
            @endif
        @endforeach
    </ul>
</div>
<div class="title-product">Khuyến mãi</div>

@foreach($products_sale as $item)
<div class="product">
    <div class="product-lable">Sale</div>
    <div class="product-img"><a href="{{ url('product-detail/'.$item->id) }}"><img src="/source/images/products/{{ $item->picture }}"/></a></div>
    <div class="product-name"><a href="{{ url('product-detail/'.$item->id) }}">{{ $item->title }}</a></div>
    <div class="product-price"><span>{{ $item->price_sale }}đ</span>{{ $item->price }}đ
    </div>
    <div class="product-cart"><a href="{{ route('cart.create',$item->id) }}"><i class="glyphicon glyphicon-shopping-cart icon-right"></i>Thêm vào giỏ hàng</a>
        <span class="product-wishlist"><a href="" title="Thêm vào yêu thích"><i class="fa fa-heart-o"></i></a></span>
    </div>
</div>
@endforeach
<div class="title-product">Tag</div>
<div class="tag">
    <a href="">Iphone</a>
    <a href="">Laptop</a>
    <a href="">Samsung</a>
    <a href="">Dell</a>
    <a href="">máy cũ</a>
    <a href="">Sim 4G</a>
</div>
@endif