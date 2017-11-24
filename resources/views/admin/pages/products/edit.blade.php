@extends('admin.master')
@section('content')
<div id="page-wrapper">
    <div class="row">
    	<div class="col-lg-2"></div>
        <div class="col-lg-8">
            <h1 class="page-heading">Create Product</h1>
        </div>
        <div class="col-lg-2"></div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
    	<div class="col-lg-1"></div>
        <div class="col-lg-10">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="panel panel-default">
                <form action="{{ route('update_product') }}" method="post" enctype="multipart/form-data">
                     {{ csrf_field() }}
                     <input type="text" hidden="true" name="product_id" value="{{ isset($editItems) ? $editItems->id : '' }}">
                    <div class="panel-body">
                        <div class="row">
							<div class="col-lg-5">
                                <div class="item form-group">
                                    <label class="control-label" for="picture" style="display: block">Image<span class="required">*</span>
                                        <div class="input-group">
                                            <div class="input-group-btn">
                                                <span class="btn btn-primary">
                                                    Browse… <input id="picture" type="file" class="loadFile" name="picture" accept="image/*" style="display: none">
                                                </span>
                                            </div>
                                            <input type="text" class="form-control" id="image" name="image1" readonly="">
                                        </div>
                                    </label>
                                </div>
								<div class="form-group">
                                    <label>Title</label>
                                    <input class="form-control" name="title" value="{{ isset($editItems) ? $editItems->title : '' }}">
                                </div>
                                <div class="form-group">
                                    <label>Price sale</label>
                                    <input class="form-control" name="price_sale" value="{{ isset($editItems) ? $editItems->price_sale : '' }}">
                                </div>
                                <div class="form-group">
                                    <label>Price</label>
                                    <input class="form-control" name="price" value="{{ isset($editItems) ? $editItems->price : '' }}">
                                </div>
                                <div class="form-group">
                                    <label>Total one</label>
                                    <input class="form-control" name="total_one" value="{{ isset($editItems) ? $editItems->total_one : '' }}">
                                </div>
                                <div class="form-group">
                                    <label>Sản Phẩm Hot</label>
                                    <select class="form-control" name="hot">
                                        @if(isset($editItems) && $editItems->hot == 0)
                                            <option value="0" selected>Không</option>
                                            <option value="1">Có</option>
                                        @elseif(isset($editItems) && $editItems->hot == 1)
                                            <option value="0">Không</option>
                                            <option value="1" selected>Có</option>
                                        @else
                                            <option value="0">Không</option>
                                            <option value="1">Có</option>
                                        @endif
                                    </select>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label" for="pictureMulti" style="display: block">Image slide product detail<span class="required">*</span>
                                        <div class="input-group">
                                            <div class="input-group-btn">
                                                <span class="btn btn-primary">
                                                    Browse… <input id="pictureMulti" type="file" class="loadFileMulti" name="imageMulti[]" accept="image/*" style="display: none" multiple>
                                                </span>
                                            </div>
                                            <input type="text" class="form-control" id="imageMulti" name="image2" readonly="">
                                        </div>
                                    </label>
                                </div>
							</div>
							<div class="col-lg-5">
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea id="editor1" class="ckeditor" name="description">{{ isset($editItems) ? $editItems->description : '' }}</textarea>  
                                </div>
                                <div class="form-group">
                                    <label>Category</label>
									<select class="js-example-basic-single form-control" name="category_id">
							                <option>Select Category</option>
                                        @foreach($cate as $row) 
                                            <option value="{{ $row->id }}" {{ (isset($editItems) ? $editItems->category_id : '') == $row->id ? 'selected="selected"' : '' }}>{{ $row->title }}</option>
                                        @endforeach
									</select>
                                </div>
							</div>
                        </div>
                        <button type="submit" class="btn btn-success">Create Product</button>
                        <!-- /.row (nested) -->
                    </div>
                </form>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <div class="col-lg-1"></div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>
@endsection
@section('footer_script')
<script src="/templateEditor/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
    CKEDITOR.replace( 'editor1' );
	$(document).ready(function() {
	    $('.js-example-basic-single').select2();
	});
    $('.loadFile').change(function (event) {
        var reader = new FileReader();
        reader.onload = function () {
            var output = document.getElementById('profilePhoto');
            document.getElementById("image").value = document.getElementById("picture").value;
            output.src = reader.result;
        };
        
        reader.readAsDataURL(event.target.files[0]);
    });
    $('.loadFileMulti').change(function (event) {
        var reader = new FileReader();
        reader.onload = function () {
            var output = document.getElementById('profilePhoto');
            document.getElementById("imageMulti").value = document.getElementById("pictureMulti").value;
            output.src = reader.result;
        };
        
        reader.readAsDataURL(event.target.files[0]);
    });
</script>
@endsection