@extends('layouts.home')

@section('title','Home List')

@section('content')
    <div class="container">
    <div class="card">
        <div class="card-body">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <ol class="breadcrumb" style="color: #cbd5e0">
                <li class="ml-auto"><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Anasayfa</a></li>
                <li>/</li>
                <li>My Products</li>
            </ol>
            <br>
            <div style="text-align: center"><h1>
               My Home List
                </h1></div>
            @include('home.message')
            <div style="text-align: right"><a href="{{route('user_product_add')}}" type="button" class="btn btn-primary" style="width: 120px">Add Home</a></div>
            <br>
        </section>
        <!-- Main content -->
         <div class="section">
                    <div class="row">
                        <div id="aside" class="col-md-2">
                            @include('home.usermenu')
                        </div>
            <!-- Default box -->
            <div class="card">
                <div class="card-body">
                    <div style="overflow:auto">
                        <div class="container">
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
                                <td style="text-align: center"><a href="{{route('user_image_add',['home_id'=>$rs->id])}}" onclick="return !window.open(this.href, '','top=50 left=100,width=1100,height=700')">
                                        <img src="{{asset('assets/admin')}}/assets/images/gallery.png" height="25"></a>
                                </td>
                                <td><a href="{{route('user_product_edit', ['id' => $rs->id])}}">Edit</a></td>
                                <td style="text-align: center"><a href="{{route('user_product_delete', ['id' => $rs->id])}}" onclick="return confirm('Delete ! Are you sure?')"  ><img src="{{asset('assets/admin')}}/assets/images/delete.png" height="25" ></a></td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                        </div>
                    </div>
                </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <!-- /.box-footer-->
            </div>
            <!-- /.box -->
            </div>
        </div>
    </div>
        <!-- /.content -->
@endsection
