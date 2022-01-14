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
                    </div>
                </div>
            </div>
            @endforeach
            <!--
            <div class="col-md-4 animate-box">
                <div class="property">
                    <a href="#" class="fh5co-property" style="background-image: url({{ asset('assets')}}/images/property-2.jpg);">
                        <span class="status">Rent</span>
                        <ul class="list-details">
                            <li>2000 ft sq<li>
                            <li>5 Bedroom:</li>
                            <li>4 Bathroom:</li>
                            <li>3 Garage:</li>
                        </ul>
                    </a>
                    <div class="property-details">
                        <h3>Modern House at NZ</h3>
                        <span class="price">$200/mos</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis maiores.</p>
                        <span class="address"><i class="icon-map"></i>Thomas Street, St. Louis, MO 8990, USA</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 animate-box">
                <div class="property">
                    <a href="#" class="fh5co-property" style="background-image: url({{ asset('assets')}}/images/property-3.jpg);">
                        <span class="status">Sale</span>
                        <ul class="list-details">
                            <li>2000 ft sq<li>
                            <li>5 Bedroom:</li>
                            <li>4 Bathroom:</li>
                            <li>3 Garage:</li>
                        </ul>
                    </a>
                    <div class="property-details">
                        <h3>Bonggalo House</h3>
                        <span class="price">$3,000</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis maiores.</p>
                        <span class="address"><i class="icon-map"></i>Thomas Street, St. Louis, MO 8990, USA</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 animate-box">
                <div class="property">
                    <a href="#" class="fh5co-property" style="background-image: url({{ asset('assets')}}/images/property-4.jpg);">
                        <span class="status">Sale</span>
                        <ul class="list-details">
                            <li>2000 ft sq<li>
                            <li>5 Bedroom:</li>
                            <li>4 Bathroom:</li>
                            <li>3 Garage:</li>
                        </ul>
                    </a>
                    <div class="property-details">
                        <h3>Properties at Alaska</h3>
                        <span class="price">$3,000</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis maiores.</p>
                        <span class="address"><i class="icon-map"></i>Thomas Street, St. Louis, MO 8990, USA</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 animate-box">
                <div class="property">
                    <a href="#" class="fh5co-property" style="background-image: url({{ asset('assets')}}/images/property-5.jpg);">
                        <span class="status">Rent</span>
                        <ul class="list-details">
                            <li>2000 ft sq<li>
                            <li>5 Bedroom:</li>
                            <li>4 Bathroom:</li>
                            <li>3 Garage:</li>
                        </ul>
                    </a>
                    <div class="property-details">
                        <h3>Modern Properties</h3>
                        <span class="price">$200/mos</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis maiores.</p>
                        <span class="address"><i class="icon-map"></i>Thomas Street, St. Louis, MO 8990, USA</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 animate-box">
                <div class="property">
                    <a href="#" class="fh5co-property" style="background-image: url({{ asset('assets')}}/images/property-6.jpg);">
                        <span class="status">Sale</span>
                        <ul class="list-details">
                            <li>2000 ft sq<li>
                            <li>5 Bedroom:</li>
                            <li>4 Bathroom:</li>
                            <li>3 Garage:</li>
                        </ul>
                    </a>
                    <div class="property-details">
                        <h3>House at the Top of Mountain</h3>
                        <span class="price">$3,000</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis maiores.</p>
                        <span class="address"><i class="icon-map"></i>Thomas Street, St. Louis, MO 8990, USA</span>
                    </div>
                </div>
            </div>-->
        </div>
    </div>
</div>
