@extends('admin.master')
@section('content')
<div id="page-wrapper">
    <div class="row">
    	<div class="col-lg-2"></div>
        <div class="col-lg-8">
            <h1 class="page-heading">{{ isset($editItems) ? 'Edit about' : 'Create about' }}</h1>
        </div>
        <div class="col-lg-2"></div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
    	<div class="col-lg-1"></div>
        <div class="col-lg-10">
            <div class="panel panel-default">
                <form action="{{ route('update_about') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="text" hidden="true" name="about_id" value="{{ isset($editItems) ? $editItems->id : '' }}">
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
</script>
@endsection