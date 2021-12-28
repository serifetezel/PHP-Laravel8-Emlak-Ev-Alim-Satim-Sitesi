@extends('layouts.admin')

@section('title','Edit User Page')

@section('javascript')

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <!-- Content Header (Page header) -->
            <section class="content-header">

                <h3>
                    Edit User
                </h3>

                <ol class="breadcrumb" style="color: #cbd5e0">

                    <li class="ml-auto"><a href="{{url('/')}}/admin"><i class="fa fa-dashboard"></i> Anasayfa</a></li>
                    <li>/</li>
                    <li>User Düzenle</li>
                </ol>

            </section>

            <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">

                    <form class="forms-sample" action="{{route('admin_user_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" value="{{$data->name}}" class="form-control" >
                        </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="email" value="{{$data->email}}" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" name="phone" value="{{$data->phone}}" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" name="address" value="{{$data->address}}" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label>Image</label>
                                <div class="input-group mb-3">
                                    <input type="file" name="image" class="form-control">

                                    @if ($data->profile_photo_path)
                                        <img src="{{Storage::url($data->profile_photo_path)}}" height="30">
                                    @endif
                                </div>
                            </div>


                        <button type="submit" class="btn btn-primary mr-2">Update User</button>
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


