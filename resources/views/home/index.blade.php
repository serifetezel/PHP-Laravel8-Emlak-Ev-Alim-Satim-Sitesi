@extends('layouts.home')

@section('title',$setting->title)
@section('description'){{ $setting->description}}@endsection
@section('keywords',$setting->keywords)
@section('content')
    @include('home._aside')
    @include('home._search')
    @include('home._features')
    @include('home._populer_properties')
    @include('home._happy_clients')
    @include('home._newest_properties')
    @include('home._our_agents')
    @include('home._recent_from_blog')
    @include('home._ask_an_agents')
@endsection

