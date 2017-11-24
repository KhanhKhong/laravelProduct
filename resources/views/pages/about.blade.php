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
                    <li>Giới Thiệu</li>
                </ul>
            </div>     
			<h2>Giới Thiệu</h2>

            {!! $description->description !!}

        </div>
    </div>
</div>

@endsection