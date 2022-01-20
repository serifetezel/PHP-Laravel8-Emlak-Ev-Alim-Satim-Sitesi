@extends('layouts.home')

@section('title',$search ."Home List")

@section('content')
<div style="background-color: #f5f5f5">
    <br>
    <div class="section">
        <div class="container" >
            <div class="row" >
                <div class="container" >
                    <div class="properties-listing spacer">
                        <div class="row" >
                            <div class="col-lg-3 col-sm-4 ">
                                <div id="breadcrumb">
                                    <div class="container">
                                        <ul class="breadcrumb">
                                            <li><a href="{{route('home')}}">Home</a> </li>
                                            <li class="active"><a href=>{{$search}} HomeList</a> </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Searh-->
                                <div class="header-search" style="background-color: #1b809e">
                                    <form action="gethome" method="post" style="width: max-content">
                                        @csrf
                                        @livewire('search')
                                        <button type="submit" class="search-btn"><i class="fa fa-search"></i></button>

                                    </form>
                                    @livewireScripts
                                </div>
                                <div class="col-md-2">
                                    <ul class="nav navbar-nav navbar-right">
                                        <li class="dropdown">
                                            <div class="side-widget">
                                                <form action="{{route('home')}}" method="post" class="search"
                                                      style="margin-top: 10px; width: 98%; margin-left: 25px;">
                                                    @csrf
                                                    @livewire('search')
                                                    <button type="submit"><i class="fa fa-search"></i></button>
                                                </form>
                                            @section('footerjs') <!--diğer yerlerde bu scripte ihtiyaç var bunu  kullanmak için-->
                                                @livewireScripts
                                                @endsection
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <br>
                                <br>
                                <br>
                                <div class="hot-properties hidden-xs">
                                    <h4>Hot Properties</h4>
                                    <div class="row">
                                        <div class="col-lg-4 col-sm-5"><img src="{{ asset('assets')}}/images/properties/1.jpg" class="img-responsive img-circle" alt="properties" ></div>
                                        <div class="col-lg-8 col-sm-7">
                                            <h5><a href="property-detail.php">Integer sed porta quam</a></h5>
                                            <p class="price">$300,000</p> </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4 col-sm-5"><img src="{{ asset('assets')}}/images/properties/1.jpg" class="img-responsive img-circle" alt="properties"></div>
                                        <div class="col-lg-8 col-sm-7">
                                            <h5><a href="property-detail.php">Integer sed porta quam</a></h5>
                                            <p class="price">$300,000</p> </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4 col-sm-5"><img src="{{ asset('assets')}}/images/properties/1.jpg" class="img-responsive img-circle" alt="properties"></div>
                                        <div class="col-lg-8 col-sm-7">
                                            <h5><a href="property-detail.php">Integer sed porta quam</a></h5>
                                            <p class="price">$300,000</p> </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4 col-sm-5"><img src="{{ asset('assets')}}/images/properties/1.jpg" class="img-responsive img-circle" alt="properties"></div>
                                        <div class="col-lg-8 col-sm-7">
                                            <h5><a href="property-detail.php">Integer sed porta quam</a></h5>
                                            <p class="price">$300,000</p> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9 col-sm-8">
                                <div class="sortby clearfix">
                                    <div class="pull-right">
                                        <select class="form-control">
                                            <option>Sort by</option>
                                            <option>Price: Low to High</option>
                                            <option>Price: High to Low</option>
                                        </select></div>
                                </div>
                                <br>
                                <div class="row">
                                    @foreach($datalist as $rs)
                                    <!-- properties -->
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="properties">
                                            <div class="image-holder" style="text-align: right; background-color:#00a045"><img src="{{Storage::url($rs->image)}}" class="img-responsive" alt="properties">
                                                <div class="status sold" style="color:#FFFFFF; ">Sold</div>
                                            </div>
                                            <br>
                                            <h4 style="text-align: center"><a href="property-detail.php">{{$rs->title}}</a></h4>
                                            <hr>
                                            <p style="text-align: center;"><a style="color: #686868" href="property-detail.php">{{$rs->location}}</a></p>
                                            <hr>
                                            <p class="price" style="text-align: center">Price: {{$rs->price}} TL</p>
                                            <div style="text-align:center" ><a class="btn btn-primary" href="property-detail.php">View Details</a></div>
                                        </div>
                                        <br>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
