<link rel="shortcut icon" href="favicon.ico">

<link href='{{ asset('assets')}}/https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,300' rel='stylesheet' type='{{ asset('assets')}}/text/css'>

<!-- Animate.css -->
<link rel="stylesheet" href="{{ asset('assets')}}/css/animate.css">
<!-- Icomoon Icon Fonts-->
<link rel="stylesheet" href="{{ asset('assets')}}/css/icomoon.css">
<!-- Bootstrap  -->
<link rel="stylesheet" href="{{ asset('assets')}}/css/bootstrap.css">
<!-- Superfish -->
<link rel="stylesheet" href="{{ asset('assets')}}/css/superfish.css">
<!-- Flexslider  -->
<link rel="stylesheet" href="{{ asset('assets')}}/css/flexslider.css">
<!-- Magnific Popup -->
<link rel="stylesheet" href="{{ asset('assets')}}/css/magnific-popup.css">
<!-- Date Picker -->
<link rel="stylesheet" href="{{ asset('assets')}}/css/bootstrap-datepicker.min.css">
<!-- CS Select -->
<link rel="stylesheet" href="{{ asset('assets')}}/css/cs-select.css">
<link rel="stylesheet" href="{{ asset('assets')}}/css/cs-skin-border.css">

<link rel="stylesheet" href="{{ asset('assets')}}/css/style.css">

    <div class="card">
        <div class="card-body">

            <!-- Main content -->
        <section class="content">
            <br>
            <h3>
                Message Detail
            </h3>
            @include('home.message')
            <!-- Default box -->
            <div class="card">

                    <form class="forms-sample" action="{{route('admin_message_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">

                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>Id</th><td> {{ $data->id }}</td>
                                </tr><tr>
                                    <th>Name</th><td> {{($data->name)}}</td>
                                </tr><tr>
                                    <th>Email</th><td> {{ $data->email }}</td>
                                </tr><tr>
                                    <th>Phone</th><td> {{ $data->phone }}</td>
                                </tr><tr>
                                    <th>Subject</th><td> {{ $data->subject }}</td>
                                </tr><tr>
                                    <th>Message</th><td> {{ $data->message }}</td>
                                </tr><tr>
                                    <th>Admin Note</th>
                                    <td>
                                        <textarea id="note" name="note">{{ $data->note }}</textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary">Update Message</button>
                                        </div>
                                    </td>
                                </tr>
                                </thead>
                            </table>
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



