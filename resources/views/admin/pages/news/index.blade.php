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
        <li class="breadcrumb-item active">News</li>
    </ol>
    <button type="button" class="btn btn-success"><a class="text_custom" href="{{ route('create_new') }}">Create</a></button>
    <ol></ol>
    <div class="card mb-3">
        <div class="card-header"><i class="fa fa-table"></i> Danh sách News</div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th width="5%">#</th>
                            <th width="5%">Picture</th>
                            <th width="10%">Title</th>
                            <th width="20%">Front description</th>
                            <th width="40%">Description</th>
                            <th width="20%">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($news as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td><img width="100%" src="/source/images/news/{{ $item->picture }}" /></td>
                            <td>{{ $item->title }}</td>
                            <td class="text-justify">{{ $item->front_description }}</td>
                            <td class="text-justify">{{ $item->description }}</td>
                            <td>
                                <button class="btn btn-warning"><a class="text_custom" href="{{ route('create_new',['id'=>$item->id]) }}">Edit</a></button>
                                <button class="btn btn-danger"><a class="text_custom delete" href="{{ route('delete_new',['id'=>$item->id]) }}">Delete</a></button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @if ($news->lastPage() > 1)
    <ul class="pagination pull-right">
        <li class="paginate_button page-item previous {{ ($news->currentPage() == 1) ? ' disabled' : '' }}" id="dataTable_previous">
            <a href="{{ $news->url(1) }}" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
        </li>
        @for ($i = 1; $i <= $news->lastPage(); $i++)
            <li class="paginate_button page-item {{ ($news->currentPage() == $i) ? ' active' : '' }}">
                <a href="{{ $news->url($i) }}" aria-controls="dataTable" data-dt-idx="1" tabindex="0" class="page-link">{{ $i }}</a>
            </li>
        @endfor
        <li class="paginate_button page-item next {{ ($news->currentPage() == $news->lastPage()) ? ' disabled' : '' }}"  id="dataTable_next">
            <a href="{{ $news->url($news->currentPage()+1) }}"  aria-controls="dataTable" data-dt-idx="7" tabindex="0" class="page-link">Next</a>
        </li>
    </ul>
    @endif

</div>
@endsection