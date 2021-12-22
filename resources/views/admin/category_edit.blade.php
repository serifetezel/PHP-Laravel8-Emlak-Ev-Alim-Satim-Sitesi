@extends('layouts.admin')

@section('title','Edit Category Page')

@section('content')
    <div class="card">
        <div class="card-body">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h3>
                    Edit Category
                </h3>
                <ol class="breadcrumb" style="color: #cbd5e0">
                    <li class="ml-auto"><a href="{{url('/')}}/admin"><i class="fa fa-dashboard"></i> Anasayfa</a></li>
                    <li>/</li>
                    <li>Kategori Düzenle</li>
                </ol>
            </section>
            <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="card">
                    <form class="forms-sample" action="{{route('admin_category_update',['id'=>$data->id])}}" method="post">
                        @csrf
                        <div class="card-body">
                        <div class="form-group">
                            <label>Parent</label>
                            <select class="form-control select2" name="parent_id" style="width: 100%;">
                                <option value="0" selected="selected">Main Category</option>
                                @foreach($datalist as $rs)
                                    <option value="{{ $rs->id }}" @if ($rs->id == $data->parent_id) selected="selected" @endif > {{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title) }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" value="{{$data->title}}" class="form-control" >
                        </div>
                            <div class="form-group">
                                <label>Keywords</label>
                                <input type="text" name="keywords" value="{{$data->keywords}}" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <input type="text" name="description" value="{{$data->description}}" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control select2" name="status" style="width: 100%;">
                                    <option selected="selected">{{$data->status}}</option>
                                    <option>False</option>
                                    <option>True</option>
                                </select>
                            </div>




                        <button type="submit" class="btn btn-primary mr-2">Add Category</button>
                        <button class="btn btn-dark">Cancel</button>
                        </div>
                    </form>



        <!-- /.box-body -->
        <div class="card-footer clearfix">

        </div>
            </div>
        </section>
        <!-- /.box-footer-->
        </div>
    <!-- /.box -->
    </div>
@endsection


