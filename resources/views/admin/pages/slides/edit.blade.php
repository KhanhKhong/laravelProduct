@extends('admin.master')
@section('content')
<div id="page-wrapper">
    <div class="row">
    	<div class="col-lg-2"></div>
        <div class="col-lg-8">
            <h1 class="page-heading">{{ isset($editItems) ? 'Edit slide item' : 'Create slide item' }}</h1>
        </div>
        <div class="col-lg-2"></div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
    	<div class="col-lg-1"></div>
        <div class="col-lg-10">
            <div class="panel panel-default">
                <form action="{{ route('update_slide') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="text" hidden="true" name="slide_id" value="{{ isset($editItems) ? $editItems->id : '' }}">
                    <div class="panel-body">
                        <div class="row">
							<div class="col-lg-5">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
								<div class="form-group">
                                    <label>Title</label>
                                    <input class="form-control" name="title" value="{{ isset($editItems) ? $editItems->title : '' }}">
                                </div>
                                <div class="form-group">
                                    <label>Subtitle</label>
                                    <input class="form-control" name="sub_title" value="{{ isset($editItems) ? $editItems->sub_title : '' }}">
                                </div>
                                <div class="item form-group">
                                    <label class="control-label" for="picture" style="display: block">Image<span class="required">*</span>
                                        <div class="input-group">
                                            <div class="input-group-btn">
                                                <span class="btn btn-primary">
                                                    Browse… <input id="picture" type="file" class="loadFile" name="slide_picture" accept="image/*" style="display: none">
                                                </span>
                                            </div>
                                            <input type="text" class="form-control" id="image" name="image" readonly="">
                                        </div>
                                    </label>
                                </div>
							</div>
                        </div>
                        <button type="submit" class="btn btn-success">{{ isset($editItems) ? 'Edit item' : 'Create item' }}</button>
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
<script type="text/javascript">
    $('.loadFile').change(function (event) {
        var reader = new FileReader();
        reader.onload = function () {
            var output = document.getElementById('profilePhoto');
            document.getElementById("image").value = document.getElementById("picture").value;
            output.src = reader.result;
        };
        
        reader.readAsDataURL(event.target.files[0]);
    });
</script>
@endsection