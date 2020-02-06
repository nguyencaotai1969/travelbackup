@extends('master-layout')
@section('title','Kết quả tìm kiếm')
@section('content')
    @include('carosel_home')
    <link rel="stylesheet" type="text/css" href="{{asset('css/tour/chitietdiemden.css')}}">
    <!-- Link font GG -->
    <link href="https://fonts.googleapis.com/css?family=Baloo|Charm|IBM+Plex+Serif|Lobster|Playfair+Display&display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Baloo|Baloo+Paaji|Charm|IBM+Plex+Serif|Lobster|Pattaya|Playfair+Display&display=swap"
          rel="stylesheet">

    <div id="content">
        <div class="container detail-des">
            <h3>Kết quả tìm kiếm</h3><br><br>
            @isset($err)
                <p class="alert alert-danger" role="alert">
                    <button type="button" class="close" data-dismiss="alert">x</button>

                    <span>{{$err}}</span>
                </p>
            @endisset

            <div class="row" id="list">
                @isset($search)
                <div class="col-lg-9 col-md-12" id="tour-list">
                    @foreach($search as $stt => $tour)
                        <div class="tour row">
                            <div class="image-2 col-md-4">
                                <img src="img/tour/{{$tour->avatar}}" alt="travel du lịch, vi vu vi vu,tìm kiếm tour du lịch">
                            </div>
                            <div class="info col-md-8">
                                <h5>
                                    <a href="{{route('chitiettour',$tour->slug)}}">
                                        <marquee direction="right" with="200">
                                                        <b>{{$tour->name}}</b>
                                                    </marquee>
                                    </a>
                                </h5>
                                <div class="row">
                                    <div class="left col-md-6">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i><br>
                                        <span>Mã: {{$tour->id}}</span><br>
                                        <span>Thời gian: {{$tour->songay}} ngày<br>
                                        <span>Khởi hành: {{$tour->noikhoihanh}}</span><br>
                                        <span>Ngày khởi hành: {{$tour->ngaykhoihanh}}</span>
                                    </div>
                                    <div class="right col-md-6 ml-auto">
                                        <br>
                                        <span>Số chỗ còn: {{$tour->socho}}</span><br>
                                        <span>Giá 1 khách:</span><br>
                                        <span style="color: red; font-size: 22px;"><b><marquee behavior="alternate" width="150">{{number_format($tour->giamoi)}}đ</marquee></b></span>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                        </div>
                        <br><br>
                    @endforeach
                    <div class="justify-content-center row ">
                    <div class="col-md-4">{{$search->appends($params)->links()}}</div></div>
                </div>
                @endisset
                <div class="col-lg-3 col-md-12" id="list-news">
                    <h4>Tin tức</h4>
                    @foreach($listnews as $stt => $news)
                    <div class="row news pt-2">
                        <a href="{{route('chitiet',$news->slug)}}">
                        <p>
                            <img src="../public/img/news/{{$news->avatar}}"style="border: 1px solid blue" alt="">
                        </p>
                            <marquee behavior="alternate"><marquee width="150">
                        <b class="btn-primary">{{$news->tieude}}
                            </b></marquee></marquee>
                        </a>
                    </div>
                    @endforeach

                </div>
            </div>

        </div>
    </div>
@endsection
