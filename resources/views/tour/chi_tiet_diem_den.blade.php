@extends('master-layout')
    <title>{!!$des->name!!}</title>
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
            <h3>Du lịch {{$des->name}}</h3><br><br>
            <div class="row text-left text-xs-center text-md-left" id="des-detail">
                <div class="image-1 col-md-5">
                    <img class="col-md-12" src="../../public/img/des/{{$des->img}}" alt="">
                </div>
                <div class="detail col-md-7 ml-auto">
                    <p>{!!$des->gioithieu!!}</p>

                </div>
            </div>
            <br><br>

            {{--Danh sách tour--}}
            <div class="row" id="list">
                <div class="col-lg-9 col-md-12" id="tour-list">
                    <h4>Tour {{$des->name}}</h4>
                    @foreach($listtour as $stt => $tour)
                    <div class="tour row">
                        <div class="image-2 col-md-4">
                            <img src="../img/tour/{{$tour->avatar}}" alt="">
                        </div>
                        <div class="info col-md-8">
                            <h5><a href="{{route('chitiettour',$params = ['id'=> $tour->slug])}}"><b>{{$tour->name}}</b></a></h5>
                            <div class="row">
                                <div class="left col-md-6">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i><br>
                                    <span>Mã: {{$tour->id}}</span><br>
                                    <span>Thời gian: {{$tour->songay}} ngày</span><br>
                                    <span>Nơi khởi hành: {{$tour->noikhoihanh}}</span><br>
                                    <span>Ngày khởi hành: {{$tour->ngaykhoihanh}}</span>
                                </div>
                                <div class="right col-md-5 ml-auto">
                                    <span>Số chỗ còn: {{($tour->socho)-($tour->sochodadat)}}</span><br><br>
                                    <span>Giá 1 khách:</span><br>
                                    <span style="color: red; font-size: 22px"><b>{{                     number_format($tour->giamoi)}}đ</b></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br><br>
                    @endforeach
                    {{--  Phân trang--}}
                    <div class="justify-content-center row ">
                    <div class="col-md-4">{{$listtour->links()}}</div></div>
                </div>

                {{-- Tin tức--}}
                <div class="col-lg-3 col-md-12" id="list-news">
                    <h4>Tin tức</h4>
                    @foreach($listnews as $stt => $news)
                    <div class="row news pt-2">
                        <a href="{{route('chitiet',$news->slug)}}">
                        <p><img src="../img/news/{{$news->avatar}}" alt=""></p>
                        <b class="text-primary">{{$news->tieude}}</b>
                            <hr>
                        </a>
                    </div>
                    @endforeach

                </div>
            </div>

        </div>
    </div>
@endsection
