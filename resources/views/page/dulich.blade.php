@extends('master-layout')
@section('title','Du Lich')
@section('content')
    @include('carosel_home')

    <link rel="stylesheet" type="text/css" href="{{asset('css/dulich/dulich.css')}}">
    <div class="container travel-list">
        <h3 class="h3 text-center tour-gio-vang">Tour Miền Bắc</h3>
        <div class="row">
            @foreach($mienbac as $stt => $tour)
            <div class="col-md-3 col-sm-6">
                <div class="product-grid4">
                    <div class="product-image4">
                        <a href="{{route('chitiettour',$tour->slug)}}">
                            <img class="pic-1 img-fluid"
                                 src="img/tour/{{$tour->avatar}}">
                            <img class="pic-2"
                                 src="https://dulichviet.com.vn/images/bandidau/images/CHAU%20A-%20HA%20NOI/2018/H%C3%A0%20Giang%20-%20Cao%20B%E1%BA%B1ng%20-%20B%E1%BA%AFc%20K%E1%BA%A1n/900x500_nha_vua_meo_ha_giang_du_lich_viet.png">
                        </a>

                        <span class="product-new-label">{{round(((($tour->gia)-($tour->giamoi))*100)/$tour->gia)}}%</span>
                    </div>
                    <div class="product-content">
                        <h3 class="title p-1"><a href="{{route('chitiettour',$tour->slug)}}"><b>{{$tour->name}}</b> <img
                                    src="{{asset('img/hot.gif')}}"
                                    alt=""></a></h3>
                        <div class="price">
                            <p>{{number_format($tour->giamoi)}}đ</p>
                            <span>{{number_format($tour->gia)}}đ</span>
                        </div>
                    </div>
                    <a class="add-to-cart dat-tour-mien-bac" href="{{route('dattour',$params = ['id'=> $tour->slug])}}"><b>Đặt Tour</b></a>
                </div>
            </div>
            @endforeach
        </div>
        <h3 class="text-center p-3"><a href="{{route('danhsach',$params = ['id'=> 1])}}" class=" btn-outline-primary btn">Xem Thêm</a></h3>


    </div>
    <div class="container">
        <h3 class="h3 text-center tour-gio-vang">Tour Miền Trung</h3>
        <div class="row">
            @foreach($mientrung as $stt => $tour)
                <div class="col-md-3 col-sm-6">
                <div class="product-grid4">
                    <div class="product-image4">
                        <a href="{{route('chitiettour',$tour->slug)}}">
                            <img  class="pic-1 img-fluid"
                                 src="img/tour/{{$tour->avatar}}">
                            <img class="pic-2"
                                 src="https://dulichviet.com.vn/images/bandidau/images/CHAU%20A-%20HA%20NOI/2018/H%C3%A0%20Giang%20-%20Cao%20B%E1%BA%B1ng%20-%20B%E1%BA%AFc%20K%E1%BA%A1n/900x500_nha_vua_meo_ha_giang_du_lich_viet.png">
                        </a>

                        <span class="product-new-label">{{round(((($tour->gia)-($tour->giamoi))*100)/$tour->gia)}}%</span>
                    </div>
                    <div class="product-content">
                        <h3 class="title p-1"><a href="{{route('chitiettour',$tour->slug)}}"><b>{{$tour->name}}</b> <img
                                    src="{{asset('img/hot.gif')}}"
                                    alt=""></a></h3>
                        <div class="price">
                            <p>{{number_format($tour->giamoi)}}đ</p>
                            <span>{{number_format($tour->gia)}}đ</span>
                        </div>
                    </div>
                    <a class="add-to-cart dat-tour-mien-bac" href="{{route('dattour',$params = ['id'=> $tour->slug])}}"><b>Đặt Tour</b></a>
                </div>
            </div>
            @endforeach
        </div>
        <h3 class="text-center p-3"><a href="{{route('danhsach',$params = ['id'=> 2])}}" class=" btn-outline-primary btn">Xem Thêm</a></h3>
    </div>


    <div class="container">
        <h3 class="h3 text-center tour-gio-vang">Tour Miền Nam</h3>
        <div class="row">
            @foreach($miennam as $stt => $tour)
                <div class="col-md-3 col-sm-6">
                <div class="product-grid4">
                    <div class="product-image4 ">
                        <a href="{{route('chitiettour',$tour->slug)}}">
                            <img class="pic-1 img-fluid"
                                 src="img/tour/{{$tour->avatar}}">
                            <img class="pic-2"
                                 src="https://dulichviet.com.vn/images/bandidau/images/CHAU%20A-%20HA%20NOI/2018/H%C3%A0%20Giang%20-%20Cao%20B%E1%BA%B1ng%20-%20B%E1%BA%AFc%20K%E1%BA%A1n/900x500_nha_vua_meo_ha_giang_du_lich_viet.png">
                        </a>

                        <span class="product-new-label">{{round(((($tour->gia)-($tour->giamoi))*100)/$tour->gia)}}%</span>
                    </div>
                    <div class="product-content">
                        <h3 class="title p-1"><a href="{{route('chitiettour',$tour->slug)}}"><b>{{$tour->name}}</b> <img
                                    src="{{asset('img/hot.gif')}}"
                                    alt=""></a></h3>
                        <div class="price">
                            <p>{{number_format($tour->giamoi)}}đ</p>
                            <span>{{number_format($tour->gia)}}đ</span>
                        </div>
                    </div>
                    <a class="add-to-cart dat-tour-mien-bac" href="{{route('dattour',$params = ['id'=> $tour->slug])}}"><b>Đặt Tour</b></a>
                </div>
            </div>
            @endforeach
        </div>
        <h3 class="text-center p-3"><a href="{{route('danhsach',$params = ['id'=> 3])}}" class=" btn-outline-primary btn">Xem Thêm</a></h3>
    </div>
@endsection
