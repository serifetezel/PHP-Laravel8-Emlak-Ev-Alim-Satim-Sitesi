<div id="fh5co-properties" class="fh5co-section-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                <h3>Newest Properties</h3>
                <p>We are with you in our list of the newest houses...</p>
            </div>
        </div>
        <div class="row">
            @foreach($newest as $rs)
            <div class="col-md-4 animate-box">
                <div class="property">
                    <a href="{{route('home_detail',['id'=>$rs->id])}}" class="fh5co-property" style="background-image: url({{Storage::url($rs->image)}});">
                        <span class="status">Sale</span>
                        <ul class="list-details">
                            <li>{{$rs->area}} m2<li>
                            <li>{{$rs->room}} Rooms</li>
                            <li>{{$rs->bathroom}} Bathrooms</li>
                            <li>{{$rs->floor}}. Kat</li>
                        </ul>
                    </a>
                    <div class="property-details">
                        <h3>{{$rs->title}}</h3>
                        <span class="price">{{$rs->price}} TL</span>

                        <p>{{$rs->description}}</p>

                        <span class="address"><i class="icon-map"></i>{{$rs->location}}</span>
                        <div class="pull-right">
                        @php
                            $avrgrev = \App\Http\Controllers\HomeController::avrgreview($rs->id);
                            $countreview = \App\Http\Controllers\HomeController::countreview($rs->id);
                        @endphp
                        <div class="rating">
                            <i class=" @if ($avrgrev>=1) icon-star @else icon-star-outlined  @endif"></i>
                            <i class=" @if ($avrgrev>=2) icon-star @else icon-star-outlined  @endif"></i>
                            <i class=" @if ($avrgrev>=3) icon-star @else icon-star-outlined  @endif"></i>
                            <i class=" @if ($avrgrev>=4) icon-star @else icon-star-outlined  @endif"></i>
                            <i class=" @if ($avrgrev>=5) icon-star @else icon-star-outlined  @endif"></i>
                        </div>
                        </div>

                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
