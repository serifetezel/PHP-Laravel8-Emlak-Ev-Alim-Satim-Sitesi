@extends('layouts.admin')

@section('title','Add Home Page')

@section('javascript')
    <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
    @endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <!-- Content Header (Page header) -->
            <section class="content-header">

                <h3>
                    Add FAQ
                </h3>

                <ol class="breadcrumb" style="color: #cbd5e0">

                    <li class="ml-auto"><a href="{{url('/')}}/admin"><i class="fa fa-dashboard"></i> Anasayfa</a></li>
                    <li>/</li>
                    <li>Frequently Asked Question</li>
                </ol>

            </section>

            <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">

                    <form class="forms-sample" action="{{route('admin_faq_store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">

                        <div class="form-group">
                            <label>Position</label>
                            <input type="number" name="position" value="0" class="form-control" >
                        </div>
                            <div class="form-group">
                                <label>Question</label>
                                <input type="text" name="question" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label>Answer</label>
                                <textarea id="answer" name="answer"></textarea>
                                <script>
                                    CKEDITOR.replace( 'answer' );
                                </script>
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control select2" name="status" style="width: 100%;">
                                    <option>False</option>
                                    <option selected="selected">True</option>
                                </select>
                            </div>
                        <button type="submit" class="btn btn-primary mr-2">Add</button>
                        <button class="btn btn-dark">Cancel</button>
                        </div>
                    </form>
        <!-- /.box-body -->
        <div class="card-footer clearfix">
        </div>
            </div>
        </section>
        <!-- /.box-footer-->
        </div>
    <!-- /.box -->
    </div>
@endsection


