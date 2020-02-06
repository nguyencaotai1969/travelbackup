@extends('master-layout')
@section('title','Liên Hệ')
<link rel="stylesheet" type="text/css" href="{{asset('css/lienhe/lienhe.css')}}">
@section('content')
    <section>
        <div class="container infor-tour">
            <div class="well well-sm">
                <h3><strong>Bản Đồ</strong></h3>
            </div>

            <div class="row">
                <div class="col-md-7">

                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.6782428854804!2d105.8018413146395!3d21.005531086010954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135aca22262c70d%3A0xeea32ea14ac4f313!2sITPlus%20Academy!5e0!3m2!1svi!2s!4v1568706892126!5m2!1svi!2s"
                        width="100%" height="315" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

                </div>

                <div class="col-md-5 mt-2">

                    {{--                    <div class="alert alert-success" role="alert">--}}
                    {{--                    </div>--}}
                    <h4><strong>Thông Tin</strong></h4>
                    @if ($errors->any())
                        <div>
                            <ul class="alert alert-danger" role="alert">
                                <button type="button" class="close" data-dismiss="alert">x</button>
                                @foreach ($errors->all() as $error)
                                    <li>
                                        <span>{{ $error }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if(Session::has('msg'))
                        <p class="alert alert-success" role="alert">
                            <button type="button" class="close" data-dismiss="alert">x</button>

                            <span>{{Session::get('msg')}}</span>
                        </p>
                    @endif
                    <form action="{{route('luulienhe')}}" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" value="" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" value="" placeholder="E-mail">
                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-control" name="phone" value="" placeholder="Phone">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="3" placeholder="Message"></textarea>
                        </div>
                        <h2 class="text-center p-3">
                            <button class="btn btn-primary" type="submit" name="button">
                                <i class="fa fa-paper-plane-o" aria-hidden="true"></i> Liên Hệ
                            </button>
                        </h2>
                            @csrf()
                        </form>
    </section>

@endsection
