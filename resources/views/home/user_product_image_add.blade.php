@extends('layouts.home')

@section('title','User Profile')

@section('content')
    <br>
<div class="row">
    <div id="breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('home')}}">Home</a> </li>
                <li class="active">User Profile</li>
            </ul>
        </div>
    </div>
    <div class="section">
        <div class="container">
            <div class="row">
                <div id="aside" class="col-md-2">
                    @include('home.usermenu')
                </div>
                <div id="main" class="col-md-10">
                    <div class="card">
                        <div class="card-body">
                            <!-- Content Header (Page header) -->
                            <!-- Main content -->
                            <section class="content">
                                <!-- Default box -->
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title">Home:   {{$data->title}}</h5>
                                    </div>
                                    <div class card-body>
                                        <form class="forms-sample" action="{{route('user_image_store',['home_id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="card-body">

                                                <div class="form-group">
                                                    <label>Title</label>
                                                    <input type="text" name="title" class="form-control" >
                                                </div>
                                                <div class="form-group">
                                                    <label>Image</label>
                                                    <div class="input-group mb-3">
                                                        <input type="file" name="image" >
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary mr-2">Add Image</button>
                                                <button class="btn btn-dark">Cancel</button>
                                            </div>
                                        </form>
                                        <table class="table table-bordered">
                                            <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Title(s)</th>
                                                <th>Image</th>
                                                <th>Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($images as $rs)
                                                <tr>
                                                    <td> {{ $rs->id }}</td>
                                                    <td> {{ $rs->title }}</td>
                                                    <td>
                                                        @if ($rs->image)
                                                            <img src="{{Storage::url($rs->image)}}" height=100" alt="">
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <a href="{{route('user_image_delete', ['id' => $rs->id,'home_id'=>$data->id])}}" onclick="return confirm('Record will be Delete ! Are you sure?')"  >Delete</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                        <!-- /.box-body -->
                                        <div class="card-footer clearfix">
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- /.box-footer-->
                        </div>
                        <!-- /.box -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
