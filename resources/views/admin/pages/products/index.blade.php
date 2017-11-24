@extends('admin.master')
@section('head_css')
<link href="{{ asset('admin_source/css/custom.css') }}" rel="stylesheet">
@stop
@section('content')
<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Sản Phẩm</li>
    </ol>
    <button type="button" class="btn btn-success"><a class="text_custom" href="{{ route('create_product') }}">Create</a></button>
    <ol></ol>
    <div class="card mb-3">
        <div class="card-header"><i class="fa fa-table"></i> Danh sách sản phẩm</div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th width="5%">#</th>
                            <th width="10%">Image</th>
                            <th width="25%">Title</th>
                            <th width="15%">Price sale(đ)</th>
                            <th width="15%">Price(đ)</th>
                            <th width="15%">Total one</th>
                            <th width="15%">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td><img width="100%" src="/source/images/products/{{ $item->picture }}" alt=""></td>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->price_sale }}</td>
                            <td>{{ $item->price }}</td>
                            <td>{{ $item->total_one }}</td>
                            <td>
                                <button class="btn btn-warning"><a class="text_custom" href="{{ route('create_product',['id'=>$item->id]) }}">Edit</a></button>
                                <button class="btn btn-danger"><a class="text_custom delete" href="{{ route('delete_product',['id'=>$item->id]) }}">Delete</a></button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @if ($products->lastPage() > 1)
    <ul class="pagination pull-right">
        <li class="paginate_button page-item previous {{ ($products->currentPage() == 1) ? ' disabled' : '' }}" id="dataTable_previous">
            <a href="{{ $products->url(1) }}" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
        </li>
        @for ($i = 1; $i <= $products->lastPage(); $i++)
            <li class="paginate_button page-item {{ ($products->currentPage() == $i) ? ' active' : '' }}">
                <a href="{{ $products->url($i) }}" aria-controls="dataTable" data-dt-idx="1" tabindex="0" class="page-link">{{ $i }}</a>
            </li>
        @endfor
        <li class="paginate_button page-item next {{ ($products->currentPage() == $products->lastPage()) ? ' disabled' : '' }}"  id="dataTable_next">
            <a href="{{ $products->url($products->currentPage()+1) }}"  aria-controls="dataTable" data-dt-idx="7" tabindex="0" class="page-link">Next</a>
        </li>
    </ul>
    @endif

</div>
@endsection