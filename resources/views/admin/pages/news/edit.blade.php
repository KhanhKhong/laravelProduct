@extends('admin.master')
@section('content')
<div id="page-wrapper">
    <div class="row">
    	<div class="col-lg-2"></div>
        <div class="col-lg-8">
            <h1 class="page-heading">{{ isset($editItems) ? 'Edit News item' : 'Create News item' }}</h1>
        </div>
        <div class="col-lg-2"></div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
    	<div class="col-lg-1"></div>
        <div class="col-lg-10">
            <div class="panel panel-default">
                <form action="{{ route('update_new') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="text" hidden="true" name="new_id" value="{{ isset($editItems) ? $editItems->id : '' }}">
                    <div class="panel-body">
                        <div class="row">
							<div class="col-lg-12">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <div class="item form-group">
                                    <label class="control-label" for="picture" style="display: block">Picture<span class="required">*</span>
                                        <div class="input-group">
                                            <div class="input-group-btn">
                                                <span class="btn btn-primary">
                                                    Browse… <input id="picture" type="file" class="loadFile" name="picture" accept="image/*" style="display: none">
                                                </span>
                                            </div>
                                            <input type="text" class="form-control" id="image" name="image" readonly="">
                                        </div>
                                    </label>
                                </div>
								<div class="form-group">
                                    <label>Title</label>
                                    <input class="form-control" name="title" value="{{ isset($editItems) ? $editItems->title : '' }}">
                                </div>
                                <div class="form-group">
                                    <label>front description</label>
                                    <input class="form-control" name="front_description" value="{{ isset($editItems) ? $editItems->front_description : '' }}">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea id="editor1" class="ckeditor" name="description">{{ isset($editItems) ? $editItems->description : '' }}</textarea>    
                                </div>
							</div>
                        </div>
                        <br>
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
<script src="/templateEditor/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
    CKEDITOR.replace( 'editor1' );
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