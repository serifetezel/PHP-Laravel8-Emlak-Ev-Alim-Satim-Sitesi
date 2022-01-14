@php
$setting=\App\Http\Controllers\HomeController::getSetting()
    @endphp
<footer>
    <div id="footer">
        <div class="container">
            <div class="row row-bottom-padded-md">
                <div class="col-md-3">
                    <h3 class="section-title">About Company</h3>
                    <p>HOMESTATE, which is the first address that comes to mind in all kinds of real estate ads and shopping such as houses and offices, has been offering the most suitable and most comfortable real estate ads to its users for many years.</p>
                    <strong style="color: #cbd5e0">Company  :</strong> {{$setting->company}}<br>
                    <strong style="color: #cbd5e0">Address  :</strong> {{$setting->address}}<br>
                    <strong style="color: #cbd5e0">Phone  :</strong> {{$setting->phone}}<br>
                    <strong style="color: #cbd5e0">Fax  :</strong> {{$setting->fax}}<br>
                    <strong style="color: #cbd5e0">Email  :</strong> {{$setting->email}}<br>
                </div>

                <div class="col-md-3 col-md-push-1">
                    <h3 class="section-title">My Account</h3>
                    <ul>
                        <li><a href="{{route('myprofile')}}">My Account</a></li>
                        <li><a href="{{route('user_products')}}">My Product List</a></li>
                        <li><a href="{{route('admin_login')}}">Login</a></li>
                    </ul>
                </div>

                <div class="col-md-3 col-md-push-1">
                    <h3 class="section-title">Customer Service</h3>
                    <ul>
                        <li><a href="{{route('aboutus')}}">About Us</a></li>
                        <li><a href="{{route('blog')}}">Blog</a></li>
                        <li><a href="{{route('blog')}}">FAQ </a></li>
                        <li><a href="{{route('contact')}}">Contact</a></li>
                        <li><a href="{{route('references')}}">References</a></li>
                        <li><a href="{{route('allhome')}}">All Homes</a></li>
                    </ul>
                </div>

                <div class="col-md-3">
                    <h3 class="section-title">Information</h3>
                    <ul>
                        <li><a href="#">Terms &amp; Condition</a></li>
                        <li><a href="#">License</a></li>
                        <li><a href="#">Privacy &amp; Policy</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h3 class="section-title">Newsletter</h3>
                    <p>Subscribe for our newsletter</p>
                    <form class="form-inline" id="fh5co-header-subscribe">
                        <div class="row">
                            <div class="col-md-12 col-md-offset-0">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="email" placeholder="Enter your email">
                                    <button type="submit" class="btn btn-default"><i class="icon-paper-plane"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="fh5co-social-icons">
                        @if($setting->twitter!=null)<a href="{{$setting->twitter}}" target="_blank"><i class="icon-twitter2"></i></a>@endif
                        @if($setting->facebook!=null)<a href="{{$setting->facebook}}" target="_blank"><i class="icon-facebook2"></i></a>@endif
                        @if($setting->instagram!=null)<a href="{{$setting->instagram}}" target="_blank"><i class="icon-instagram"></i></a>@endif
                        <a href="#"><i class="icon-dribbble2"></i></a>
                        @if($setting->youtube!=null)<a href="{{$setting->youtube}}" target="_blank"><i class="icon-youtube"></i></a>@endif
                    </p>
                    <p>Copyright 2016 Free Html5 <a href="#">Module</a>. All Rights Reserved. <br>Made with <i class="icon-heart3"></i>  {{$setting->company}}</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="{{ asset('assets')}}/js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="{{ asset('assets')}}/js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="{{ asset('assets')}}/js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="{{ asset('assets')}}/js/jquery.waypoints.min.js"></script>
<script src="{{ asset('assets')}}/js/sticky.js"></script>
<!-- Superfish -->
<script src="{{ asset('assets')}}/js/hoverIntent.js"></script>
<script src="{{ asset('assets')}}/js/superfish.js"></script>
<!-- Flexslider -->
<script src="{{ asset('assets')}}/js/jquery.flexslider-min.js"></script>
<!-- Date Picker -->
<script src="{{ asset('assets')}}/js/bootstrap-datepicker.min.js"></script>
<!-- CS Select -->
<script src="{{ asset('assets')}}/js/classie.js"></script>
<script src="{{ asset('assets')}}/js/selectFx.js"></script>


<!-- Main JS -->
<script src="{{ asset('assets')}}/js/main.js"></script>
