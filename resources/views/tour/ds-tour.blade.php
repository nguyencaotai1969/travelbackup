@extends('master-layout')
@section('title','Chi tiết điểm đến')
@section('content')
    @include('carosel_home')
    <link rel="stylesheet" type="text/css" href="{{asset('css/tour/dstour.css')}}">
    <link
        href="https://fonts.googleapis.com/css?family=Baloo|Charm|IBM+Plex+Serif|Lobster|Playfair+Display&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Baloo|Baloo+Paaji|Charm|IBM+Plex+Serif|Lobster|Pattaya|Playfair+Display&display=swap"
        rel="stylesheet">
    <div id="content">
        <div class="container ds-tour">
            <h3>Tour {{$mien->name}}</h3><br><br>
            <div class="row" id="list">
                <div class="col-lg-9 col-md-12" id="tour-list">
                    <h4>Danh sách tour</h4>
                    @foreach($listtour as $stt => $tour)
                        <div class="tour row">
                            <div class="image-2 col-md-4">
                                <img src="../img/tour/{{$tour->avatar}}" alt="">
                            </div>
                            <div class="info col-md-8">
                                <h5><a href="{{route('chitiettour',$params = ['id'=> $tour->slug])}}"><b><marquee direction="right"><marquee width="150">{{$tour->name}}</marquee></marquee></b></a></h5>
                                <div class="row">
                                    <div class="left col-md-6">
                                        <marquee direction="right"><marquee width="400">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                            </marquee></marquee><br>
                                        <span>Mã: {{$tour->id}}</span><br>
                                        <span>Thời gian: {{$tour->songay}} ngày<br>
                                        <span>Khởi hành: {{$tour->noikhoihanh}}</span><br>
                                        <span>Ngày khởi hành: {{$tour->ngaykhoihanh}}</span>
                                    </div>
                                    <div class="right col-md-5 ml-auto">
                                        <br>
                                        <span>Số chỗ còn: {{$tour->socho}}</span><br>
                                        <span>Giá 1 khách:</span><br>
                                        <span style="color: red; font-size: 22px"><b><marquee behavior="alternate">{{number_format($tour->giamoi)}}đ</marquee></b></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br><br>
                    @endforeach
                    <br>
                    <div class="justify-content-center row ">
                    <div class="col-md-4">{{$listtour->links()}}</div></div>
                </div>
                <div class="col-lg-3 col-md-12" id="list-news">
                    <h4>Tin tức</h4>
                    @foreach($listnews as $stt => $news)
                    <div class="row news pt-4">
                        <a href="{{route('chitiet',$news->slug)}}" >
                        <img src="../img/news/{{$news->avatar}}" style="border: 1px solid #0037ff;" alt="travel-du lich">
                                <p>
                                    <marquee behavior="alternate"><marquee width="200">
                                    <b>{{$news->tieude}}</b>
                                        </marquee></marquee>
                                </p>
                        </a>
                    </div>
                    @endforeach


                </div>
            </div>

        </div>
    </div>
@endsection
