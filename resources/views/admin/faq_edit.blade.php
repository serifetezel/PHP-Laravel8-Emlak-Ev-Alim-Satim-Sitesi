@extends('layouts.admin')

@section('title','Edit Frequently Asked Question Page')

@section('javascript')
    <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <!-- Content Header (Page header) -->
            <section class="content-header">

                <h3>
                    Edit FAQ
                </h3>

                <ol class="breadcrumb" style="color: #cbd5e0">

                    <li class="ml-auto"><a href="{{url('/')}}/admin"><i class="fa fa-dashboard"></i> Anasayfa</a></li>
                    <li>/</li>
                    <li>FAQ Düzenle</li>
                </ol>

            </section>

            <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">

                    <form class="forms-sample" action="{{route('admin_faq_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">

                            <div class="form-group">
                                <label>Position</label>
                                <input type="number" name="position" value="{{$data->position}}" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label>Question</label>
                                <input type="text" name="question" value="{{$data->question}}" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label>Answer</label>
                                <textarea id="answer" name="answer">{{$data->answer}}</textarea>
                                <script>
                                    CKEDITOR.replace( 'answer' );
                                </script>
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control select2" value="{{$data->status}}" name="status" style="width: 100%;">
                                    <option>False</option>
                                    <option selected="selected">True</option>
                                </select>
                            </div>



                        <button type="submit" class="btn btn-primary mr-2">Update Home</button>
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


