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
                    <li><a href="{{ route('page.news') }}">Tin tức</a></li>
                    <li>{{ $detail->title }}</li>
                </ul>
            </div>     
            <!--News-->
            <div class="news-detail">
                <h2>{{ $detail->title }}</h2>
                <hr>
                {!! $detail->description !!}

            </div>
            <div class="title-product">Tin liên quan</div>
            <div class="news-relate">
                @foreach($news as $item)
                    <a href="{{ URL('/new-detail/'.$item->id) }}">{{ $item->title }}</a>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection