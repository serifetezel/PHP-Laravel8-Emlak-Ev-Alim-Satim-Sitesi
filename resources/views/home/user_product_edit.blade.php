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
                        <li>Home Edit</li>
                    </ol>
                    <br>
                    <div style="text-align: center"><h1>
                            Home Edit
                        </h1></div>
                    <div style="text-align: right"><button class="btn btn-sm btn-primary" type="button" data-list-pagination="prev"><span>Edit Home</span></button></div><br>
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
                                        <form class="forms-sample" action="{{route('user_product_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label>Category</label>
                                                    <select class="form-control select2" name="category_id" style="width: 100%;">
                                                        @foreach($datalist as $rs)
                                                            <option value="{{ $rs->id }}" @if ($rs->id == $data->parent_id) selected="selected" @endif>
                                                                {{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title) }}
                                                            </option>
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
                                                    <textarea id="detail" name="detail"></textarea>
                                                    <script>
                                                        CKEDITOR.replace( 'answer' );
                                                    </script>
                                                </div>
                                                <div class="form-group">
                                                    <label>Image</label>
                                                    <div class="input-group mb-3">
                                                        <input type="file" name="image" class="form-control">
                                                        @if ($data->image)
                                                            <img src="{{Storage::url($data->image)}}" height="30">
                                                        @endif
                                                    </div>
                                                </div>
                                                <p style="font-weight: bold; font-family:'Franklin Gothic Medium'; text-decoration: underline; font-size: 25px">For Contact</p>
                                                <div class="form-group">
                                                    <label>Name</label>
                                                    <input type="text" name="name" value="{{$data->name}}" class="form-control" >
                                                </div>
                                                <div class="form-group">
                                                    <label>Phone</label>
                                                    <input type="text" name="phone" value="{{$data->phone}}" class="form-control" >
                                                </div>
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input type="text" name="email" value="{{$data->email}}" class="form-control" >
                                                </div>
                                                <button type="submit" class="btn btn-primary mr-2">Update Home</button>
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
