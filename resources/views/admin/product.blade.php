@extends('layouts.admin')

@section('title','Home List')

@section('content')
    <div class="card">
        <div class="card-body">
        <!-- Content Header (Page header) -->
        <section class="content-header">

            <h1>
                Home Listesi
            </h1>
            <ol class="breadcrumb" style="color: #cbd5e0">
                <li><a href="{{url('/')}}/admin"><i class="fa fa-dashboard"></i> Anasayfa</a></li>
                <li>/</li>
                <li>Homes</li>
            </ol>

            <a href="{{route('admin_product_add')}}" type="button" class="btn btn-inverse-primary btn-fw" style="width: 120px">Add Home</a>
            <div><br></div>

        </section>

        <!-- Main content -->


            <!-- Default box -->
            <div class="card">


                <div class="card-body">
                    <div style="overflow:auto">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Category</th>
                            <th>Title(s)</th>
                            <th>Keywords</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Price</th>
                            <th>Area</th>
                            <th>Location</th>
                            <th>Floor</th>
                            <th>Room</th>
                            <th>Furnished</th>
                            <th>Bathroom</th>
                            <th>Balcony</th>
                            <th>Heating</th>
                            <th>Garden</th>
                            <th>Garage</th>
                            <th>Detail</th>
                            <th>Image</th>
                            <th>Image Gallery</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($datalist as $rs)
                            <tr>
                                <td> {{ $rs->id }}</td>
                                <td> {{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs->category,$rs->category->title) }}</td>
                                <td> {{ $rs->title }}</td>
                                <td> {{ $rs->keywords }}</td>
                                <td> {{ $rs->description }}</td>
                                <td> {{ $rs->status }}</td>
                                <td> {{ $rs->price }}</td>
                                <td> {{ $rs->area }}</td>
                                <td> {{ $rs->location }}</td>
                                <td> {{ $rs->floor }}</td>
                                <td> {{ $rs->room }}</td>
                                <td> {{ $rs->furnished }}</td>
                                <td> {{ $rs->bathroom }}</td>
                                <td> {{ $rs->balcony }}</td>
                                <td> {{ $rs->heating }}</td>
                                <td> {{ $rs->garden }}</td>
                                <td> {{ $rs->garage }}</td>
                                <td> {{ $rs->detail }}</td>
                                <td>
                                    @if ($rs->image)
                                        <img src="{{Storage::url($rs->image)}}" height="60" alt="">
                                    @endif
                                </td>
                                <td><a href="{{route('admin_image_add',['home_id'=>$rs->id])}}" onclick="return !window.open(this.href, '','top=50 left=100,width=1100,height=700')">
                                        <img src="{{asset('assets/admin')}}/assets/images/gallery.png" height="25"></a>
                                </td>
                                <td><a href="{{route('admin_product_edit', ['id' => $rs->id])}}">Edit</a></td>
                                <td><a href="{{route('admin_product_delete', ['id' => $rs->id])}}" onclick="return confirm('Delete ! Are you sure?')"  ><img src="{{asset('assets/admin')}}/assets/images/delete.png" height="15"></a></td>
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
