@extends('layouts.admin')

@section('title','Add Product Page')

@section('javascript')

    <script src="https://cdn.ckeditor.com/ckeditor5/25.0.0/classic/ckeditor.js"></script>
    @endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <!-- Content Header (Page header) -->
            <section class="content-header">

                <h3>
                    Add Product
                </h3>

                <ol class="breadcrumb" style="color: #cbd5e0">

                    <li><a href="{{url('/')}}/admin"><i class="fa fa-dashboard"></i> Anasayfa</a></li>
                    <li>/</li>
                    <li>Product Ekle</li>
                </ol>

            </section>

            <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">

                    <form class="forms-sample" action="{{route('admin_product_store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                        <div class="form-group">
                            <label>Category</label>
                            <select class="form-control select2" name="category_id" style="width: 100%;">

                                @foreach($datalist as $rs)
                                    <option value="{{ $rs->id }}">{{ $rs->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control" >
                        </div>
                            <div class="form-group">
                                <label>Keywords</label>
                                <input type="text" name="keywords" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <input type="text" name="description" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control select2" name="status" style="width: 100%;">
                                    <option>False</option>
                                    <option selected="selected">True</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Price</label>
                                <input type="number" name="price" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label>Area</label>
                                <input type="text" name="area" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label>Location</label>
                                <input type="text" name="location" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label>Floor</label>
                                <input type="number" name="floor" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label>Room</label>
                                <input type="number" name="room" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label>Furnished</label>
                                <select class="form-control select2" name="furnished" style="width: 100%;">
                                    <option>False</option>
                                    <option selected="selected">True</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Bathroom</label>
                                <input type="text" name="bathroom" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label>Balcony</label>
                                <input type="text" name="balcony" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label>Heating</label>
                                <input type="text" name="heating" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label>Garden</label>
                                <input type="text" name="garden" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label>Garage</label>
                                <input type="text" name="garage" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label >Detail</label>
                                <textarea id="detail" name="detail"></textarea>
                                <script>
                                    ClassicEditor
                                        .create( document.querySelector( '#detail' ) )
                                        .catch( error => {
                                            console.error( error );
                                        } );
                                </script>
                            </div>
                            <div class="form-group">
                                <label>Image</label>
                                <div class="input-group mb-3">
                                <input type="file" name="image" >
                                </div>
                            </div>


                        <button type="submit" class="btn btn-primary mr-2">Add Product</button>
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


