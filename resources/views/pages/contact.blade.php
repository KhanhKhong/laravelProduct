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
                    <li>Liên hệ</li>
                </ul>
            </div>     
            <!--Contact-->
            <div class="main-box-contact">
                <h2>Liên hệ</h2>

                <div class="map-google">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.508975039395!2d105.82242961423361!3d20.972225195083315!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135acf9a1e711ed%3A0xb1a286cf8850ea8!2zMjUwIEtpbSBHaWFuZywgS2ltIFbEg24sIMSQ4bqhaSBLaW0sIFRoYW5oIFh1w6JuLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1490023500281" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                
                {!! $description->description !!}
                <div class="row">
                    <div class="col-xs-12 col-md-6">
                        <form>
                            <div class="form-group">
                                <label class="lable-contact">Họ và tên</label>
                                <input type="name" class="input-contact">
                            </div>
                            <div class="form-group">
                                <label class="lable-contact">Điện thoại</label>
                                <input type="phone" class="input-contact">
                            </div>
                            <div class="form-group">
                                <label class="lable-contact">Email<span>*</span>
                                </label>
                                <input type="email" class="input-contact">
                            </div>
                            <div class="form-group">
                                <label class="lable-contact">Nội dung liên hệ<span>*</span>
                                </label>
                                <textarea class="input-contact" rows="5"></textarea>
                            </div>
                            <button type="submit" class="btn-contact">Gửi</button>
                        </form>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        {!! $description->information !!}
                    </div>
                </div>
            </div>
            <!--//Contact--> 

        </div>
    </div>
</div>
@endsection