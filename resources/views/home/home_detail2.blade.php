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
                <h2 style="font-weight: bold">{{$data->title}}</h2>
                <h5><span class="glyphicon glyphicon-envelope"></span> WRITE YOUR REVIEW </h5>
                @livewireStyles
                @livewireScripts
                @livewire('review', ['id' => $data->id])
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
            </div>
        </div>
    </div>
@endsection
