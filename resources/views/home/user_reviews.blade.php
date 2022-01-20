@extends('layouts.home')

@section('title','Review List')

@section('content')
    <div class="container">
    <div class="card">
        <div class="card-body">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <ol class="breadcrumb" style="color: #cbd5e0">
                <li class="ml-auto"><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Anasayfa</a></li>
                <li>/</li>
                <li>My Reviews</li>
            </ol>
            <br>
            <div style="text-align: center"><h1>
               My Review List
                </h1></div>
            <br>
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
                        <div class="container">
                    <table class="table table-bordered">
                        <thead>

                        <tr>
                            <th>Id</th>
                            <th>Home</th>
                            <th>Subject</th>
                            <th>Review</th>
                            <th>Rate</th>
                            <th>Status</th>
                            <th>Date</th>
                            <th>Actions</th>
                        </tr>

                        </thead>
                        <tbody>
                        @include('home.message')
                        @foreach($datalist as $rs)

                            <tr>
                                <td> {{ $rs->id }}</td>
                                <td> <a href="{{route('home_detail',['id'=>$rs->home->id])}}" target="_blank">
                                        {{$rs->home->title}}
                                    </a> </td>
                                <td> {{ $rs->subject }}</td>
                                <td> {{ $rs->review }}</td>
                                <td> {{ $rs->rate }}</td>
                                <td> {{ $rs->status }}</td>
                                <td> {{$rs->created_at}}</td>
                                <td style="text-align: center"><a href="{{route('user_review_delete', ['id' => $rs->id])}}" onclick="return confirm('Delete ! Are you sure?')"  ><img src="{{asset('assets/admin')}}/assets/images/delete.png" height="25" ></a></td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
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
