@extends('layouts.admin')

@section('title','Category List')

@section('content')
    <div class="card">
        <div class="card-body">
        <!-- Content Header (Page header) -->
        <section class="content-header">

            <h1>
                Kategori Listesi
            </h1>
            <ol class="breadcrumb" style="color: #cbd5e0">
                <li><a href="{{url('/')}}/admin"><i class="fa fa-dashboard"></i> Anasayfa</a></li>
                <li>/</li>
                <li>Kategoriler</li>
            </ol>

            <a href="{{route('admin_category_add')}}" type="button" class="btn btn-inverse-primary btn-fw" style="width: 120px">Add Category</a>
            <div><br></div>

        </section>
            <div class="card">
                <div class="card-body">
                    <div style="overflow: auto">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Parent </th>
                            <th>Title(s)</th>
                            <th>Keywords</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($datalist as $rs)
                            <tr>
                                <td> {{ $rs->id }}</td>
                                <td> {{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title) }}</td>
                                <td> {{ $rs->title }}</td>
                                <td> {{ $rs->keywords }}</td>
                                <td> {{ $rs->description }}</td>
                                <td> {{ $rs->status }}</td>
                                <td><a href="{{route('admin_category_edit', ['id' => $rs->id])}}"> Edit</a></td>
                                <td><a href="{{route('admin_category_delete', ['id' => $rs->id])}}" onclick="return confirm('Delete ! Are you sure?')"  > Delete </a></td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                    </div>
                    <div class="row align-items-center mt-3">
                        <div class="pagination d-none"></div>
                        <div class="col">
                            <p class="mb-0 fs--1">
                                <span class="d-none d-sm-inline-block" data-list-info="data-list-info"></span>
                                <span class="d-none d-sm-inline-block"> &mdash; </span>
                                <a class="fw-semi-bold" href="#!" data-list-view="*">View all<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a><a class="fw-semi-bold d-none" href="#!" data-list-view="less">View Less<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                            </p>
                        </div>
                        <div class="col-auto d-flex"><button class="btn btn-sm btn-primary" type="button" data-list-pagination="prev"><span>Previous</span></button><button class="btn btn-sm btn-primary px-4 ms-2" type="button" data-list-pagination="next"><span>Next</span></button></div>
                    </div>

                </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="card-footer clearfix">
                    <ul class="pagination pagination-sm no-margin pull-right">
                        <li><a href="#">«</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">»</a></li>
                    </ul>
                </div>
                <!-- /.box-footer-->
            </div>
            <!-- /.box -->


        <!-- /.content -->

@endsection
