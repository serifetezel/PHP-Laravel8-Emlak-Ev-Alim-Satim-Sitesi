<div id="fh5co-about" class="fh5co-agent">
    <div class="container" >
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                <h3>Our Agents</h3>
                <p>We work for you with our team...</p>
            </div>
        </div>
        <div class="row" >
            @auth
                @php
                    $userRoles = Auth::user()->roles->pluck('name');
                @endphp
                @if($userRoles->contains('admin'))
                    @foreach($user as $rs)
                        <div class="col-sm-3 text-center animate-box" data-animate-effect="fadeIn">
                            <div class="fh5co-staff">
                                @if ($rs->profile_photo_path)
                                    <img src="{{Storage::url($rs->profile_photo_path)}}" height="50" style="border-radius: 150px" alt="">
                                @endif
                                <h3>{{$rs->name}}</h3>
                                <p>{{$rs->email}}</p>
                                <p>{{$rs->address}}</p>
                                <p>{{$rs->phone}}</p>
                                    <!--
                                <p class="fh5co-social-icons">
                                    <a href="#"><i class="icon-twitter2"></i></a>
                                    <a href="#"><i class="icon-facebook2"></i></a>
                                    <a href="#"><i class="icon-instagram"></i></a>
                                    <a href="#"><i class="icon-dribbble2"></i></a>
                                    <a href="#"><i class="icon-youtube"></i></a>
                                </p>
                                -->
                            </div>
                        </div>
                    @endforeach
                @endif
            @endauth
            <!--
            <div class="col-sm-3 text-center animate-box" data-animate-effect="fadeIn">
                <div class="fh5co-staff">
                    <img class="img-responsive" src="{{ asset('assets')}}/images/user-2.jpg" alt="Free HTML5 Templates by freeHTML5.co">
                    <h3>Hush Raven</h3>
                    <p>Quos quia provident consequuntur culpa facere ratione maxime commodi voluptates id repellat</p>
                    <p class="fh5co-social-icons">
                        <a href="#"><i class="icon-twitter2"></i></a>
                        <a href="#"><i class="icon-facebook2"></i></a>
                        <a href="#"><i class="icon-instagram"></i></a>
                        <a href="#"><i class="icon-dribbble2"></i></a>
                        <a href="#"><i class="icon-youtube"></i></a>
                    </p>
                </div>
            </div>
            <div class="col-sm-3 text-center animate-box" data-animate-effect="fadeIn">
                <div class="fh5co-staff">
                    <img class="img-responsive" src="{{ asset('assets')}}/images/user-3.jpg" alt="Free HTML5 Templates by freeHTML5.co">
                    <h3>Alex King</h3>
                    <p>Quos quia provident consequuntur culpa facere ratione maxime commodi voluptates id repellat</p>
                    <p class="fh5co-social-icons">
                        <a href="#"><i class="icon-twitter2"></i></a>
                        <a href="#"><i class="icon-facebook2"></i></a>
                        <a href="#"><i class="icon-instagram"></i></a>
                        <a href="#"><i class="icon-dribbble2"></i></a>
                        <a href="#"><i class="icon-youtube"></i></a>
                    </p>
                </div>
            </div>
            <div class="col-sm-3 text-center animate-box" data-animate-effect="fadeIn">
                <div class="fh5co-staff">
                    <img class="img-responsive" src="{{ asset('assets')}}/images/user-4.jpg" alt="Free HTML5 Templates by freeHTML5.co">
                    <h3>Hush Raven</h3>
                    <p>Quos quia provident consequuntur culpa facere ratione maxime commodi voluptates id repellat</p>
                    <p class="fh5co-social-icons">
                        <a href="#"><i class="icon-twitter2"></i></a>
                        <a href="#"><i class="icon-facebook2"></i></a>
                        <a href="#"><i class="icon-instagram"></i></a>
                        <a href="#"><i class="icon-dribbble2"></i></a>
                        <a href="#"><i class="icon-youtube"></i></a>
                    </p>
                </div>
            </div>
            -->
        </div>
    </div>
</div>
