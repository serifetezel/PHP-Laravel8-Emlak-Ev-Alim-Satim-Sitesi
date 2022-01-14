@extends('layouts.admin')

@section('title','Contact Messages List')

@section('content')
    <div class="card">
        <div class="card-body">
        <!-- Content Header (Page header) -->
        <section class="content-header">

            <h1>
                Messages List
            </h1>
            <ol class="breadcrumb" style="color: #cbd5e0">
                <li class="ml-auto"><a href="{{url('/')}}/admin"><i class="fa fa-dashboard"></i> Anasayfa</a></li>
                <li>/</li>
                <li>Messages List</li>
            </ol>
            <div><br></div>

        </section>

        <!-- Main content -->
        @include('home.message')

            <!-- Default box -->
            <div class="card">


                <div class="card-body">
                    <div style="overflow:auto">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Admin Note</th>
                            <th>Status</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($datalist as $rs)
                            <tr>
                                <td> {{ $rs->id }}</td>
                                <td> {{($rs->name)}}</td>
                                <td> {{ $rs->email }}</td>
                                <td> {{ $rs->phone }}</td>
                                <td> {{ $rs->subject }}</td>
                                <td> {{ $rs->message }}</td>
                                <td> {{ $rs->note }}</td>
                                <td> {{ $rs->status }}</td>
                                <td><a href="{{route('admin_message_edit',['id'=>$rs->id])}}" onclick="return !window.open(this.href, '','top=50 left=100,width=800,height=600')">
                                        Edit</a>
                                </td>
                                <td><a href="{{route('admin_message_delete', ['id' => $rs->id])}}" onclick="return confirm('Delete ! Are you sure?')"  ><img src="{{asset('assets/admin')}}/assets/images/delete.png" height="15"></a></td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                    </div>


                </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="card-footer clearfix">

                </div>
                <!-- /.box-footer-->
            </div>
            <!-- /.box -->


        <!-- /.content -->

@endsection
