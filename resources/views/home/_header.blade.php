<header id="fh5co-header-section" class="sticky-banner">
    <div class="container">
        <div class="nav-header">
            <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
            <h1 id="fh5co-logo"><a href="{{route('home')}}"><i class="icon-home"></i>Home<span>state</span></a></h1>
            <!-- START #fh5co-menu-wrap -->
            <nav id="fh5co-menu-wrap" role="navigation">
                <ul class="sf-menu" id="fh5co-primary-menu">
                    <li class="sf-menu" id="fh5co-primary-menu">
                    <li class="active"><a href="{{route('home')}}">Home</a></li>
                    <li>
                        <a href="#"  class="fh5co-sub-ddown">Categories</a>
                        @php
                            $parentCategories = \App\Http\Controllers\HomeController::categorylist()
                        @endphp
                        <ul class="fh5co-sub-menu">
                            @foreach($parentCategories as $rs)
                                <li>
                                    <a href="{{route('category_homes',['id'=>$rs->id])}}">{{$rs->title}}</a>
                                    <a  @if(!isset($page)) show-on-click @endif data-toggle="dropdown" aria-expanded="true">
                                        @if(count($rs->children))
                                            @include('home.categorytree',['children' => $rs->children])
                                        @endif
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li><a href="{{route('allhome')}}">All Homes</a></li>
                    <li><a href="{{route('aboutus')}}">About Us</a></li>
                    <li><a href="{{route('references')}}">References</a></li>
                    <li><a href="{{route('blog')}}">Blog</a></li>
                    <li><a href="{{route('contact')}}">Contact</a></li>

                    @guest
                        <li><a href="/login">
                                <img src="{{ asset('assets')}}/images/login.jpg" height="25">Login</a></li>
                        <li><a href="/register">
                                <img src="{{ asset('assets')}}/images/c_account.png" height="20">Create Account</a></li>
                    @endguest
                    <li>
                        <div style="text-align: center">
                            @auth
                                <img src="{{ Auth::user()->profile_photo_url}}" height="35" width="35">
                                <a href="#" style="font-size:12px; color:#0a0a0a" class="fh5co-sub-ddown" data-toggle="dropdown" aria-expanded="true">{{ Auth::user()->name }}</a>
                            @endauth</div>
                        <ul class="fh5co-sub-menu">
                            <li><a href="{{route('myprofile')}}" onclick="return !window.open(this.href, '','top=50 left=100,width=1100,height=700')">
                                    <img src="{{ asset('assets')}}/images/my_account.png" height="20" width="20">My Account</a></li>
                            <li><a href="{{route('user_products')}}" >
                                    <img src="{{ asset('assets')}}/images/my_product.png" height="20" width="20">My Product</a></li>
                            <li><a href="{{route('logout')}}" >
                                    <img src="{{ asset('assets')}}/images/logout.png" height="20" width="20">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
