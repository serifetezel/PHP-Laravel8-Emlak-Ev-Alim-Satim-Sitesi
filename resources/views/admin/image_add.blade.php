<html>
<head>
    <title>Image Gallery</title>
    <link rel="stylesheet" href="{{ asset('assets/admin')}}/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{ asset('assets/admin')}}/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('assets/admin')}}/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="{{ asset('assets/admin')}}/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="{{ asset('assets/admin')}}/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('assets/admin')}}/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('assets/admin')}}/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('assets/admin')}}/assets/images/favicon.png" />
</head>
<body>
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
                    <form class="forms-sample" action="{{route('admin_image_store',['home_id'=>$data->id])}}" method="post" enctype="multipart/form-data">
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
                                        <a href="{{route('admin_image_delete', ['id' => $rs->id,'home_id'=>$data->id])}}" onclick="return confirm('Record will be Delete ! Are you sure?')"  >Delete</a>
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
</body>
</html>


