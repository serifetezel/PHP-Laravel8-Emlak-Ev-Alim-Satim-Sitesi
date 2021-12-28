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
                <li class="ml-auto"><a href="{{url('/')}}/admin"><i class="fa fa-dashboard"></i> Anasayfa</a></li>
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
                            <th>Status</th>
                            <th>Price</th>
                            <th>Location</th>
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
                                <td> {{ $rs->status }}</td>
                                <td> {{ $rs->price }}</td>
                                <td> {{ $rs->location }}</td>
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


                </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="card-footer clearfix">

                </div>
                <!-- /.box-footer-->
            </div>
            <!-- /.box -->


        <!-- /.content -->

@endsection
