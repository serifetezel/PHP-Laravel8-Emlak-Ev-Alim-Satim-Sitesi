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
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
