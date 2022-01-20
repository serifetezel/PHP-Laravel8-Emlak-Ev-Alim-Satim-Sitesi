<aside id="fh5co-hero" class="js-fullheight">
    <div class="flexslider js-fullheight">
        <ul class="slides">
            @php
                $i=0;
            @endphp
            @foreach($slider as $rs)
                @php
                    $i+=1;
                @endphp
                <li style="background-image: url({{Storage::url($rs->image)}});"
                    class="banner banner-1 @if($i==1) active @endif">
                    <div class="container-fluid">
                        <div>
                            <div class="row">
                                <div class="col-md-4 col-md-offset-4 col-md-pull-4 js-fullheight slider-text">
                                    <div class="slider-text-inner">
                                        <div class="desc">
                                            <span class="status">Sale</span>
                                            <div style="text-align: right">
                                                <h4 style="color: #FFFFFF; font-weight: bold">{{$rs->location}}</h4>
                                            </div>
                                            <h1>{{$rs->title}}</h1>
                                            <h2 class="price">{{$rs->price}} TL</h2>
                                            <p>{{$rs->description}}</p>
                                            <p class="details">
                                                <span>{{$rs->area}} m2</span>
                                                <span>{{$rs->room}} Rooms</span>
                                                <span>{{$rs->bathroom}} Bathrooms</span>
                                            </p>
                                            <p><a class="btn btn-primary btn-lg"
                                                  href="{{route('home_detail',['id'=>$rs->id])}}">Learn More</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</aside>
