<div id="fh5co-popular-properties" class="fh5co-section-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                <h3>Popular Properties</h3>
                <p>The most suitable popular houses for your comfort are with you on our site...</p>
            </div>
        </div>
        <div class="row">
            @foreach($popular as $rs)
                <div class="col-md-4 animate-box">
                    <a href="{{route('home_detail',['id'=>$rs->id])}}" class="fh5co-property"
                       style="background-image: url({{Storage::url($rs->image)}});">
                        <span class="status">Sale</span>
                        <div class="prop-details">
                            <span class="price">{{$rs->price}} TL</span>
                            <h3>{{$rs->title}}</h3>
                        </div>
                    </a>
                    <div class="col-md-8">
                        <span class="address"><i class="icon-map"></i> {{$rs->location}} </span></div>
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
            @endforeach
        </div>
    </div>
</div>
