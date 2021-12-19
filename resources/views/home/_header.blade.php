<header id="fh5co-header-section" class="sticky-banner">
    <div class="container">
        @php
            $parentCategories = \App\Http\Controllers\HomeController::categorylist()
        @endphp
        <div class="nav-header">
            <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
            <h1 id="fh5co-logo"><a href="index.html"><i class="icon-home"></i>Home<span>state</span></a></h1>
            <!-- START #fh5co-menu-wrap -->
            <nav id="fh5co-menu-wrap" role="navigation">
                <ul class="sf-menu" id="fh5co-primary-menu">
                <li class="sf-menu" id="fh5co-primary-menu">
                    <li class="active"><a href="index.html">Home</a></li>
                    <li>
                        <a href="properties.html"  class="fh5co-sub-ddown">Categories</a>
                        <ul class="fh5co-sub-menu">
                            @foreach($parentCategories as $rs)
                                <li>

                                    <a class="fh5co-sub-ddown" data-toggle="dropdown" aria-expanded="true">{{$rs->title}}<i class="fa fa-angle-right"></i></a>
                                    <ul class="fh5co-sub-menu">
                                        @if(count($rs->children))
                                            @include('home.categorytree',['children' => $rs->children])
                                        @endif
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
                </ul>
            </nav>
        </div>
    </div>
</header>
