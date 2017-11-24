@extends('admin.master')
@section('content')
<div id="page-wrapper">
    <div class="row">
    	<div class="col-lg-2"></div>
        <div class="col-lg-8">
            <h1 class="page-heading">{{ isset($editItems) ? 'Edit Category' : 'Create Category' }}</h1>
        </div>
        <div class="col-lg-2"></div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
    	<div class="col-lg-1"></div>
        <div class="col-lg-10">
            <div class="panel panel-default">
                <form action="{{ route('update_category') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="text" hidden="true" name="cate_id" value="{{ isset($editItems) ? $editItems->id : '' }}">
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
                                    <label>Parent Category</label>
									<select class="js-example-basic-single form-control" name="cate_parent">
						                <option value="0">Select Parent Category</option>
										@foreach($cates as $item)
							                <option value="{{ $item->id }}" {{ (isset($editItems) ? $editItems->cate_parent : '') == $item->id ? 'selected="selected"' : '' }}> 
                                                {{ $item->title }}
                                            </option>
							            @endforeach
									</select>
                                </div>
							</div>
                        </div>
                        <button type="submit" class="btn btn-success">{{ isset($editItems) ? 'Edit Category' : 'Create Category' }}</button>
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
	$(document).ready(function() {
	    $('.js-example-basic-single').select2();
	});
</script>
@endsection