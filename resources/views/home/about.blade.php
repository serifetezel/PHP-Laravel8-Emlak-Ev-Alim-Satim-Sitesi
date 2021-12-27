@extends('layouts.home')

@section('title','About Us -'.$setting->title)
@section('description'){{ $setting->description }}@endsection
@section('keywords',$setting->keywords)

@section('content')
    <aside id="fh5co-hero" class="js-fullheight" style="height: 727px;">
        <div class="flexslider js-fullheight" style="height: 727px;">
            <ul class="slides">
                <li style="background-image: url{{ asset('assets')}}/images/hero.jpg; width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; z-index: 2; height: 727px;" class="flex-active-slide">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text animated fadeInUp" style="height: 727px;">
                                <div class="slider-text-inner">
                                    <h2 class="heading-title">About Us</h2>
                                    <p class="fh5co-lead">Designed with <i class="icon-heart3"></i>  {{$setting->company}} </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <ol class="flex-control-nav flex-control-paging"></ol><ul class="flex-direction-nav"><li class="flex-nav-prev"><a class="flex-prev flex-disabled" href="#" tabindex="-1">Previous</a></li><li class="flex-nav-next"><a class="flex-next flex-disabled" href="#" tabindex="-1">Next</a></li></ul></div>
    </aside>
    <div id="breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('home')}}">Home</a> </li>
                <li class="active">About Us</li>
            </ul>
        </div>
    </div>
    <div class="section">

        <div class="container">

            <div class="row">
                {!! $setting->aboutus !!}
            </div>
        </div>
    </div>
@endsection
