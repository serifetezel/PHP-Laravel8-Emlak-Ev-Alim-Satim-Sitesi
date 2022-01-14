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
                    <div class="col-md-10">
                        <span class="address"><i class="icon-map"></i> {{$rs->location}} </span></div>

                </div>
            @endforeach
        </div>
    </div>
</div>
