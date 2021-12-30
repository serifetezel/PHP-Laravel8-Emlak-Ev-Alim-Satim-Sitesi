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

            </div>
        </div>
    </div>
@endsection

