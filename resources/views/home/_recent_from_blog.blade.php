<div id="fh5co-blog-section" class="fh5co-section-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                <h3>Recent From Blog</h3>
                <p>Comments from you on our ads...</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row row-bottom-padded-md">
            @foreach($review as $rs)
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="fh5co-blog animate-box">
                    <a href="#"><img class="img-responsive" src="{{Storage::url($rs->home->image)}}" alt=""></a>
                    <div class="blog-text">
                        <div class="prod-title">
                            <h3>{{$rs->home->title}}</h3>
                            <hr>
                            <h3>{{$rs->subject}}</h3>
                            <p>{{$rs->review}}</p>
                            <span class="posted_by">{{$rs->created_at}}</span>
                            <span class="comment"><a href="">{{$rs->rate}}<i class="icon-star-full"></i></a></span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
