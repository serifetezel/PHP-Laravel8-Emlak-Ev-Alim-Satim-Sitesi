<div id="fh5co-popular-properties" class="fh5co-section-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                <h3>Picked Properties For You</h3>
                <p>We care about your preferences in order to offer the best for you...</p>
            </div>
        </div>
        <div class="row">
            @foreach($picked as $rs)
                <div class="col-md-4 animate-box">
                    <a href="{{route('home_detail',['id'=>$rs->id])}}" class="fh5co-property"
                       style="background-image: url({{Storage::url($rs->image)}});">
                        <span class="status">Sale</span>
                        <div class="prop-details">
                            <span class="price">{{$rs->price}} TL</span>
                            <h3>{{$rs->title}}</h3>
                        </div>
                    </a>
                    <div class="col-md-10">
                        <span class="address"><i class="icon-map"></i> {{$rs->location}} </span></div>
                </div>

        @endforeach
        <!--
            <div class="col-md-4 animate-box">
                <a href="#" class="fh5co-property" style="background-image: url({{ asset('assets')}}/images/property-3.jpg);">
                    <span class="status">Sale</span>
                    <div class="prop-details">
                        <span class="price">$3,000</span>
                        <h3>Bonggalo House</h3>
                    </div>
                </a>
            </div>
            -->
        </div>
    </div>
</div>
