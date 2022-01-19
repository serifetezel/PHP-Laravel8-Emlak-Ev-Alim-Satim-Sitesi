@extends('layouts.home')

@section('title','Home Add')

@section('headerjs')

    <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
@endsection

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <ol class="breadcrumb" style="color: #cbd5e0">
                        <li class="ml-auto"><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Anasayfa</a></li>
                        <li>/</li>
                        <li>Home Add</li>
                    </ol>
                    <br>
                    <div style="text-align: center"><h1>
                            Home Add
                        </h1></div>
                    <div style="text-align: right"><button class="btn btn-sm btn-primary" type="button" data-list-pagination="prev"><span>Add Home</span></button></div><br>
                    <div></div>
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
                                    <div class="block" style="text-align: justify">
                                        <form class="forms-sample" action="{{route('user_product_store')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label>Category</label>
                                                    <select class="form-control select2" name="category_id" style="width: 100%;">
                                                        @foreach($datalist as $rs)
                                                            <option value="{{ $rs->id }}">{{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title) }}</option>
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
                                                    <label>Detail</label>
                                                    <textarea id="detail" name="detail"></textarea>
                                                    <script>
                                                        CKEDITOR.replace( 'answer' );
                                                    </script>
                                                </div>
                                                <div class="form-group">
                                                    <label>Image</label>
                                                    <div class="input-group mb-3">
                                                        <input type="file" name="image" >
                                                    </div>
                                                </div>
                                                <hr>
                                                <p style="font-weight: bold; font-family:'Franklin Gothic Medium'; text-decoration: underline; font-size: 25px">For Contact</p>
                                                <div class="form-group">
                                                    <label>Name</label>
                                                    <input type="text" name="name" class="form-control" >
                                                </div>
                                                <div class="form-group">
                                                    <label>Phone</label>
                                                    <input type="text" name="phone" class="form-control" >
                                                </div>
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input type="text" name="email" class="form-control" >
                                                </div>
                                                <button type="submit" class="btn btn-primary mr-2">Add Home</button>
                                                <button class="btn btn-dark">Cancel</button>
                                            </div>

                                        </form>
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
