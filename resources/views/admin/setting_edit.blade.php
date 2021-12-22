@extends('layouts.admin')
@section('title','Setting')
@section('javascript')

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

@endsection
@section('content')
    <div class="card">
        <div class="card-body">
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <section class="content-header">
            <h3>
                Edit Setting
            </h3>
            <ol class="breadcrumb" style="color: #cbd5e0">
                <li class="ml-auto"><a href="{{url('/')}}/admin"><i class="fa fa-dashboard"></i> Anasayfa</a></li>
                <li>/</li>
                <li>Setting Düzenle</li>
            </ol>

        </section>
        <!-- tab style 2 -->

        <div class="col-md-12">
            <div class="white_shd full margin_bottom_40">
                <div class="full graph_head">

                </div>
                <div class="full inner_elements">
                    <div class="row">
                        <div class="col-md-12">
                            <h1> </h1>
                            <form class="forms-sample" role="form"  method="post" action="{{ route('admin_setting_update')}}" enctype="multipart/form-data">
                                @csrf

                                <div class="tab_style2">
                                    <h1> </h1>
                                    <div class="tabbar padding_infor_info">
                                        <h1> </h1>
                                        <nav>
                                            <div class="nav nav-tabs" id="nav-tab1" role="tablist">
                                                <a style="background-color:#2f6ee0" class="nav-item nav-link active" id="nav-general-tab2" data-toggle="tab" href="#nav-general_s2" role="tab" aria-controls="nav-general_s2" aria-selected="true">General</a>
                                                <a style="background-color:#2f6ee0" class="nav-item nav-link" id="nav-smtp-tab2" data-toggle="tab" href="#nav-smtp_s2" role="tab" aria-controls="nav-smtp_s2" aria-selected="false">Smtp Email</a>
                                                <a style="background-color:#2f6ee0" class="nav-item nav-link" id="nav-social-tab2" data-toggle="tab" href="#nav-social_s2" role="tab" aria-controls="nav-social_s2" aria-selected="false">Social Media</a>
                                                <a style="background-color:#2f6ee0" class="nav-item nav-link" id="nav-about-tab2" data-toggle="tab" href="#nav-about_s2" role="tab" aria-controls="nav-about_s2" aria-selected="false">About Us</a>
                                                <a style="background-color:#2f6ee0" class="nav-item nav-link" id="nav-contact-tab2" data-toggle="tab" href="#nav-contact_s2" role="tab" aria-controls="nav-contacts_s2" aria-selected="false">Contact Page</a>
                                                <a style="background-color:#2f6ee0" class="nav-item nav-link" id="nav-reference-tab2" data-toggle="tab" href="#nav-reference_s2" role="tab" aria-controls="nav-reference_s2" aria-selected="false">References</a>
                                            </div>
                                        </nav>
                                        <div class="tab-content" id="nav-tabContent_2">
                                            <h1> </h1>
                                            <div class="tab-pane fade show active" id="nav-general_s2" role="tabpanel" aria-labelledby="nav-general-tab2">
                                                <input type="hidden" id="id" name="id" value="{{$data->id}}" class="form-control" >
                                                <div class="form-group">
                                                    <label >Title</label>
                                                    <input type="text" id="title" name="title" value="{{$data->title}}" class="form-control" >
                                                </div>
                                                <div class="form-group">
                                                    <label >Keywords</label>
                                                    <input type="text" name="keywords" value="{{$data->keywords}}" class="form-control" >
                                                </div>
                                                <div class="form-group">
                                                    <label >Description</label>
                                                    <input type="text" name="description" value="{{$data->description}}" class="form-control" >
                                                </div>
                                                <div class="form-group">
                                                    <label >Company</label>
                                                    <input type="text" name="company" value="{{$data->company}}" class="form-control" >
                                                </div>
                                                <div class="form-group">
                                                    <label >Address</label>
                                                    <input type="text" name="address" value="{{$data->address}}" class="form-control" >
                                                </div>

                                                <div class="form-group">
                                                    <label >phone</label>
                                                    <input type="tel" name="phone" value="{{$data->phone}}" class="form-control" >
                                                </div>
                                                <div class="form-group">
                                                    <label >fax</label>
                                                    <input type="text" name="fax" value="{{$data->fax}}" class="form-control" >
                                                </div>
                                                <div class="form-group">
                                                    <label >email</label>
                                                    <input type="text" name="email" value="{{$data->email}}" class="form-control" >
                                                </div>

                                                <div class="form-group">
                                                    <label >Status</label>
                                                    <select class="form-control" name="status" >
                                                        <option selected="selected"> {{$data->status}}</option>
                                                        <option>True</option>
                                                        <option>True</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="nav-smtp_s2" role="tabpanel" aria-labelledby="nav-smtp-tab2">
                                                <div class="form-group">
                                                    <label >Smtpserver</label>
                                                    <input type="text" name="smtpserver" value="{{$data->smtpserver}}" class="form-control" >
                                                </div>
                                                <div class="form-group">
                                                    <label >Smtpemail</label>
                                                    <input type="text" name="smtpemail" value="{{$data->smtpemail}}" class="form-control" >
                                                </div>
                                                <div class="form-group">
                                                    <label >Smtppassword</label>
                                                    <input type="password" name="smtppassword" value="{{$data->smtppassword}}" class="form-control" >
                                                </div>
                                                <div class="form-group">
                                                    <label >Smtpport</label>
                                                    <input type="number" name="smtpport" value="{{$data->smtpport}}" class="form-control" >
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="nav-social_s2" role="tabpanel" aria-labelledby="nav-social-tab">
                                                <div class="form-group">
                                                    <label >facebook</label>
                                                    <input type="text" name="facebook" value="{{$data->facebook}}" class="form-control" >
                                                </div>
                                                <div class="form-group">
                                                    <label >twitter</label>
                                                    <input type="text" name="twitter" value="{{$data->twitter}}" class="form-control" >
                                                </div>
                                                <div class="form-group">
                                                    <label >Youtube</label>
                                                    <input type="text" name="youtube" value="{{$data->youtube}}" class="form-control" >
                                                </div>
                                                <div class="form-group">
                                                    <label >Google</label>
                                                    <input type="text" name="google" value="{{$data->google}}" class="form-control" >
                                                </div>

                                            </div>
                                            <div class="tab-pane fade" id="nav-about_s2" role="tabpanel" aria-labelledby="nav-about-tab">
                                                <div class="form-group" >
                                                    <label >About us</label>
                                                    <textarea id="aboutus" name="aboutus">{{$data->aboutus}}</textarea>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="nav-contact_s2" role="tabpanel" aria-labelledby="nav-contact-tab">
                                                <div class="form-group" >
                                                    <label >Contact</label>
                                                    <textarea id="contact" name="contact">{{$data->contact}}</textarea>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="nav-reference_s2" role="tabpanel" aria-labelledby="nav-reference-tab">
                                                <div class="form-group"  >
                                                    <label >References</label>
                                                    <textarea id="references" name="references">{{$data->references}}</textarea>
                                                </div>
                                                <script>
                                                    $(document).ready(function() {
                                                        $('#references').summernote();
                                                        $('#aboutus').summernote();
                                                        $('#contact').summernote();
                                                    });
                                                </script>
                                                <script>
                                                    $('#references').summernote({
                                                        placeholder: '',
                                                        tabsize: 2,
                                                        height: 120,
                                                        toolbar: [
                                                            ['style', ['style']],
                                                            ['font', ['bold', 'underline', 'clear']],
                                                            ['color', ['color']],
                                                            ['para', ['ul', 'ol', 'paragraph']],
                                                            ['table', ['table']],
                                                            ['insert', ['link', 'picture', 'video']],
                                                            ['view', ['fullscreen', 'codeview', 'help']]
                                                        ]
                                                    });
                                                    $('#aboutus').summernote({
                                                        placeholder: '',
                                                        tabsize: 2,
                                                        height: 120,
                                                        toolbar: [
                                                            ['style', ['style']],
                                                            ['font', ['bold', 'underline', 'clear']],
                                                            ['color', ['color']],
                                                            ['para', ['ul', 'ol', 'paragraph']],
                                                            ['table', ['table']],
                                                            ['insert', ['link', 'picture', 'video']],
                                                            ['view', ['fullscreen', 'codeview', 'help']]
                                                        ]
                                                    });
                                                    $('#contact').summernote({
                                                        placeholder: '',
                                                        tabsize: 2,
                                                        height: 120,
                                                        toolbar: [
                                                            ['style', ['style']],
                                                            ['font', ['bold', 'underline', 'clear']],
                                                            ['color', ['color']],
                                                            ['para', ['ul', 'ol', 'paragraph']],
                                                            ['table', ['table']],
                                                            ['insert', ['link', 'picture', 'video']],
                                                            ['view', ['fullscreen', 'codeview', 'help']]
                                                        ]
                                                    });
                                                </script>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary me-2">Update Package</button>
                                <button class="btn btn-light">Cancel</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>


</div>
        </div>






        <!-- /.container-fluid -->

        <!-- End of Main Content -->
@endsection
