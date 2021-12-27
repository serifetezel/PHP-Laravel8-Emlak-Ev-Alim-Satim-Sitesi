<div id="fh5co-contact" class="fh5co-contact">
    <div class="half-contact">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-md-offset-0 text-center heading-section animate-box">
                    <h3>Ask an agent, We're here to help 24/7</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis maiores, perspiciatis
                        accusamus asperiores sint consequuntur debitis.</p>
                    <br>
                    <div class="pull-right">
                        <li class="ml-auto"><a href="{{url('/')}}/contact"><i class="fa fa-dashboard">Go to Contact
                                    Page</i> </a></li>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                @include('home.message')
                <form id="checkout-form" class="clearfix" method="post" action="{{route('sendmessage')}}">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 animate-box">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name"
                                               placeholder="Name & Surname">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="phone" placeholder="Phone Number">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="subject" placeholder="Subject">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea type="text" rows="5" class="form-control" name="message"
                                                  placeholder="Message"></textarea>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="pull-right">
                                        <input type="submit" value="Send Message" class="btn btn-primary">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="half-bg" style="background-image: url({{ asset('assets')}}/images/cover_bg_2.jpg);"></div>
</div>
