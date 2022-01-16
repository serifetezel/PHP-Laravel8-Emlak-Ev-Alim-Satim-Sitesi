@extends('layouts.home')

@section('title',"Home List")

@section('content')
    <div style="background-color: #f5f5f5">
        <br>
        <div class="container">
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
                                     <!--diğer yerlerde bu scripte ihtiyaç var bunu  kullanmak için-->
                                        @livewireScripts


                                    </div>

                                    <br>

                                    <br>

                                    <br>
                                    <div class="row">
                                    @foreach($datalist as $rs)
                                        <!-- properties -->
                                            <div class="col-md-4 animate-box">

                                                <div class="fh5co-property"
                                                   style="background-image: url({{Storage::url($rs->image)}});">
                                                    <div class="status sold" style="color:#FFFFFF; ">Sale</div></div>

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

                                                <br><br>
                                            </div>

                                    @endforeach




            </div>
        </div>
    </div>
@endsection
