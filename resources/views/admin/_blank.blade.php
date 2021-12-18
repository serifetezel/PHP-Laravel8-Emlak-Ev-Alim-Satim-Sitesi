@extends('layouts.admin')

@section('title','Admin Panel Home Page')

@section('content')
    <div class="card">
        <div class="card-body">
            <!-- Content Header (Page header) -->
            <section class="content-header">

                <h1>
                    Kategori Listesi
                </h1>
                <ol class="breadcrumb" style="color: #cbd5e0">
                    <li><a href="{{url('/')}}/admin"><i class="fa fa-dashboard"></i> Anasayfa</a></li>
                    <li>/</li>
                    <li><a href="#">Kategoriler</a></li>
                </ol>

            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="box">
                    <div class="box-header with-border">
                        Title

                    </div>

                    <div class="box-body">

                        Body Area

                    </div>


                    <!-- /.box-body -->
                    <div class="box-footer clearfix">
                        Footer
                    </div>
                </div>
            </section>
            <!-- /.box-footer-->
        </div>
        <!-- /.box -->
    </div>
@endsection


