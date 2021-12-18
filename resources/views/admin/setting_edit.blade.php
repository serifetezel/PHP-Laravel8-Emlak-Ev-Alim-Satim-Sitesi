@extends('layouts.admin')

@section('title','Edit Setting Page')

@section('javascript')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h3>
                    Edit Setting
                </h3>
                <ol class="breadcrumb" style="color: #cbd5e0">
                    <li><a href="{{url('/')}}/admin"><i class="fa fa-dashboard"></i> Anasayfa</a></li>
                    <li>/</li>
                    <li>Setting Düzenle</li>
                </ol>
            </section>
            <!-- Main content -->
            <form class="forms-sample" action="{{route('admin_setting_update')}}" method="post" enctype="multipart/form-data">
            <section class="content">
            @csrf
            <!-- Default box -->
            <div class="card" style="padding: 15px">
                <div class="row">
                    <div class="card-body">
                        <div class="col-md-12 col-md-offset-3">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <span class="pull-right">
                                    <!-- Tabs -->
                                        <ul class="nav panel-tabs">
                                            <li style="font-style:italic " class="active"><a href="#general" data-toggle="tab">  General Settings  </a></li> --
                                            <li style="font-style:italic "><a href="#smtp" data-toggle="tab">  Smtp Email  </a></li> --
                                            <li style="font-style:italic "><a href="#social" data-toggle="tab">  Social Media   </a></li> --
                                            <li style="font-style:italic "><a href="#about" data-toggle="tab">  About Us</a></li> --
                                            <li style="font-style:italic "><a href="#contact" data-toggle="tab">  Contact Page</a></li> --
                                            <li style="font-style:italic "><a href="#references" data-toggle="tab">  References</a></li>
                                        </ul>
                                    </span>
                                </div>
                                <div class="panel-body">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="general">
                                            <input type="hidden" id="id" name="id" value="{{$data->id}}" class="form-control" >
                                            <div class="form-group">
                                                <label>Title</label>
                                                <input type="text" name="title" value="{{$data->title}}" class="form-control" >
                                            </div>
                                            <div class="form-group">
                                                <label>Keywords</label>
                                                <input type="text" name="keywords" value="{{$data->keywords}}" class="form-control" >
                                            </div>
                                            <div class="form-group">
                                                <label>Description</label>
                                                <input type="text" name="description" value="{{$data->description}}" class="form-control" >
                                            </div>
                                            <div class="form-group">
                                                <label>Company</label>
                                                <input type="text" name="company" value="{{$data->company}}" class="form-control" >
                                            </div>
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" name="address" value="{{$data->address}}" class="form-control" >
                                            </div>
                                            <div class="form-group">
                                                <label>Phone</label>
                                                <input type="text" name="phone" value="{{$data->phone}}" class="form-control" >
                                            </div>
                                            <div class="form-group">
                                                <label>Fax</label>
                                                <input type="text" name="fax" value="{{$data->fax}}" class="form-control" >
                                            </div>
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="text" name="email" value="{{$data->email}}" class="form-control" >
                                            </div>
                                            <div class="form-group">
                                                <label>Status</label>
                                                <select class="form-control select2" name="status" style="width: 100%;">
                                                    <option selected="selected">{{$data->status}}</option>
                                                    <option>True</option>
                                                    <option>False</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="smtp">
                                            <div class="form-group">
                                                <label>Smtp Server</label>
                                                <input type="text" name="smtpserver" value="{{$data->smtpserver}}" class="form-control" >
                                            </div>
                                            <div class="form-group">
                                                <label>Smtp Email</label>
                                                <input type="text" name="smtpemail" value="{{$data->smtpemail}}" class="form-control" >
                                            </div>
                                            <div class="form-group">
                                                <label>Smtp Password</label>
                                                <input type="password" name="smtppassword" value="{{$data->smtppassword}}" class="form-control" >
                                            </div>
                                            <div class="form-group">
                                                <label>Smtp Port</label>
                                                <input type="number" name="smtpport" value="{{$data->smtpport}}" class="form-control" >
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="social">
                                            <div class="form-group">
                                                <label>Facebook</label>
                                                <input type="text" name="facebook" value="{{$data->facebook}}" class="form-control" >
                                            </div>
                                            <div class="form-group">
                                                <label>Instagram</label>
                                                <input type="text" name="instagram" value="{{$data->instagram}}" class="form-control" >
                                            </div>
                                            <div class="form-group">
                                                <label>Twitter</label>
                                                <input type="text" name="twitter" value="{{$data->twitter}}" class="form-control" >
                                            </div>
                                            <div class="form-group">
                                                <label>Youtube</label>
                                                <input type="text" name="youtube" value="{{$data->youtube}}" class="form-control" >
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="about">
                                            <div class="form-group">
                                                <label>About Us</label>
                                                <textarea id="about" name="about">{{$data->aboutus}}</textarea>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="contact">
                                            <div class="form-group">
                                                <label>Contact</label>
                                                <textarea id="contact" name="contact">{{$data->contact}}</textarea>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="references">
                                            <div class="form-group">
                                                <label>References</label>
                                                <textarea id="references" name="references">{{$data->references}}</textarea>
                                                <script>
                                                    $(document).ready(function() {
                                                        $('#references').summernote();
                                                        $('#aboutus').summernote();
                                                        $('#contact').summernote();
                                                    });
                                                </script>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary mr-2">Update Setting</button>
                                            <button class="btn btn-dark">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>
</div>
    <!-- /.box -->
@endsection


