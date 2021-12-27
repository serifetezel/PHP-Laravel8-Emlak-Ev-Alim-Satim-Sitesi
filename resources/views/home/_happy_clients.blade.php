<div id="fh5co-testimonial" style="background-image:url({{ asset('assets')}}/images/img_bg_2.jpg);">
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                <h2>Questions From You</h2>
            </div>
        </div>
        <div class="row">
            @foreach($faq as $rs)
            <div class="col-md-4">
                <div class="box-testimony animate-box">
                    <a href="{{route('blog')}}">
                    <blockquote>
                         <span class="quote"><span><i class="icon-question"></i></span></span>


                            <div class="span">
                                <h3>{{$rs->question}}</h3></div>
                            <div>
                                <p>{!! $rs->answer !!}</p>
                            </div>


                        </blockquote></a>
                    <!--
                    <p class="author">John Doe, CEO <a href="http://freehtml5.co/" target="_blank">FREEHTML5.co</a> <span class="subtext">Creative Director</span></p>
                -->
                </div>

            </div>
            <!--
            <div class="col-md-4">
                <div class="box-testimony animate-box">
                    <blockquote>
                        <span class="quote"><span><i class="icon-quotes-right"></i></span></span>
                        <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.&rdquo;</p>
                    </blockquote>
                    <p class="author">John Doe, CEO <a href="http://freehtml5.co/" target="_blank">FREEHTML5.co</a> <span class="subtext">Creative Director</span></p>
                </div>
            </div>
            -->
            @endforeach
        </div>
    </div>
</div>
