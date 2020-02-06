
@extends('master-layout')
@section('title','Trang Chủ')
@section('content')
    @include('carosel_home')
    <link rel="stylesheet" type="text/css" href="{{asset('css/trangchu/trangchu.css')}}">
    {{-- Tour giờ vàng   --}}
    <div class="container">
        <div class="text-center pt-2">
            <h2 style="margin-top: 40px;    color: #1000ff;margin-bottom: 32px;
">Tour Giờ Vàng Giá Sốc</h2>
        </div>
        <div class="row">

            <div class="new-arrival">

                <div class="titlebar">

                    <div class="next-back">
                    <span>
                        <a data-slide="prev" href="#Carousel" class="left carousel-control"><img
                                src="{{asset('img/back_botton.png')}}" width="20"
                                alt="">
                        </a>
                    </span>
                        <span>
                        <a data-slide="next" href="#Carousel" class="right carousel-control"><img
                                src="
                                {{asset('img/next_botton.png')}}" width="17" alt="">
                        </a>
                    </span>
                    </div>
                </div>
                <div class="arrival-product">
                    <div id="Carousel" class="carousel slide" data-ride="carousel">
                        <!-- Carousel items -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    @foreach($listtour as $stt => $tour)
                                        <div class="col-md-3 col-sm-3 col-xs-3">
                                            <div class="product-grid">
                                                <div class="product-image">
                                                    <figure>
                                                    <a href="{{route('chitiettour',$tour->slug)}}">
                                                        <img class="pic-1"
                                                         src="img/tour/{{$tour->avatar}}" alt="{{$tour->name.$tour->noikhoihanh}}">
                                                        <img class="pic-2"
                                                             src="img/tour/{{$tour->avatar}}">
                                                    </a>
                                                    </figure>

                                                    <span class="product-new-label ">Còn <b class="demo"></b></span>
                                                    <span class="product-discount-label">{{round(((($tour->gia)-($tour->giamoi))*100)/$tour->gia)}}%</span>
                                                </div>
                                                <ul class="rating">
                                                    <span><b>{{$tour->danhgia}}</b></span>
                                                    <li class="fa fa-star"></li>
                                                    <li class="fa fa-star"></li>
                                                    <li class="fa fa-star"></li>
                                                    <li class="fa fa-star"></li>
                                                    <li class="fa fa-star disable"></li>
                                                </ul>
                                                <div class="product-content">
                                                    <h3 class="title">
                                                        <a href="{{route('chitiettour',$tour->slug)}}">{!!$tour->name!!}
                                                            <img
                                                                src="{{asset('img/hot.gif')}}" alt="">
                                                        </a>
                                                    </h3>
                                                    <div class="price">{{number_format($tour->giamoi)}}đ
                                                        <span>{{number_format($tour->gia)}}đ</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    @endforeach
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="row">
                                            @foreach($listtour_after as $stt => $tour)
                                                <div class="col-md-3 col-sm-3 col-xs-3">
                                                    <div class="product-grid">
                                                        <div class="product-image">
                                                            <a href="{{route('chitiettour',$tour->slug)}}">
                                                                <img class="pic-1"
                                                                     src="img/tour/{{$tour->avatar}}" alt="{{$tour->name}}'.'{{$tour->noikhoihanh}}">
                                                                <img class="pic-2"
                                                                     src="img/tour/{{$tour->avatar}}">
                                                            </a>

                                                            <span class="product-new-label demo"></span>
                                                            <span class="product-discount-label">{{round(((($tour->gia)-($tour->giamoi))*100)/$tour->gia)}}%
                                                        </span>
                                                        </div>
                                                        <ul class="rating">
                                                            <li class="fa fa-star"></li>
                                                            <li class="fa fa-star"></li>
                                                            <li class="fa fa-star"></li>
                                                            <li class="fa fa-star"></li>
                                                            <li class="fa fa-star disable"></li>
                                                            <span>{{$tour->danhgia}}</span>
                                                        </ul>
                                                        <div class="product-content">
                                                            <h3 class="title">
                                                                <a href="{{route('chitiettour',$tour->slug)}}">{{$tour->name}}
                                                                    <img
                                                                        src="{{asset('img/hot.gif')}}" alt="">
                                                                </a>
                                                            </h3>
                                                            <div class="price">{{number_format($tour->giamoi)}}đ
                                                                <span>{{number_format($tour->gia)}}đ</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Carousel-->
                </div>
            </div>
        </div>
    </div>

    {{-- Tour khuyến mai --}}
    <div class="container">
        <h2 style="margin-top: 40px" class="text-center tour-gio-vang">Tour Khuyến Mãi</h2>
{{--            <! Category Card >--}}
        <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
              <div class="carousel-inner w-100" role="listbox">
                          <div class="row" id="ads">
                                @foreach($toursale as $stt => $tour)
                                  <div class="col-md-4 col-xs-12 col-sm-12 p-2">
                                      <div class="card rounded">
                                          <div class="card-image">
                                              <span class="card-notify-badge"><marquee direction="right" >
                                            {{$tour->songay}} ngày</marquee></span>
                                              <span class="card-notify-year">{{round(((($tour->gia)-($tour->giamoi))*100)/$tour->gia)}}%</span>
                                              <figure>
                                              <a href="{{route('chitiettour',$tour->slug)}}">

                                                  <img class="img-fluid" src="img/tour/{{$tour->avatar}}"
                                                   alt="Alternate Text"/>

                                              </a>
                                              </figure>
                                          </div>
                                          <div class="card-image-overlay m-auto">
                                              <span class="card-detail-badge">{{number_format($tour->giamoi)}}đ</span>
                                              <span class="card-detail-badge khuyenmai-giamgia"><Strike>{{number_format($tour->gia)}}đ</Strike></span>
                                          </div>
                                          <div class="card-body text-center">
                                              <div class="ad-title m-auto">
                                                  <a href="{{route('chitiettour',$tour->slug)}}">
                                                  <h5>{{ucwords($tour->name)}}</h5></a>
                                              </div>
                                              <a class="ad-btn" href="{{route('chitiettour',$tour->slug)}}">
                                                  Xem
                                              </a>

                                          </div>
                                      </div>
                                  </div>
                              @endforeach
                          </div>
            </div>

        </div>
    </div>

    {{-- Điểm Đến Yêu Thích --}}
    <section class="our-webcoderskull padding-lg">
        <h2 class="text-center tour-gio-vang">Điểm Đến Yêu Thích Của Bạn</h2>
        <div class="container" >
            <ul class="row">
                <div class="MultiCarousel" data-items="1,2,3,4" data-slide="1" id="MultiCarousel"  data-interval="1000">
                    <div class="MultiCarousel-inner">
                        @foreach($listdes as $stt => $des)
                        <li class="item col-12 col-md-6 col-lg-4">
                                <a href="{{route('diemden',$des->slug)}}">
                                    <div class="cnt-block equal-hight">
                                        <figure>
                                            <img
                                                src="img/des/{{$des->img}}" width="200" alt="">
                                        </figure>
                                        <marquee behavior="alternate" onmouseover="this.stop()" onmouseout="this.start()">

                                        <ul class="follow-us clearfix">
                                            <li>

                                                    <h3>{{$des->name}}</h3>

                                            </li>

                                        </ul>
                                        </marquee>

                                    </div>
                                </a>
                        </li>
                        @endforeach


                    </div>
                    <button class="btn btn-primary leftLst"><</button>
                    <button class="btn btn-primary rightLst">></button>
                </div>
            </ul>
        </div>

    </section>

    {{-- our carosel --}}


    <div class="container">
        <h2 class="text-center tour-gio-vang">Đối Tác Của Chúng Tôi</h2>
        <section class="customer-logos-ourcarosel slider">
            <div class="slide"><img src="{{asset('img/logo_doitac/1.jpg')}}">
            </div>
            <div class="slide"><img src="{{asset('img/logo_doitac/2.jpg')}}"></div>
            <div class="slide"><img src="{{asset('img/logo_doitac/3.png')}}"></div>
            <div class="slide"><img
                    src="{{asset('img/logo_doitac/4.png')}}"></div>
            <div class="slide"><img src="{{asset('img/logo_doitac/5.png')}}"></div>
            <div class="slide"><img
                    src="{{asset('img/logo_doitac/6.png')}}"></div>
            <div class="slide"><img src="{{asset('img/logo_doitac/7.jpg')}}"></div>
        </section>

    </div>
    <script type="text/javascript" src="{{asset('js/datetime.js')}}"></script>
@endsection
@section('js')
    <script type="text/javascript" src="{{asset('js/ourcarosel.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/trangchu.js')}}"></script>
@endsection
