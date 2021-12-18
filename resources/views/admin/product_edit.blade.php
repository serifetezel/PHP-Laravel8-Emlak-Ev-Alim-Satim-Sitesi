@extends('layouts.admin')

@section('title','Edit Product Page')

@section('javascript')

    <script src="//cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <!-- Content Header (Page header) -->
            <section class="content-header">

                <h3>
                    Edit Product
                </h3>

                <ol class="breadcrumb" style="color: #cbd5e0">

                    <li><a href="{{url('/')}}/admin"><i class="fa fa-dashboard"></i> Anasayfa</a></li>
                    <li>/</li>
                    <li>Product Düzenle</li>
                </ol>

            </section>

            <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">

                    <form class="forms-sample" action="{{route('admin_product_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                        <div class="form-group">
                            <label>Category</label>
                            <select class="form-control select2" name="category_id" style="width: 100%;">

                                @foreach($datalist as $rs)
                                    <option value="{{ $rs->id }}" @if ($rs->id == $data->category_id) selected="selected" @endif > {{ $rs->title }}</option>
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
                                <select class="form-control select2" value="{{$data->status}}" name="status" style="width: 100%;">
                                    <option>False</option>
                                    <option selected="selected">True</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Price</label>
                                <input type="number" name="price" value="{{$data->price}}" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label>Area</label>
                                <input type="text" name="area" value="{{$data->area}}" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label>Location</label>
                                <input type="text" name="location" value="{{$data->location}}" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label>Floor</label>
                                <input type="number" name="floor" value="{{$data->floor}}" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label>Room</label>
                                <input type="number" name="room" value="{{$data->room}}" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label>Furnished</label>
                                <select class="form-control select2" name="furnished" value="{{$data->furnished}}" style="width: 100%;">
                                    <option selected="selected">True</option>
                                    <option>False</option>
                                    <option>True</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Bathroom</label>
                                <input type="text" name="bathroom" value="{{$data->bathroom}}" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label>Balcony</label>
                                <input type="text" name="balcony" value="{{$data->balcony}}" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label>Heating</label>
                                <input type="text" name="heating" value="{{$data->heating}}" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label>Garden</label>
                                <input type="text" name="garden" value="{{$data->garden}}" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label>Garage</label>
                                <input type="text" name="garage" value="{{$data->garage}}" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label>Detail</label>
                                <textarea name="detail">{{$data->detail}}</textarea>
                                <script>
                                    CKEDITOR.replace( 'detail' );
                                </script>
                            </div>
                            <div class="form-group">
                                <label>Image</label>
                                <div class="input-group mb-3">
                                    <input type="file" value="{{$data->image}}" name="image">

                                    @if ($data->image)
                                        <img src="{{Storage::url($data->image)}}" height="30">
                                    @endif
                                </div>
                            </div>


                        <button type="submit" class="btn btn-primary mr-2">Update Product</button>
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


