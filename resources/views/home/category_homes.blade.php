@extends('layouts.home')

@section('title',$data->title ."Home List")
//ürün adı araç çubuğu
@section('description'){{ $data->description }}@endsection
@section('keywords',$data->keywords)
@section('content')
    <div style="background-color: #f5f5f5">
        <br>
        <div class="section">

            <div class="container">

                <div class="row">
                    <div class="container">
                        <div class="properties-listing spacer">

                            <div class="row">
                                <div class="col-lg-3 col-sm-4 ">
                                    <div id="breadcrumb">
                                        <div class="container">
                                            <ul class="breadcrumb">
                                                <li><a href="{{route('home')}}">Home</a></li>
                                                <li><a href="{{route('home')}}">Home List</a></li>
                                                <li class="active">{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($data, $data->title)}}</li>
                                            </ul>

                                        </div>

                                    </div>
                                    <!-- Searh-->
                                    <div class="header-search">
                                        <h4><span class="glyphicon glyphicon-search"></span> Search for</h4>
                                        <form action="{{route('gethome')}}" method="post">
                                            @csrf
                                            <table>
                                                <tr>
                                                    <td>@livewire('search')<br></td>
                                                </tr>
                                                <tr style="text-align:right">
                                                    <td>
                                                        <button class="btn btn-primary">Find Now</button>
                                                    </td>
                                                </tr>
                                            </table>
                                        </form>
                                    @section('footerjs') <!--diğer yerlerde bu scripte ihtiyaç var bunu  kullanmak için-->
                                        @livewireScripts
                                        @endsection
                                    </div>


                                    <!--
                                <br>
                                <div class="row">
                                    <div class="col-lg-5">
                                        <select class="form-control">
                                            <option>Buy</option>
                                            <option>Rent</option>
                                            <option>Sale</option>
                                        </select>
                                    </div>

                                    <div class="col-lg-7">
                                        <select class="form-control">
                                            <option>Price</option>
                                            <option>$150,000 - $200,000</option>
                                            <option>$200,000 - $250,000</option>
                                            <option>$250,000 - $300,000</option>
                                            <option>$300,000 - above</option>
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <select class="form-control">
                                            <option>Property Type</option>
                                            <option>Apartment</option>
                                            <option>Building</option>
                                            <option>Office Space</option>
                                        </select>
                                    </div>
                                </div>
                                -->
                                    <br>


                                    <br>
                                    <br>


                                    <div class="hot-properties hidden-xs">
                                        <h4>Hot Properties</h4>
                                        <div class="row">
                                            <div class="col-lg-4 col-sm-5"><img
                                                    src="{{ asset('assets')}}/images/properties/1.jpg"
                                                    class="img-responsive img-circle" alt="properties"></div>
                                            <div class="col-lg-8 col-sm-7">
                                                <h5><a href="property-detail.php">Integer sed porta quam</a></h5>
                                                <p class="price">$300,000</p></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4 col-sm-5"><img
                                                    src="{{ asset('assets')}}/images/properties/1.jpg"
                                                    class="img-responsive img-circle" alt="properties"></div>
                                            <div class="col-lg-8 col-sm-7">
                                                <h5><a href="property-detail.php">Integer sed porta quam</a></h5>
                                                <p class="price">$300,000</p></div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-4 col-sm-5"><img
                                                    src="{{ asset('assets')}}/images/properties/1.jpg"
                                                    class="img-responsive img-circle" alt="properties"></div>
                                            <div class="col-lg-8 col-sm-7">
                                                <h5><a href="property-detail.php">Integer sed porta quam</a></h5>
                                                <p class="price">$300,000</p></div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-4 col-sm-5"><img
                                                    src="{{ asset('assets')}}/images/properties/1.jpg"
                                                    class="img-responsive img-circle" alt="properties"></div>
                                            <div class="col-lg-8 col-sm-7">
                                                <h5><a href="property-detail.php">Integer sed porta quam</a></h5>
                                                <p class="price">$300,000</p></div>
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
                                    <div class="row" >
                                    @foreach($datalist as $rs)
                                        <!-- properties -->
                                            <div class="col-lg-4 col-sm-6">
                                                <div class="properties">
                                                    <div class="image-holder"
                                                         style="text-align: right; background-color:#00a045;" ><img
                                                            src="{{Storage::url($rs->image)}}" class="img-responsive"
                                                            alt="properties">
                                                        <div class="status sold" style="color:#FFFFFF; ">Sold</div>
                                                    </div>
                                                    <br>
                                                    <h4 style="text-align: center"><a
                                                            href="property-detail.php">{{$rs->title}}</a></h4>
                                                    <hr>
                                                    <p style="text-align: center;"><a style="color: #686868"
                                                         href="property-detail.php">{{$rs->location}}</a>
                                                    </p>
                                                    <hr>
                                                    <p class="price" style="text-align: center">Price: {{$rs->price}}
                                                        TL</p>
                                                    <div style="text-align:center"><a class="btn btn-primary"
                                                           href="{{route('home_detail',['id'=>$rs->id])}}">View Details</a></div>
                                                </div>
                                                <br>
                                            </div>

                                    @endforeach
                                    <!-- properties -->


                                    <!-- properties
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="properties" style="align-self: center">
                                            <div class="image-holder" style="text-align: right; background-color:#00a045"><img src="{{ asset('assets')}}/images/properties/2.jpg" class="img-responsive" alt="properties">
                                                <div class="status sold" style="color:#FFFFFF; " style="color:#FFFFFF; ">Sold </div>

                                            </div>
                                    <br>
                                            <h4 style="text-align: center"><a href="property-detail.php" style="text-align: center">Royal Inn</a></h4>
                                            <hr>
                                            <p class="price" style="text-align: center">Price: $234,900</p>

                                            <div style="text-align:center" ><div style="text-align:center" ><div style="text-align:center" ><a class="btn btn-primary" href="property-detail.php">View Details</a></div></div></div><br>
                                        </div>
                                    </div>-->
                                        <!-- properties -->

                                    <!-- properties
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="properties">
                                            <div class="image-holder" style="text-align: right; background-color:#00a045"><img src="{{ asset('assets')}}/images/properties/3.jpg" class="img-responsive" alt="properties">
                                                <div class="status sold" style="color:#FFFFFF; ">Sold</div>
                                            </div>
                                            <br>
                                            <h4 style="text-align: center"><a href="property-detail.php">Royal Inn</a></h4>
                                            <hr>
                                            <p class="price" style="text-align: center">Price: $234,900</p>
                                            <div style="text-align:center" ><div style="text-align:center" ><a class="btn btn-primary" href="property-detail.php">View Details</a></div></div><br>
                                        </div>
                                    </div>-->
                                    <!-- properties
                                </div>
                                <br><br>
                                <div class="row">
                                     properties
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="properties">
                                            <div class="image-holder" style="text-align: right; background-color:#00a045"><img src="{{ asset('assets')}}/images/properties/1.jpg" class="img-responsive" alt="properties">
                                                <div class="status sold" style="color:#FFFFFF; ">Sold</div>
                                            </div>
                                            <br>
                                            <h4 style="text-align: center"><a href="property-detail.php">Royal Inn</a></h4>
                                            <hr>
                                            <p class="price" style="text-align: center">Price: $234,900</p>
                                            <div style="text-align:center" ><div style="text-align:center" ><a class="btn btn-primary" href="property-detail.php">View Details</a></div></div><br>
                                        </div>
                                    </div>  -->
                                        <!-- properties -->

                                    <!-- properties
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="properties">
                                            <div class="image-holder" style="text-align: right; background-color:#00a045"><img src="{{ asset('assets')}}/images/properties/4.jpg" class="img-responsive" alt="properties">
                                                <div class="status sold" style="color:#FFFFFF; ">Sold</div>
                                            </div>
                                            <br>
                                            <h4 style="text-align: center"><a href="property-detail.php">Royal Inn</a></h4>
                                            <hr>
                                            <p class="price" style="text-align: center">Price: $234,900</p>
                                            <div style="text-align:center" ><div style="text-align:center" ><a class="btn btn-primary" href="property-detail.php">View Details</a></div></div><br>
                                        </div>
                                    </div> -->
                                        <!-- properties -->

                                    <!-- properties
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="properties">
                                            <div class="image-holder" style="text-align: right; background-color:#00a045"><img src="{{ asset('assets')}}/images/properties/1.jpg" class="img-responsive" alt="properties">
                                                <div class="status sold" style="color:#FFFFFF; ">Sold</div>
                                            </div>
                                            <br>
                                            <h4 style="text-align: center"><a href="property-detail.php">Royal Inn</a></h4>
                                            <hr>
                                            <p class="price" style="text-align: center">Price: $234,900</p>
                                            <div style="text-align:center" ><div style="text-align:center" ><a class="btn btn-primary" href="property-detail.php">View Details</a></div></div><br>
                                        </div>
                                    </div> -->
                                    <!-- properties
                                </div>
                                <br><br>
                                <div class="row">
                                     properties
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="properties">
                                            <div class="image-holder" style="text-align: right; background-color:#00a045"><img src="{{ asset('assets')}}/images/properties/4.jpg" class="img-responsive" alt="properties">
                                                <div class="status sold" style="color:#FFFFFF; ">Sold</div>
                                            </div>
                                            <br>
                                            <h4 style="text-align: center"><a href="property-detail.php">Royal Inn</a></h4>
                                            <hr>
                                            <p class="price" style="text-align: center">Price: $234,900</p>
                                            <div style="text-align:center" ><div style="text-align:center" ><a class="btn btn-primary" href="property-detail.php">View Details</a></div></div><br>
                                        </div>
                                    </div> -->
                                        <!-- properties -->

                                    <!-- properties
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="properties">
                                            <div class="image-holder" style="text-align: right; background-color:#00a045"><img src="{{ asset('assets')}}/images/properties/3.jpg" class="img-responsive" alt="properties">
                                                <div class="status sold" style="color:#FFFFFF; ">Sold</div>
                                            </div>
                                            <br>
                                            <h4 style="text-align: center"><a href="property-detail.php">Royal Inn</a></h4>
                                            <hr>
                                            <p class="price" style="text-align: center">Price: $234,900</p>
                                            <div style="text-align:center" ><div style="text-align:center" ><a class="btn btn-primary" href="property-detail.php">View Details</a></div></div>
                                        </div>
                                    </div> -->
                                        <!-- properties -->

                                    <!-- properties
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="properties">
                                            <div class="image-holder" style="text-align: right; background-color:#00a045"><img src="{{ asset('assets')}}/images/properties/2.jpg" class="img-responsive" alt="properties">
                                                <div class="status sold" style="color:#FFFFFF; ">Sold</div>
                                            </div>
                                            <br>
                                            <h4 style="text-align: center"><a href="property-detail.php">Royal Inn</a></h4>
                                            <hr>
                                            <p class="price" style="text-align: center">Price: $234,900</p>
                                            <div style="text-align:center" ><div style="text-align:center" ><a class="btn btn-primary" href="property-detail.php">View Details</a></div></div>
                                        </div>
                                    </div> -->
                                        <!-- properties
                                    </div>
                                    <br>
                                    <div class="row">-->
                                    <!-- properties
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="properties">
                                            <div class="image-holder" style="text-align: right; background-color:#00a045"><img src="{{ asset('assets')}}/images/properties/1.jpg" class="img-responsive" alt="properties">
                                                <div class="status sold" style="color:#FFFFFF; ">Sold</div>
                                            </div>
                                            <br>
                                            <h4 style="text-align: center"><a href="property-detail.php">Royal Inn</a></h4>
                                            <hr>
                                            <p class="price" style="text-align: center">Price: $234,900</p>
                                            <div style="text-align:center" ><div style="text-align:center" ><a class="btn btn-primary" href="property-detail.php">View Details</a></div></div>
                                        </div>
                                    </div> -->
                                    <!-- properties

                                     properties
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="properties">
                                            <div class="image-holder" style="text-align: right; background-color:#00a045"><img src="{{ asset('assets')}}/images/properties/4.jpg" class="img-responsive" alt="properties">
                                                <div class="status sold" style="color:#FFFFFF; ">Sold</div>
                                            </div>
                                            <br>
                                            <h4 style="text-align: center"><a href="property-detail.php">Royal Inn</a></h4>
                                            <hr>
                                            <p class="price" style="text-align: center">Price: $234,900</p>

                                            <div style="text-align:center" ><div style="text-align:center" ><a class="btn btn-primary" href="property-detail.php">View Details</a></div></div>
                                        </div>
                                    </div> -->
                                        <!-- properties -->

                                    <!-- properties
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="properties">
                                            <div class="image-holder" style="text-align: right; background-color:#00a045"><img src="{{ asset('assets')}}/images/properties/3.jpg" class="img-responsive" alt="properties">
                                                <div class="status sold" style="color:#FFFFFF; ">Sold</div>
                                            </div>
                                            <br>
                                            <h4 style="text-align: center"><a href="property-detail.php">Royal Inn</a></h4>
                                            <hr>
                                            <p class="price" style="text-align: center">Price: $234,900</p>

                                            <div style="text-align:center" ><div style="text-align:center" ><a class="btn btn-primary" href="property-detail.php">View Details</a></div></div>
                                        </div>
                                    </div>-->

                                    </div>

                                    <!-- properties
                                    <div class="center">
                                        <ul class="pagination">
                                            <li><a href="#">«</a></li>
                                            <li><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#">5</a></li>
                                            <li><a href="#">»</a></li>
                                        </ul>
                                    </div>-->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
