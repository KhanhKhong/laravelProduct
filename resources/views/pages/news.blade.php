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
                    <li>Tin tức</li>
                </ul>
            </div>     

            <!--News-->
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


            <div class="paging">
                @if ($news->lastPage() > 1)
                <ul>
                    <li>
                        <a class="{{ ($news->currentPage() == 1) ? ' active' : '' }}" href="{{ $news->url(1) }}">Đầu</a>
                    </li>
                    @for ($i = 1; $i <= $news->lastPage(); $i++)
                        <li>
                            <a class="{{ ($news->currentPage() == $i) ? ' active' : '' }}" href="{{ $news->url($i) }}">{{ $i }}</a>
                        </li>
                    @endfor
                    <li>
                        <a class="{{ ($news->currentPage() == $news->lastPage()) ? ' active' : '' }}" href="{{ $news->url($news->lastPage()) }}">Cuối</a>
                    </li>
                </ul>
                @endif
            </div>

        </div>
    </div>
</div>
@endsection