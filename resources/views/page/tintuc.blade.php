@extends('master-layout')
@section('title','Tin Tức')
@section('content')
    <link rel="stylesheet" type="text/css" href="{{asset('css/tintuc/tintuc.css')}}">
    <div class="container carosel-tintuc">
        <!--Start code-->
        <h2 class="text-center tour-gio-vang">Tin Tức Nổi Bật</h2>
        <div class="row">

            <div class="col-12">
                <!--SECTION START-->
                <section class="row">

                    <!--Start slider news-->
                    <div class="col-12 col-md-6 pb-0 pb-md-3 pt-3">
                        <div id="featured" class="carousel slide carousel" data-ride="carousel">
                            <!--dots navigate-->

                            <!--carousel inner-->
                            <div class="carousel-inner">
                                <!--Item slider-->


                                <!--Item slider-->
                                <div class="carousel-item active">
                                    <div class="card border-0 rounded-0 text-light overflow zoom">
                                        <div class="position-relative">
                                            <!--thumbnail img-->
                                            <div class="ratio_left-cover-1 image-wrapper">
                                                <a href="{{route('chitiet',$first->slug)}}">
                                                    <img class="img-fluid w-100"
                                                         src="../public/img/news/{{$first->avatar}}"
                                                         alt="Image description">
                                                </a>
                                            </div>
                                            <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                                <!--title-->
                                                <a href="{{route('chitiet',$first->slug)}}">
                                                    <h2 class="h3 post-title text-white my-1"><marquee direction="right">{{$first->tieude}}</marquee></h2>
                                                </a>
                                                <!-- meta title -->
                                                <div class="news-meta">
                                                    <span class="news-date">{{
                                                    date('d-m-Y',strtotime($first->ngaydang))
                                                    }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!--end carousel inner-->
                        </div>
                    </div>
                    <div class="col-12 col-md-6 pt-2 pl-md-1 mb-3 mb-lg-4">
                        <div class="row">
                            @foreach($listnews1 as $stt => $news)
                                <div class="col-6 pb-2 pt-2">
                                    <div class="card border-0 rounded-0 text-white overflow zoom">
                                        <div class="position-relative">
                                            <!--thumbnail img-->
                                            <div class="ratio_right-cover-2 image-wrapper">
                                                <a href="{{route('chitiet',$news->slug)}}">
                                                    <img class="img-fluid"
                                                         src="../public/img/news/{{$news->avatar}}"
                                                         alt="Image description">
                                                </a>
                                            </div>
                                            <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                                <!-- category -->
                                                <a class="p-1 badge badge-primary rounded-0"
                                                   href="{{route('chitiet',$news->slug)}}"><marquee direction="right">{{$news->tieude}}</marquee></a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                </section>

            </div>
        </div>
    </div>

    <div class="container" >
        <h2 class="text-center tour-gio-vang">Tin tức</h2>
        @foreach($listnews2 as $stt => $news)
            <div class="row tintuc-mgbt" lazy="loaded">
                <div class="col-md-4 image-wrapper" >
                    <a href="{{route('chitiet',$news->slug)}}" class="zoom">
                        <img width="340" lazy="loaded" class="img-fluid" height="200" src="../public/img/news/{{$news->avatar}}" alt="{{$news->tieude}}
                        {{date('d-m-Y',strtotime($first->ngaydang))}}">
                    </a>
                </div>
                <div class="col-md-8  ">
                    <a href="{{route('chitiet',$news->slug)}}">
                        <h5><p>{{$news->tieude}}</p></h5>
                    </a>
                    <p><i class="fas fa-clock">&nbsp;</i>{{$news->ngaydang}}</p>
                    <p>{{$news->tomtat}}</p>
                    <p style="border-radius: 9px">
                        <a href="{{route('chitiet',$news->slug)}}"><b> Chi Tiết ...</b></a>
                    </p>
                </div>
            </div>
        @endforeach
        <div class="justify-content-center row ">
            <div class="col-md-2">{{$listnews2->links()}}</div>
        </div>

    </div>

@endsection
