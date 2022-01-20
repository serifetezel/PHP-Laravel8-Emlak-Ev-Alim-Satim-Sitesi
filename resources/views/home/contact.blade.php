@extends('layouts.home')

@section('title','Contact -'.$setting->title)
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
                                    <h2 class="heading-title">Contact Us</h2>
                                    <p class="fh5co-lead">Designed with <i class="icon-heart3"></i>  {{$setting->company}} </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <ol class="flex-control-nav flex-control-paging"></ol><ul class="flex-direction-nav"><li class="flex-nav-prev"><a class="flex-prev flex-disabled" href="#" tabindex="-1">Previous</a></li><li class="flex-nav-next"><a class="flex-next flex-disabled" href="#" tabindex="-1">Next</a></li></ul></div>
    </aside>
    <br>
    <div class="section" >
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box fadeInUp animated">
                    <h3>Contact Information</h3>
                    <p>Bizimle Her Zaman İletişime Geçebilirsiniz.</p>
                </div>
            </div>
            <div class="col-md-7">
            <h3 class="section-title">İletişim Bilgileri</h3>
             {!! $setting->contact !!}</div>
            <h3 class="section-title">İletişim Formu</h3>
            <div class="col-md-5" style="background-color:#eeecea">
            @include('home.message')
            <form id="checkout-form" class="clearfix" method="post" action="{{route('sendmessage')}}">
                @csrf
                <div class="row animate-box fadeInUp animated">
                    <br><br>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" placeholder="Name & Surname">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="phone" placeholder="Phone Number">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea type="text" rows="5" class="form-control" name="message" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="pull-right">
                                    <input type="submit" value="Send Message" class="btn btn-primary">
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
            </form>
            </div>
        </div>
    </div>
@endsection


