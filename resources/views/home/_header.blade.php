
<header id="fh5co-header-section" class="sticky-banner">
    <div class="container">
        @php
            $parentCategories = \App\Http\Controllers\HomeController::categorylist()
        @endphp
        <div class="nav-header">
            <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
            <h1 id="fh5co-logo"><a href="{{route('home')}}"><i class="icon-home"></i>Home<span>state</span></a></h1>
            <!-- START #fh5co-menu-wrap -->
            <nav id="fh5co-menu-wrap" role="navigation">
                <ul class="sf-menu" id="fh5co-primary-menu">
                <li class="sf-menu" id="fh5co-primary-menu">
                    <li class="active"><a href="{{route('home')}}">Home</a></li>
                    <li>
                        <a href="properties.html"  class="fh5co-sub-ddown">Categories</a>
                        <ul class="fh5co-sub-menu">
                            @foreach($parentCategories as $rs)
                                <li>
                                    <a class="fh5co-sub-ddown" data-toggle="dropdown" aria-expanded="true">{{$rs->title}}<i class="fa fa-angle-right"></i></a>
                                    <ul class="fh5co-sub-menu">
                                        <a class="fh5co-sub-ddown" data-toggle="dropdown" aria-expanded="true">
                                            <ul class="fh5co-sub-menu">
                                        @if(count($rs->children))
                                            @include('home.categorytree',['children' => $rs->children])
                                        @endif
                                            </ul>
                                            <i class="fa fa-angle-right"></i></a>
                                    </ul>

                                </li>
                            @endforeach
                        </ul>
                    </li>

                    <li>
                        <a href="properties.html"  class="fh5co-sub-ddown">Properties</a>
                        <ul class="fh5co-sub-menu">
                            <li><a href="#">Family</a></li>
                            <li><a href="#">CSS3 &amp; HTML5</a></li>
                            <li><a href="#">Angular JS</a></li>
                            <li><a href="#">Node JS</a></li>
                            <li><a href="#">Django &amp; Python</a></li>
                        </ul>
                    </li>

                    <li><a href="agent.html">Agent</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    @guest
                    <li><a href="/login">
                            <img src="{{ asset('assets')}}/images/login.jpg" height="25">Login</a></li>
                    <li><a href="/register">
                            <img src="{{ asset('assets')}}/images/c_account.png" height="20">Create Account</a></li>
                    @endguest
                    <li><a class="fh5co-sub-ddown" href="#" >
                                <img src="{{ asset('assets/admin')}}/assets/images/faces/face15.jpg" alt="" height="35">
                            @auth
                                <a href="#" style="font-size:12px; color:#0a0a0a" class="fh5co-sub-ddown" data-toggle="dropdown" aria-expanded="true">{{ Auth::user()->name }}</a>
                            @endauth
                            <ul class="fh5co-sub-menu">
                                <li><a href="{{route('logout')}}" onclick="return !window.open(this.href, '','top=50 left=100,width=1100,height=700')">
                                        <img src="{{ asset('assets')}}/images/logout.png" height="20">Logout</a></li>
                            </ul>
                        </a>
                        <!--
                        <ul class="fh5co-sub-menu">
                        <a class="dropdown-item preview-item">
                                <p class="preview-subject mb-1">Log out</p>
                        </a>
                        </ul>
                        -->

                    </li>




                </ul>
            </nav>
        </div>
    </div>
</header>
