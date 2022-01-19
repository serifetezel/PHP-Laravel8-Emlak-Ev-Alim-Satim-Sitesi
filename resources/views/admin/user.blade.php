@extends('layouts.admin')

@section('title','User List')

@section('content')
    <div class="card">
        <div class="card-body">
        <!-- Content Header (Page header) -->
        <section class="content-header">

            <h1>
                User List
            </h1>

            <ol class="breadcrumb" style="color: #cbd5e0">
                <li class="ml-auto"><a href="{{url('/')}}/admin"><i class="fa fa-dashboard"></i> Anasayfa</a></li>
                <li>/</li>
                <li>User List</li>
            </ol>

            <div><br></div>
            @include('home.message')
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
                            <th>Profile</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Roles</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($datalist as $rs)
                            <tr>
                                <td> {{ $rs->id }}</td>
                                <td>
                                    @if ($rs->profile_photo_path)
                                        <img src="{{Storage::url($rs->profile_photo_path)}}" height="50" style="border-radius: 10px" alt="">
                                    @endif
                                </td>
                                <td> {{ $rs->name }}</td>
                                <td> {{ $rs->email }}</td>
                                <td> {{ $rs->phone }}</td>
                                <td> {{ $rs->address }}</td>

                                <td>
                                    @foreach($rs->roles as $row)
                                        {{$row->name}},
                                    @endforeach
                                    <a href="{{route('admin_user_roles',['id' => $rs->id])}}" onclick="return !window.open(this.href, '','top=100 left=300 width=800,height=600')">
                                        <i class="mdi mdi-plus-circle"></i>
                                    </a>
                                </td>
                                <td><a href="{{route('admin_user_edit', ['id' => $rs->id])}}">Edit</a></td>
                                <td><a href="{{route('admin_user_delete', ['id' => $rs->id])}}" onclick="return confirm('Delete ! Are you sure?')"  ><img src="{{asset('assets/admin')}}/assets/images/delete.png" height="15"></a></td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                    </div>
                </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <!-- /.box-footer-->
        <div class="card-footer clearfix">
            <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#"></a></li><br><br>
                <li><a href="#"></a></li><br><br>
                <li><a href="#"></a></li><br><br>
                <li><a href="#"></a></li><br><br>
                <li><a href="#"></a></li><br><br>
                <li><a href="#"></a></li><br><br>
                <li><a href="#"></a></li><br><br>
                <li><a href="#"></a></li><br><br>
                <li><a href="#"></a></li><br><br>
                <li><a href="#"></a></li><br><br>
                <li><a href="#"></a></li><br><br>
                <li><a href="#"></a></li><br><br>
                <li><a href="#"></a></li><br><br>
                <li><a href="#"></a></li><br><br>
                <li><a href="#"></a></li><br><br>
                <li><a href="#"></a></li><br><br>
                <li><a href="#"></a></li><br><br>
            </ul>
        </div>
            </div>
            <!-- /.box -->
        <!-- /.content -->
@endsection
