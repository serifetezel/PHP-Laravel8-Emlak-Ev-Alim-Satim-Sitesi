@extends('layouts.home')

@section('title',$data->title ."Home List")

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
                                        @livewireScripts

                                    </div>

                                    <br>

                                    <br>
                                    <br>

                                </div>

                                <div class="col-lg-9 col-sm-8">
<br>
                                    <br>
                                    <div class="row" >
                                    @foreach($datalist as $rs)
                                        <!-- properties -->
                                            <div class="col-lg-4 col-sm-6">
                                                <div class="properties" style="height: 500px">
                                                    <div class="image-holder"
                                                         style="text-align: right; background-color:#00a045" ><img style="height: 200px; width: 300px"
                                                            src="{{Storage::url($rs->image)}}" class="img-responsive"
                                                            alt="properties">
                                                        <div class="status sold" style="color:#FFFFFF; ">Sale</div>
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
