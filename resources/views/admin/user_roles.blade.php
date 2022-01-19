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
                        <h5 class="card-title">User Roles: </h5>
                        @include('home.message')
                    </div>
                    <div class card-body>
                        <table class="table table-bordered">
                            <tr>
                                <th>Id</th> <td>{{$data->id}}</td>
                            </tr>
                            <tr>
                                <th>Name</th> <td>{{$data->name}}</td>
                            </tr>
                            <tr>
                                <th>Email</th> <td>{{$data->email}}</td>
                            </tr>

                            <tr>
                                <th>Roles</th>
                                <td>
                                <table>
                                @foreach($data->roles as $row)

                                <tr>
                                    <td> {{ $row->name }}</td>
                                        <td>
                                            <a href="{{route('admin_user_role_delete',['userid'=>$data->id,'roleid'=>$row->id])}}" onclick="return confirm('Record will be Delete ! Are you sure?')"  ><img src="{{asset('assets/admin')}}/assets/images/delete.png" height="15"></a>
                                        </td>
                                </tr>
                                @endforeach
                                </table>
                                </td>
                            </tr>
                            <tr>
                                <th>Add Role</th>
                                <td>
                                    <form role="form" action="{{route('admin_user_role_add',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <select name="roleid">
                                            @foreach($datalist as $rs)
                                                <option value="{{$rs->id}}">{{$rs->name}}</option>
                                            @endforeach
                                        </select>
                                        <button type="submit" class="btn-primary">Add Role</button>
                                    </form>
                                </td>
                            </tr>
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


