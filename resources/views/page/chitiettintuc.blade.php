@extends('master-layout')
@section('title','Chi Tiết Tin Tức')
@section('content')
    <style type="text/css" media="screen">

       .news,h4{text-align: center;}
        .ndtintuc img{width: 675px !important;height: auto !important}
    </style>
    <link rel="stylesheet" type="text/css" href="{{asset('css/chitiet/chitiet.css')}}">
    <section class="main-content bg-light py-4 mb-5">
        <div class="container carosel-chitiet">
            <div class="row">
                <div class="col-md-8">
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4>{{$news->tieude}}</h4>
                                            <p><i class="fas fa-clock"></i> {{$news->ngaydang}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 ndtintuc">
                                            {!! $news->noidung !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 news">
                    <h3 class="btn-primary">Tin Tức Mới</h3>
                    @foreach($listnews as $stt => $news)
                    <div class="row mb-3">
                        <div class="col-md-12">

                            <div class="card">
                                <div class="card-body caption">
                                    <a href="{{route('chitiet',$news->slug)}}" title="">
                                    <img class="img-fluid"
                                         src="../img/news/{{$news->avatar}}"
                                         alt="" style=" border-radius: 10px;border: 2px solid blue">
                                        <p class="mb-1"><marquee behavior="alternate"><marquee width="150">{{$news->tieude}}</marquee></marquee></p>
                                    </a>
                                </div>

                            </div>
                        </div>

                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
