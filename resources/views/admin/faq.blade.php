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
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($datalist as $rs)
                            <tr>
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
                    <div class="row align-items-center mt-3">
                        <div class="pagination d-none"></div>
                        <div class="col">
                            <p class="mb-0 fs--1">
                                <span class="d-none d-sm-inline-block" data-list-info="data-list-info"></span>
                                <span class="d-none d-sm-inline-block"> &mdash; </span>
                                <a class="fw-semi-bold" href="#!" data-list-view="*">View all<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a><a class="fw-semi-bold d-none" href="#!" data-list-view="less">View Less<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                            </p>
                        </div>
                        <div class="col-auto d-flex"><button class="btn btn-sm btn-primary" type="button" data-list-pagination="prev"><span>Previous</span></button><button class="btn btn-sm btn-primary px-4 ms-2" type="button" data-list-pagination="next"><span>Next</span></button></div>
                    </div>

                </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="card-footer clearfix">
                    <ul class="pagination pagination-sm no-margin pull-right">
                        <li><a href="#">«</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">»</a></li>
                    </ul>
                </div>
                <!-- /.box-footer-->
            </div>
            <!-- /.box -->


        <!-- /.content -->

@endsection
