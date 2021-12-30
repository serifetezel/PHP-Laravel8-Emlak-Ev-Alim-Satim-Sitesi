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
                <li>Homes</li>
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
                            <th>Home</th>
                            <th>Subject</th>
                            <th>Review</th>
                            <th>Rate</th>
                            <th>Date</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($datalist as $rs)
                            <tr>
                                <td> {{ $rs->id }}</td>
                                <td> {{$rs->user->name}}</td>
                                <td> <a href="{{route('home_detail',['id'=>$rs->home->id])}}" target="_blank">
                                        {{$rs->home->title}}
                                    </a> </td>
                                <td> {{ $rs->subject }}</td>
                                <td> {{ $rs->review }}</td>
                                <td> {{ $rs->rate }}</td>
                                <td> {{ $rs->status }}</td>
                                <td> {{$rs->created_at}}</td>
                                <td> <a href="{{route('admin_review_show',['id'=>$rs->id])}}" onclick="return !window.open(this.href, '','top=50 left=100 width=1100,height=700')">
                                        Edit</a></td>
                                <td style="text-align: center"><a href="{{route('admin_review_delete', ['id' => $rs->id])}}" onclick="return confirm('Delete ! Are you sure?')"  ><img src="{{asset('assets/admin')}}/assets/images/delete.png" height="25" ></a></td>
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
