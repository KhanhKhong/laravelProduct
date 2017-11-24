@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <div class="title-product3">
            <ul>
                <li><a href="index.php"><i class="glyphicon glyphicon-home icon-right"></i>Trang chủ</a></a></li>
                <li>Đăng nhập & Đăng ký</li>
            </ul>
        </div>     
        <!--Login-->
        <div class="cart2">
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <div class="box">
                        <h3>Đăng nhập</h3>
                        <p>Nếu bạn đã có tài khoản</p>
                        <form method="post">
                            <label>Tên đăng nhập <sup class="required">*</sup></label>
                            <br>
                            <input type="text" class="input" name="username">
                            <br>
                            <label>Mật khẩu<sup class="required">*</sup>
                            </label>
                            <br>
                            <input type="password" class="input" name="password">
                            <br>
                            <input type="submit" name="login" class="btn-contact" value="Đăng nhập" />
                        </form>
                    </div>
                </div>

                <div class="col-xs-12 col-md-6">
                    <div class="box">
                        <h3>Đăng ký</h3>
                        <p>Nếu bạn chưa có tài khoản</p>
                        <form method="post" onsubmit="return checkForm(this)">
                            <label>Tên đăng nhập <sup class="required">*</sup>
                            </label>
                            <br>
                            <input type="text" class="input" id="username" name="username" required="true" minlength="6" maxlength="30">
                            <br>
                            <label>Mật khẩu<sup class="required">*</sup>
                            </label>
                            <br>
                            <input type="password" class="input" id="password" name="password" value="" required="true" minlength="6" maxlength="30">
                            <br>
                            <label>Nhập lại mật khẩu<sup class="required">*</sup>
                            </label>
                            <br>
                            <input type="password" class="input" id="retype" name="retype">
                            <div id="form-alert">Please enter the same Password as above.</div>
                            <br>
                            <label>Họ Tên </label>
                            <br>
                            <input type="text" class="input" data-validate="" id="fullname" name="fullname" value="">
                            <br>
                            <label>Email<sup class="required">*</sup>
                            </label>
                            <br>
                            <input type="email" class="input" data-validate="" id="email" name="email" required="true">
                            <br>
                            <label>Điện Thoại</label>
                            <br>
                            <input type="text" class="input" data-validate="" id="phone" name="phone" value="">
                            <br>
                            <label>Địa chỉ</label>
                            <br>
                            <input type="text" class="input" data-validate="" id="address" name="address" value="">
                            <br>
                            <input type="submit" name="register" class="btn-contact" value="Đăng ký" />
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <!--//Login--> 
    </div>
</div>
@endsection