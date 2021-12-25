<div id="fh5co-popular-properties" class="fh5co-section-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                <h3>Picked Properties For You</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis maiores, perspiciatis accusamus asperiores sint consequuntur debitis.</p>
            </div>
        </div>
        <div class="row">
            @foreach($picked as $rs)
            <div class="col-md-4 animate-box">
                <a href="{{route('home_detail',['id'=>$rs->id])}}" class="fh5co-property" style="background-image: url({{Storage::url($rs->image)}});">
                    <span class="status">Sale</span>
                    <div class="prop-details">
                        <span class="price">{{$rs->price}} TL</span>
                        <h3>{{$rs->title}}</h3>
                    </div>
                </a>
                <div class="col-md-10">
                    <span class="address"><i class="icon-map"></i> {{$rs->location}} </span></div>

                <div class="pull-right"><span><a style="color: #00a045; height: 100px ; width:100px"  class="icon-shopping-cart" href="{{route('addtocart',['id'=>$rs->id])}}"></a></span>
                </div>

            </div>

            @endforeach
            <!--
            <div class="col-md-4 animate-box">
                <a href="#" class="fh5co-property" style="background-image: url({{ asset('assets')}}/images/property-2.jpg);">
                    <span class="status">Rent</span>
                    <div class="prop-details">
                        <span class="price">$200/mos</span>
                        <h3>Modern House at NZ</h3>
                    </div>
                </a>
            </div>
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
