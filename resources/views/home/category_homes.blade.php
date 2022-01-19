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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
