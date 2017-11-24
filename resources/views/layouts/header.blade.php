<div class="menu-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-xs-12 col-sm-6 text-left none-top">
                <ul>
                    <li>Email: info@gmail.com</li>
                    <li> Phone: 0123456789</li>
                </ul> 
            </div>
            <div class="col-lg-6 col-xs-12 col-sm-6 text-right">
                <ul>
                    <li><a href="#">Yêu thích</a></li>
                    <li><a href="{{route('page.cart')}}">Giỏ hàng ({{ Cart::content()->count() }})</a></li>
                    @guest
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="header">
    <div class="container">
        <div class="header-inner">
            <div class="row">
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <div class="logo"> <a href="{{ route('page.home') }}"><img src="/source/images/logo1.PNG"/></a></div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="search">
                        <form action="{{ route('page.search') }}" method="get">
                            <input type="text" class="search-input" name="search" placeholder="Nhập tên sản phẩm bạn muốn tìm">
                            <button type="submit" class="search-btn">Tìm kiếm</button>
                        </form>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <div class="cart-header"><a href="{{route('page.cart')}}">({{ Cart::content()->count()}}) Sản phẩm</a><span><i class="glyphicon glyphicon-shopping-cart"></i></span></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="main-menu-full">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 category-hide">
                <div class="category-title">Danh mục<span><i  class="glyphicon glyphicon-align-justify"></i></span></div>
            </div>  
            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">   
                <!--Main Menu-->
                <div class="main-menu">    
                    <div class="navbar navbar-default" role="navigation">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Menu</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <div class="none-menu">DANH MỤC SẢN PHẨM</div>
                        </div>
                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="{{route('page.home')}}"><span>Trang chủ</span></a>
                                </li>
                                <li><a href="{{route('page.about')}}"><span>Giới thiệu</span></a>
                                </li>
                                <li><a href="{{ URL('/products/1') }}"><span>Sản phẩm</span></a>
                                    <ul class="dropdown-menu">
                                        @if (isset($cates))
                                            @foreach($cates as $item)
                                                @if($item->children->count() > 0)
                                                <li><a href="{{ route('page.products',['id' => $item->id]) }}">{{$item->title}}</a>
                                                    <ul class="dropdown-menu">
                                                        @foreach($item->children as $submenu)
                                                            <li><a href="{{ route('page.products',['id' => $submenu->id]) }}">{{$submenu->title}}</a></li>
                                                        @endforeach
                                                    </ul>
                                                </li>
                                                @else
                                                    <li><a href="{{ route('page.products',['id' => $item->id]) }}">{{$item->title}}</a></li>
                                                @endif
                                            @endforeach
                                        @else
                                            <li><a href="javascript:void(0)">Điện thoại</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">IPhone</a></li>
                                                    <li><a href="#">Samsung</a></li>
                                                    <li><a href="#">OPPO</a></li>
                                                    <li><a href="#">Sony</a></li>
                                                    <li><a href="#">Asus</a></li>
                                                    <li><a href="#">Nokia</a></li>
                                                    <li><a href="#">LG</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="javascript:void(0)">Tablet</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">IPhone</a></li>
                                                    <li><a href="#">Samsung</a></li>
                                                    <li><a href="#">OPPO</a></li>
                                                    <li><a href="#">Sony</a></li>
                                                    <li><a href="#">Asus</a></li>
                                                    <li><a href="#">Nokia</a></li>
                                                    <li><a href="#">LG</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="javascript:void(0)">Laptop</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">IPhone</a></li>
                                                    <li><a href="#">Samsung</a></li>
                                                    <li><a href="#">OPPO</a></li>
                                                    <li><a href="#">Sony</a></li>
                                                    <li><a href="#">Asus</a></li>
                                                    <li><a href="#">Nokia</a></li>
                                                    <li><a href="#">LG</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Phụ kiện</a></li>
                                            <li><a href="#">Máy cũ</a></li>
                                            <li><a href="#">Sime, Thẻ</a></li>
                                        @endif
                                    </ul>
                                </li>
                                <li><a href="{{route('page.news')}}"><span>Tin tức</span></a></li>
                                <li><a href="{{route('page.contact')}}"><span>Liên hệ</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>