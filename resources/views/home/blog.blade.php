@extends('layouts.home')

@section('title','Frequently Asked Questions')

@section('headerjs')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>

@endsection

@section('content')
    <aside id="fh5co-hero" class="js-fullheight" style="height: 727px;">
        <div class="flexslider js-fullheight" style="height: 727px;">
            <ul class="slides">
                <li style="background-image: url{{ asset('assets')}}/images/hero.jpg; width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; z-index: 2; height: 727px;" class="flex-active-slide">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text animated fadeInUp" style="height: 727px;">
                                <div class="slider-text-inner">
                                    <h2 class="heading-title">Blog</h2>
                                    <h2 class="heading-title">&</h2>
                                    <h2 class="heading-title">Frequently Asked Questions</h2>
                                    <p class="fh5co-lead">Designed with <i class="icon-heart3"></i></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <ol class="flex-control-nav flex-control-paging"></ol><ul class="flex-direction-nav"><li class="flex-nav-prev"><a class="flex-prev flex-disabled" href="#" tabindex="-1">Previous</a></li><li class="flex-nav-next"><a class="flex-next flex-disabled" href="#" tabindex="-1">Next</a></li></ul></div>
    </aside>
    <div id="breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('home')}}">Home</a> </li>
                <li class="active">Frequently Asked Questions</li>
            </ul>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="span">
                <img src="{{ asset('assets')}}/images/choosing_home.png" height="45" width="45" style="float: left">
                <h3>Ev Se??iminin Yap??lmas??nda Dikkat Edilmesi Gerekenler</h3></div>
            <div>
                <p>
                    ???  Ev B??t??enizi Net Olarak Belirleyin<br>

                    ???  Akl??n??za Yatan T??m Ev Se??eneklerini ??n Elemeden Ge??irin<br>

                    ???  Almak ??stedi??iniz Evde Arac?? Olup Olmad??????n?? Kontrol Edin<br>

                    ???  Evin Krediye Uygunluk ??artlar??n?? Ara??t??r??n<br>

                    ???  ??stenilen Fiyat ile Piyasa De??erini K??yaslay??n<br>

                    ???  Evin ??zerinde ??potek veya Haciz Kayd?? Olup Olmad??????n?? Sorun<br>

                    ???  Evin Boyas?? Yeni Yap??ld??ysa Rutubet Olup Olmad??????na Dikkat Edin<br>

                    ???  Ula????m Se??eneklerini ve Sosyal Alanlara Yak??nl??????n?? De??erlendirin<br>

                    ???  Apartman D??zeni ve Kom??uluk ??li??kilerini Ara??t??r??n<br>

                    ???  Al??nacak Evde Kirac?? Varsa Kira S??zle??mesi ??artlar??n?? De??erlendirin
                </p>
            </div>
            <br><br>
            <div class="span">
                <img src="{{ asset('assets')}}/images/anahtar.png" height="45" width="45" style="float: left">
                <h3>Tapu ????lemleri S??ras??nda Dikkat Edilmesi Gerekenler </h3>
            </div>
            <div>
                <p>
                    ???  Gerekli Evraklar??n??z Haz??r Olarak Gidin<br>

                    ???  Evi Tapuya Ald??????n??z Fiyat ??zerinden Beyan Edin<br>

                    ???  Tapu Harc??n??n Kim Taraf??ndan ??denece??ini ??nden Konu??un
                </p>
            </div>
            <br><br>
            <div>
                <h2 style="color: #00a045">Sizlerden Gelen Sorular: </h2>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                    </div>
                <!--{{$i=1}}-->
                    @foreach($datalist as $rs)
                        @if($i==1)
                            <div class="panel-group" id="accordion-e1">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title active">

                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-e1"
                                               href="#{{$i}}">??????
                                                {{$rs->question}}
                                                <span class="fa fa-minus"></span>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="{{$i}}" class="panel-collapse collapse in ">
                                        <div class="panel-body">
                                            <p>{!! $rs->answer!!}</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <br>
                        <!-- {{$i=$i+1}}-->
                            @continue($i==2)
                        @endif

                        <div class="panel-group" id="accordion-e1">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">

                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-e1"
                                           href="#{{$i}}">??????
                                            {{$rs->question}}
                                            <span class="fa fa-minus"></span>
                                        </a>

                                    </h4>
                                </div>
                                <div id="{{$i}}" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>{!! $rs->answer!!}</p>
                                    </div>
                                </div>
                                <br>
                            </div>

                        </div>
                    <!-- {{$i=$i+1}}-->
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
