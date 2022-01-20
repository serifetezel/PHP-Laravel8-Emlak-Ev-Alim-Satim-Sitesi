@extends('layouts.admin')

@section('title','Frequently Asked Question List')

@section('content')
    <div class="card">
        <div class="card-body">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Frequently Asked Question List
            </h1>
            <ol class="breadcrumb" style="color: #cbd5e0">
                <li class="ml-auto"><a href="{{url('/')}}/admin"><i class="fa fa-dashboard"></i> Anasayfa</a></li>
                <li>/</li>
                <li>Frequently Asked Question</li>
            </ol>
            <a href="{{route('admin_faq_add')}}" type="button" class="btn btn-inverse-primary btn-fw" style="width: 120px">Add FAQ</a>
            <div><br></div>
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
                            <th>Position</th>
                            <th>Question</th>
                            <th>Answer</th>
                            <th>Status</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($datalist as $rs)
                            <tr>
                                <td> {{$rs->id}} </td>
                                <td> {{ $rs->position }}</td>
                                <td> {{ $rs->question }}</td>
                                <td> {!! $rs->answer !!} </td>
                                <td> {{ $rs->status }}</td>
                                <td><a href="{{route('admin_faq_edit', ['id' => $rs->id])}}">Edit</a></td>
                                <td><a href="{{route('admin_faq_delete', ['id' => $rs->id])}}" onclick="return confirm('Delete ! Are you sure?')"  ><img src="{{asset('assets/admin')}}/assets/images/delete.png" height="15"></a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="card-footer clearfix"></div>
                <!-- /.box-footer-->
            </div>
            <!-- /.box -->
        <!-- /.content -->
@endsection
