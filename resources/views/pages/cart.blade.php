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
                    <li>Giỏ hàng</li>
                </ul>
            </div>     
            <!--Cart-->
            <div class="cart1">
                <table id="cart" class="table table-hover table-condensed">
                    <thead>
                        <tr>
                            <th style="width:40%">Sản phẩm</th>
                            <th style="width:10%">Giá</th>
                            <th style="width:8%">Số lượng</th>
                            <th style="width:22%" class="text-center">Thành tiền</th>
                            <th style="width:20%">Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($carts as $row)
                        <form action="{{ route('cart.edit',$row->rowId) }}" method="GET">
                            <tr>
                                <td data-th="Sản Phẩm">
                                    <div class="row">
                                        <div class="col-sm-3 hidden-xs"><img src="source/images/products/{{ $row->options->has('image')? $row->options->image : '' }}" alt="..." class="img-responsive" />
                                        </div>
                                        <h4 class="nomargin">{{ $row->name }}</h4>
                                    </div>
                                    </div>
                                </td>
                                <td data-th="Giá:">{{ $row->price }}</td>
                                <td data-th="Số Lượng:">
                                    <input type="number" name="quantity" class="form-control text-center" value="{{ $row->qty }}">
                                </td>
                                <td data-th="Tổng Cộng" class="text-center">{{ $row->subtotal }}</td>

                                <td class="actions" data-th="">
                                    <input type="submit" class="btn btn-info btn-sm" value="Cập nhật">
                                    <a href="{{ route('cart.remove',$row->rowId) }}" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i>
                                    </a>
                                </td>
                            </tr>
                        </form>
                    @endforeach
                    </tbody>
                    <tr>
                        <th style="width:40%">Tổng: {{ Cart::content()->count() }}</th>
                        <th style="width:10%"></th>
                        <th style="width:8%" class="text-center">{{ Cart::count() }}</th>
                        <th style="width:22%" class="text-center">{{ Cart::subtotal()}}</th>
                        <th style="width:20%"></th>
                    </tr>
                </table>
            </div>
            <div class="row">
                <div class="col-xs-6"><a href="{{ URL::previous() }}" class="btn btn-cart3 float-left"><i class="fa fa-angle-left"></i> Tiếp tục mua hàng</a>
                </div>
                <div class="col-xs-6"><a href="#" class="btn-cart3 float-right">Thanh toán<i class="fa fa-angle-right"></i></a>
                </div>
            </div>

        </div>
        <!--//Cart--> 

    </div>
</div>
@endsection