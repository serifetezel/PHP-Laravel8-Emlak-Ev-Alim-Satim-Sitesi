@extends('layouts.home')

@section('title',$data->title)
@section('description'){{ $data->description }}@endsection
@section('keywords',$data->keywords)

@section('content')

    <div id="breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('home')}}">Home</a> </li>
                <li>{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($data->category, $data->category->title)}}</li>
                <li class="active">{{$data->title}}</li>
            </ul>
        </div>
    </div>



<div class="container">
    <div class="properties-listing spacer">

        <div class="row">
            <div class="col-lg-3 col-sm-4 hidden-xs">

                <div class="hot-properties hidden-xs">
                    <h3> Home Features</h3>

                    <div class="row">
                        <div class="col-lg-4 col-sm-5"><img src="{{ asset('assets')}}/images/area.png" width="30" height="30"  alt="properties"/></div>
                        <div class="col-lg-8 col-sm-7">
                            <h5>Area: </h5>
                            <p class="area">{{$data->area}}</p> </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-lg-4 col-sm-5"><img src="{{ asset('assets')}}/images/floor.png" width="30" height="30" alt="properties"/></div>
                        <div class="col-lg-8 col-sm-7">
                            <h5>Floor: </h5>
                            <p class="floor">{{$data->floor}}</p> </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-lg-4 col-sm-5"><img src="{{ asset('assets')}}/images/room.png" width="30" height="30" alt="properties"/></div>
                        <div class="col-lg-8 col-sm-7">
                            <h5>Room: </h5>
                            <p class="room">{{$data->room}}</p> </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-lg-4 col-sm-5"><img src="{{ asset('assets')}}/images/bathroom.png" width="30" height="30" alt="properties"/></div>
                        <div class="col-lg-8 col-sm-7">
                            <h5>Bathroom: </h5>
                            <p class="bathroom">{{$data->bathroom}}</p> </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-lg-4 col-sm-5"><img src="{{ asset('assets')}}/images/balcony.png" width="30" height="30" alt="properties"/></div>
                        <div class="col-lg-8 col-sm-7">
                            <h5>Balcony: </h5>
                            <p class="balcony">{{$data->balcony}}</p> </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-lg-4 col-sm-5"><img src="{{ asset('assets')}}/images/garden.png" width="30" height="30" alt="properties"/></div>
                        <div class="col-lg-8 col-sm-7">
                            <h5>Garden: </h5>
                            <p class="garden">{{$data->garden}}</p> </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-lg-4 col-sm-5"><img src="{{ asset('assets')}}/images/garage.png" width="30" height="30" alt="properties"/></div>
                        <div class="col-lg-8 col-sm-7">
                            <h5>Garage: </h5>
                            <p class="garage">{{$data->garage}}</p> </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-lg-4 col-sm-5"><img src="{{ asset('assets')}}/images/furnished.png" width="30" height="30" alt="properties"/></div>
                        <div class="col-lg-8 col-sm-7">
                            <h5>Furnished: </h5>
                            <p class="furnished">{{$data->furnished}}</p> </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-lg-4 col-sm-5"><img src="{{ asset('assets')}}/images/heating.png" width="30" height="30" alt="properties"/></div>
                        <div class="col-lg-8 col-sm-7">
                            <h5>Heating: </h5>
                            <p class="heating">{{$data->heating}}</p> </div>
                    </div>
                </div>


<br><br>
                <div class="advertisement">
                    <h4>Advertisements</h4>
                    <img src="{{ asset('assets')}}/images/advertisements.jpg" class="img-responsive" alt="advertisement">

                </div>

            </div>

            <div class="col-lg-9 col-sm-8 ">
                <div class="col-md-8">
                <div><h2 style="font-weight: bold">{{$data->title}}</h2></div>

                </div>

                <div class="row">

                    <div class="col-lg-8">

                        <div class="property-/images">
                            <!-- Slider Starts -->


                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->



                                <ol class="carousel-indicators hidden-xs">
                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                                    <li data-target="#myCarousel" data-slide-to="2" class=""></li>
                                    <li data-target="#myCarousel" data-slide-to="3" class=""></li>
                                </ol>

                                <div class="carousel-inner">
                                    <!-- Item 1 -->
                                    <div class="item active">
                                        <img src="{{Storage::url($data->image)}}" class="properties" alt="properties" />
                                    </div>

                                    <!-- #Item 2 -->

                                    @foreach($datalist as $rs)
                                    <div class="item active">
                                        <img src="{{Storage::url($rs->image)}}" class="properties" alt="properties" />
                                    </div>
                                @endforeach


                                </div>

                                <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                                <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>

                            </div>

                            <!-- #Slider Ends -->
                        </div>


                            <br><br>
                        <div class="spacer"><h4><span class="glyphicon glyphicon-th-list"></span>Descriptions of the Home</h4>
                        <p>{!! $data->description !!}</p>
                        </div>

                        <div class="spacer"><h4><span class="glyphicon glyphicon-th-list"></span>Detail of the Home</h4>
                            <p>{!! $data->detail !!}</p>
                        </div>
                        <div><h4><span class="glyphicon glyphicon-map-marker"></span> Location : {{$data->location}}</h4>
                            <div class="well"><iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Pulchowk,+Patan,+Central+Region,+Nepal&amp;aq=0&amp;oq=pulch&amp;sll=37.0625,-95.677068&amp;sspn=39.371738,86.572266&amp;ie=UTF8&amp;hq=&amp;hnear=Pulchowk,+Patan+Dhoka,+Patan,+Bagmati,+Central+Region,+Nepal&amp;ll=27.678236,85.316853&amp;spn=0.001347,0.002642&amp;t=m&amp;z=14&amp;output=embed"></iframe></div>
                        </div>

                    </div>

                    <div class="col-lg-4">
                        <div class="col-lg-12  col-sm-6">
                            <div class="property-info">
                                <p class="price" style="color: #44C662; font-weight: bold" >{{$data->price}} TL</p>
                                <p class="area"><span class="glyphicon glyphicon-map-marker"></span>{{$data->location}}</p>
                                <div class="profile">
                                    <span class="glyphicon glyphicon-user"></span> Agent Details
                                    <p>Şerife Tezel</p>
                                     <p>0451 656 56 94</p>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-12 col-sm-6 ">
                            <div class="enquiry">
                                <h5><span class="glyphicon glyphicon-envelope"></span> WRITE YOUR REVIEW </h5>
                                @livewire('review', ['id' => $data->id])
                            </div>
                        </div>
                        <br>

                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection

