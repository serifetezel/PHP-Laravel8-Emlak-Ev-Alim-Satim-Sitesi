@extends('layouts.admin')

@section('title','Category List')

@section('content')
    <div class="card">
        <div class="card-body">
        <!-- Content Header (Page header) -->
        <section class="content-header">

            <h1>
                Kategori Listesi
            </h1>
            <ol class="breadcrumb" style="color: #cbd5e0">
                <li class="ml-auto"><a href="{{url('/')}}/admin"><i class="fa fa-dashboard"></i> Anasayfa</a></li>
                <li>/</li>
                <li>Kategoriler</li>
            </ol>

            <a href="{{route('admin_category_add')}}" type="button" class="btn btn-inverse-primary btn-fw" style="width: 120px">Add Category</a>

        </section>
            <div class="card">
                <div class="card-body">
                    <div style="overflow: auto">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Parent </th>
                            <th>Title(s)</th>
                            <th>Keywords</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($datalist as $rs)
                            <tr>
                                <td> {{ $rs->id }}</td>
                                <td> {{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title) }}</td>
                                <td> {{ $rs->title }}</td>
                                <td> {{ $rs->keywords }}</td>
                                <td> {{ $rs->description }}</td>
                                <td> {{ $rs->status }}</td>
                                <td><a href="{{route('admin_category_edit', ['id' => $rs->id])}}"> Edit</a></td>
                                <td><a href="{{route('admin_category_delete', ['id' => $rs->id])}}" onclick="return confirm('Delete ! Are you sure?')"  > Delete </a></td>
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
@section('footer')
    <script src="{{asset('assets')}}/admin/assets/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="{{asset('assets')}}/admin/assets/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="{{asset('assets')}}/admin/assets/vendors/flot.curvedlines/curvedLines.js"></script>
    <link href="{{asset('assets')}}/admin/assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('assets')}}/admin/assets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('assets')}}/admin/assets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('assets')}}/admin/assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('assets')}}/admin/assets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
    <script src="{{asset('assets')}}/admin/assets/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="{{asset('assets')}}/admin/assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="{{asset('assets')}}/admin/assets/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="{{asset('assets')}}/admin/assets/vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="{{asset('assets')}}/admin/assets/vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="{{asset('assets')}}/admin/assets/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{asset('assets')}}/admin/assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="{{asset('assets')}}/admin/assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{asset('assets')}}/admin/assets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="{{asset('assets')}}/admin/assets/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="{{asset('assets')}}/admin/assets/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="{{asset('assets')}}/admin/assets/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="{{asset('assets')}}/admin/assets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="{{asset('assets')}}/admin/assets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="{{asset('assets')}}/admin/assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{asset('assets')}}/admin/assets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="{{asset('assets')}}/admin/assets/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="{{asset('assets')}}/admin/assets/vendors/jszip/dist/jszip.min.js"></script>
    <script src="{{asset('assets')}}/admin/assets/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="{{asset('assets')}}/admin/assets/vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{asset('assets')}}/admin/assets/build/js/custom.min.js"></script>
    <script>
        <div class="row">
            <div class="col-sm-6">
                <div class="dataTables_length" id="datatable_length">
                    <label>Show
                        <select name="datatable_length" aria-controls="datatable" class="form-control input-sm">
                            <option value="10">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select> entries
                    </label>
                </div>
            </div>
            <div class="col-sm-6">
                <div id="datatable_filter" class="dataTables_filter">
                    <label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="datatable"></label>
                </div>
            </div>
        </div>
    </script>
@endsection
